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
 * Request to list of all 4G devices with an ICCID (SIM) that was not activated with the expected IMEI
 * (hardware) during a specified time frame.
 */
class DeviceMismatchListRequest implements \JsonSerializable
{
    /**
     * @var AccountDeviceList[]|null
     */
    private $devices;

    /**
     * @var DateFilter|null
     */
    private $filter;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * Returns Devices.
     * A list of specific devices that you want to check, specified by ICCID or MDN.
     *
     * @return AccountDeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * A list of specific devices that you want to check, specified by ICCID or MDN.
     *
     * @maps devices
     *
     * @param AccountDeviceList[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Filter.
     * Filter out the dates.
     */
    public function getFilter(): ?DateFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Filter out the dates.
     *
     * @maps filter
     */
    public function setFilter(?DateFilter $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * Returns Account Name.
     * The account that you want to search for mismatched devices. If you don't specify an accountName, the
     * search includes all devices to which you have access.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The account that you want to search for mismatched devices. If you don't specify an accountName, the
     * search includes all devices to which you have access.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Group Name.
     * The name of a device group, to only include devices in that group.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * The name of a device group, to only include devices in that group.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
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
        if (isset($this->devices)) {
            $json['devices']     = $this->devices;
        }
        if (isset($this->filter)) {
            $json['filter']      = $this->filter;
        }
        if (isset($this->accountName)) {
            $json['accountName'] = $this->accountName;
        }
        if (isset($this->groupName)) {
            $json['groupName']   = $this->groupName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
