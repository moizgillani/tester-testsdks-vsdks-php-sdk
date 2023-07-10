<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ProfileChangeStateRequest implements \JsonSerializable
{
    /**
     * @var DeviceList[]|null
     */
    private $devices;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $smsrOid;

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
     * Returns Account Name.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Smsr Oid.
     */
    public function getSmsrOid(): ?string
    {
        return $this->smsrOid;
    }

    /**
     * Sets Smsr Oid.
     *
     * @maps smsrOid
     */
    public function setSmsrOid(?string $smsrOid): void
    {
        $this->smsrOid = $smsrOid;
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
        if (isset($this->accountName)) {
            $json['accountName'] = $this->accountName;
        }
        if (isset($this->smsrOid)) {
            $json['smsrOid']     = $this->smsrOid;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
