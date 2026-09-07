<?php

declare(strict_types=1);

namespace Survos\Ebay\Tests;

use PHPUnit\Framework\TestCase;
use Survos\Ebay\Generated\Sell\Inventory\Model\Amount;
use Survos\Ebay\Generated\Sell\Inventory\Model\EbayOfferDetailsWithKeys;
use Survos\Ebay\Generated\Sell\Inventory\Model\OfferPriceQuantity;

/**
 * Guards the generator's output contract, not eBay's behaviour.
 */
final class GeneratedModelTest extends TestCase
{
    public function testNestedModelsHydrateFromWireData(): void
    {
        $offer = OfferPriceQuantity::fromArray([
            'offerId' => '9876543210',
            'availableQuantity' => 5,
            'price' => ['value' => '4.00', 'currency' => 'USD'],
        ]);

        self::assertSame('9876543210', $offer->offerId);
        self::assertSame(5, $offer->availableQuantity);
        self::assertInstanceOf(Amount::class, $offer->price);
        self::assertSame('4.00', $offer->price->value);
    }

    public function testToArrayOmitsNullsRatherThanEmittingThem(): void
    {
        $data = (new OfferPriceQuantity(offerId: '123'))->toArray();

        self::assertSame(['offerId' => '123'], $data);
        self::assertArrayNotHasKey('price', $data, 'eBay reads an explicit null as "clear this field"');
        self::assertArrayNotHasKey('availableQuantity', $data);
    }

    public function testRoundTripsWithoutLoss(): void
    {
        $wire = [
            'offerId' => '9876543210',
            'availableQuantity' => 5,
            'price' => ['value' => '4.00', 'currency' => 'USD'],
        ];

        // Key ORDER follows the schema, not the input, so compare contents.
        self::assertEqualsCanonicalizing($wire, OfferPriceQuantity::fromArray($wire)->toArray());
        self::assertEqualsCanonicalizing(
            $wire['price'],
            OfferPriceQuantity::fromArray($wire)->toArray()['price'],
            'nested models must round-trip too',
        );
    }

    public function testEveryPropertyIsOptionalBecauseTheContractDeclaresNoRequiredFields(): void
    {
        $empty = new EbayOfferDetailsWithKeys();

        self::assertSame([], $empty->toArray());
        self::assertNull($empty->categoryId);
    }

    public function testUnknownWireKeysAreIgnoredRatherThanFatal(): void
    {
        // eBay adds fields between contract refreshes; a client that dies on an
        // unrecognised key breaks in production every time they ship.
        $offer = OfferPriceQuantity::fromArray([
            'offerId' => '1',
            'somethingEbayAddedLastTuesday' => true,
        ]);

        self::assertSame('1', $offer->offerId);
    }

    public function testListsOfModelsHydrateAsLists(): void
    {
        $group = \Survos\Ebay\Generated\Sell\Inventory\Model\BulkOffer::fromArray([
            'requests' => [['offerId' => 'a'], ['offerId' => 'b']],
        ]);

        self::assertIsArray($group->requests);
        self::assertCount(2, $group->requests);
        self::assertSame('a', $group->requests[0]->offerId);
    }
}
