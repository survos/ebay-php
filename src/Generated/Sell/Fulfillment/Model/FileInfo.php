<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type is used by the files array, which shows the name, ID, file type, and upload date for each provided evidential file.
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class FileInfo
{
    /**
     * @param string|null $fileId The unique identifier of the evidence file.
     * @param string|null $fileType The type of file uploaded. Supported file extensions are .JPEG, .JPG, and .PNG., and maximum file size allowed is 1.5 MB.
     * @param string|null $name The seller-provided name of the evidence file.
     * @param string|null $uploadedDate The timestamp in this field shows the date/time when the seller uploaded the evidential document to eBay. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Co...
     */
    public function __construct(
        public ?string $fileId = null,
        public ?string $fileType = null,
        public ?string $name = null,
        public ?string $uploadedDate = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fileId: isset($data['fileId']) ? (string) $data['fileId'] : null,
            fileType: isset($data['fileType']) ? (string) $data['fileType'] : null,
            name: isset($data['name']) ? (string) $data['name'] : null,
            uploadedDate: isset($data['uploadedDate']) ? (string) $data['uploadedDate'] : null,
        );
    }

    /**
     * Null properties are omitted: eBay rejects some explicit nulls and reads
     * others as "clear this field", so emitting them is never harmless.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $data = [];
        if ($this->fileId !== null) {
            $data['fileId'] = $this->fileId;
        }
        if ($this->fileType !== null) {
            $data['fileType'] = $this->fileType;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->uploadedDate !== null) {
            $data['uploadedDate'] = $this->uploadedDate;
        }

        return $data;
    }
}
