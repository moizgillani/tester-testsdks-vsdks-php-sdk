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
 * Maximum of 2,000 objects are allowed in the array.
 */
class AccountLabels implements \JsonSerializable
{
    /**
     * @var DeviceList[]|null
     */
    private $devices;

    /**
     * @var DeviceLabels[]|null
     */
    private $label;

    /**
     * Returns Devices.
     *
     * @return DeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     *
     * @maps devices
     *
     * @param DeviceList[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Label.
     *
     * @return DeviceLabels[]|null
     */
    public function getLabel(): ?array
    {
        return $this->label;
    }

    /**
     * Sets Label.
     *
     * @maps label
     *
     * @param DeviceLabels[]|null $label
     */
    public function setLabel(?array $label): void
    {
        $this->label = $label;
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
            $json['devices'] = $this->devices;
        }
        if (isset($this->label)) {
            $json['label']   = $this->label;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}