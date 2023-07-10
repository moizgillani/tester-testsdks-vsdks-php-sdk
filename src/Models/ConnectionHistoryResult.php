<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Response containing the connection history. It is a list of Network Connection Events for a device.
 */
class ConnectionHistoryResult implements \JsonSerializable
{
    /**
     * @var ConnectionEvent[]|null
     */
    private $connectionHistory;

    /**
     * @var bool|null
     */
    private $hasMoreData;

    /**
     * Returns Connection History.
     * Device connection events, sorted by the occurredAt timestamp, oldest first.
     *
     * @return ConnectionEvent[]|null
     */
    public function getConnectionHistory(): ?array
    {
        return $this->connectionHistory;
    }

    /**
     * Sets Connection History.
     * Device connection events, sorted by the occurredAt timestamp, oldest first.
     *
     * @maps connectionHistory
     *
     * @param ConnectionEvent[]|null $connectionHistory
     */
    public function setConnectionHistory(?array $connectionHistory): void
    {
        $this->connectionHistory = $connectionHistory;
    }

    /**
     * Returns Has More Data.
     * False for a status 200 response.True for a status 202 response, indicating that there is more data
     * to be retrieved. Send another request, adjusting the earliest value in the request based on the
     * occuredAt value for the last device in the current response.
     */
    public function getHasMoreData(): ?bool
    {
        return $this->hasMoreData;
    }

    /**
     * Sets Has More Data.
     * False for a status 200 response.True for a status 202 response, indicating that there is more data
     * to be retrieved. Send another request, adjusting the earliest value in the request based on the
     * occuredAt value for the last device in the current response.
     *
     * @maps hasMoreData
     */
    public function setHasMoreData(?bool $hasMoreData): void
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->connectionHistory)) {
            $json['connectionHistory'] = $this->connectionHistory;
        }
        if (isset($this->hasMoreData)) {
            $json['hasMoreData']       = $this->hasMoreData;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
