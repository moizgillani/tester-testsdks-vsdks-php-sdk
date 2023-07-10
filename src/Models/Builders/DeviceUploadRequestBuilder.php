<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceUploadRequest;

/**
 * Builder for model DeviceUploadRequest
 *
 * @see DeviceUploadRequest
 */
class DeviceUploadRequestBuilder
{
    /**
     * @var DeviceUploadRequest
     */
    private $instance;

    private function __construct(DeviceUploadRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device upload request Builder object.
     */
    public static function init(
        string $accountName,
        array $devices,
        string $emailAddress,
        string $deviceSku,
        string $uploadType
    ): self {
        return new self(new DeviceUploadRequest($accountName, $devices, $emailAddress, $deviceSku, $uploadType));
    }

    /**
     * Initializes a new device upload request object.
     */
    public function build(): DeviceUploadRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
