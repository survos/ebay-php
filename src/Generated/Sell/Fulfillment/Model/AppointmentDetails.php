<?php

declare(strict_types=1);

namespace Survos\Ebay\Generated\Sell\Fulfillment\Model;

/**
 * This type contains information used by the installation provider concerning appointment details selected by the buyer
 *
 * Generated from eBay's Fulfillment API OpenAPI contract. Do not edit.
 * Every property is nullable because the contract declares no required fields.
 */
final readonly class AppointmentDetails
{
    /**
     * @param string|null $appointmentEndTime The date and time the appointment ends, formatted as an ISO 8601 string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Required for tire installation. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]...
     * @param string|null $appointmentStartTime The date and time the appointment begins, formatted as an ISO 8601 string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2022-10-28T00:10:00...
     * @param string|null $appointmentStatus The status of the appointment. For implementation help, refer to eBay API documentation
     * @param string|null $appointmentType The type of appointment. MACRO appointments only have a start time (not bounded with end time). TIME_SLOT appointments have a period (both start time and end time). Required for tire installation. For implementation help...
     * @param string|null $appointmentWindow Appointment window for MACRO appointments. For implementation help, refer to eBay API documentation
     * @param string|null $serviceProviderAppointmentDate Service provider date of the appointment (no time stamp). Returned only for MACRO appointment types.
     */
    public function __construct(
        public ?string $appointmentEndTime = null,
        public ?string $appointmentStartTime = null,
        public ?string $appointmentStatus = null,
        public ?string $appointmentType = null,
        public ?string $appointmentWindow = null,
        public ?string $serviceProviderAppointmentDate = null,
    ) {
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            appointmentEndTime: isset($data['appointmentEndTime']) ? (string) $data['appointmentEndTime'] : null,
            appointmentStartTime: isset($data['appointmentStartTime']) ? (string) $data['appointmentStartTime'] : null,
            appointmentStatus: isset($data['appointmentStatus']) ? (string) $data['appointmentStatus'] : null,
            appointmentType: isset($data['appointmentType']) ? (string) $data['appointmentType'] : null,
            appointmentWindow: isset($data['appointmentWindow']) ? (string) $data['appointmentWindow'] : null,
            serviceProviderAppointmentDate: isset($data['serviceProviderAppointmentDate']) ? (string) $data['serviceProviderAppointmentDate'] : null,
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
        if ($this->appointmentEndTime !== null) {
            $data['appointmentEndTime'] = $this->appointmentEndTime;
        }
        if ($this->appointmentStartTime !== null) {
            $data['appointmentStartTime'] = $this->appointmentStartTime;
        }
        if ($this->appointmentStatus !== null) {
            $data['appointmentStatus'] = $this->appointmentStatus;
        }
        if ($this->appointmentType !== null) {
            $data['appointmentType'] = $this->appointmentType;
        }
        if ($this->appointmentWindow !== null) {
            $data['appointmentWindow'] = $this->appointmentWindow;
        }
        if ($this->serviceProviderAppointmentDate !== null) {
            $data['serviceProviderAppointmentDate'] = $this->serviceProviderAppointmentDate;
        }

        return $data;
    }
}
