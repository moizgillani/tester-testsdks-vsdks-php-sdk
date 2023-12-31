<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\UploadsActivatesDeviceRequest;

/**
 * Builder for model UploadsActivatesDeviceRequest
 *
 * @see UploadsActivatesDeviceRequest
 */
class UploadsActivatesDeviceRequestBuilder
{
    /**
     * @var UploadsActivatesDeviceRequest
     */
    private $instance;

    private function __construct(UploadsActivatesDeviceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new uploads activates device request Builder object.
     */
    public static function init(
        string $accountName,
        string $emailAddress,
        string $deviceSku,
        string $uploadType,
        string $servicePlan,
        string $mdnZipCode,
        array $devices
    ): self {
        return new self(new UploadsActivatesDeviceRequest(
            $accountName,
            $emailAddress,
            $deviceSku,
            $uploadType,
            $servicePlan,
            $mdnZipCode,
            $devices
        ));
    }

    /**
     * Sets carrier ip pool name field.
     */
    public function carrierIpPoolName(?string $value): self
    {
        $this->instance->setCarrierIpPoolName($value);
        return $this;
    }

    /**
     * Initializes a new uploads activates device request object.
     */
    public function build(): UploadsActivatesDeviceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
