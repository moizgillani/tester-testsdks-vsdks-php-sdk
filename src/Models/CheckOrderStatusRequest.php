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
 * The request body identifies the devices to upload.
 */
class CheckOrderStatusRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $orderRequestId;

    /**
     * @var DeviceList[]
     */
    private $devices;

    /**
     * @param string $accountName
     * @param DeviceList[] $devices
     */
    public function __construct(string $accountName, array $devices)
    {
        $this->accountName = $accountName;
        $this->devices = $devices;
    }

    /**
     * Returns Account Name.
     * The name of a billing account. An account name is usually numeric, and must include any leading
     * zeros.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of a billing account. An account name is usually numeric, and must include any leading
     * zeros.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Order Request Id.
     * The request id from the activation order.
     */
    public function getOrderRequestId(): ?string
    {
        return $this->orderRequestId;
    }

    /**
     * Sets Order Request Id.
     * The request id from the activation order.
     *
     * @maps orderRequestId
     */
    public function setOrderRequestId(?string $orderRequestId): void
    {
        $this->orderRequestId = $orderRequestId;
    }

    /**
     * Returns Devices.
     * The devices to upload, specified by device IDs in a format matching uploadType.
     *
     * @return DeviceList[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * The devices to upload, specified by device IDs in a format matching uploadType.
     *
     * @required
     * @maps devices
     *
     * @param DeviceList[] $devices
     */
    public function setDevices(array $devices): void
    {
        $this->devices = $devices;
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
        $json['accountName']        = $this->accountName;
        if (isset($this->orderRequestId)) {
            $json['orderRequestId'] = $this->orderRequestId;
        }
        $json['devices']            = $this->devices;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
