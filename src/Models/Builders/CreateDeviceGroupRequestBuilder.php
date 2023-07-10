<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CreateDeviceGroupRequest;

/**
 * Builder for model CreateDeviceGroupRequest
 *
 * @see CreateDeviceGroupRequest
 */
class CreateDeviceGroupRequestBuilder
{
    /**
     * @var CreateDeviceGroupRequest
     */
    private $instance;

    private function __construct(CreateDeviceGroupRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create device group request Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateDeviceGroupRequest());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets devices to add field.
     */
    public function devicesToAdd(?array $value): self
    {
        $this->instance->setDevicesToAdd($value);
        return $this;
    }

    /**
     * Sets group description field.
     */
    public function groupDescription(?string $value): self
    {
        $this->instance->setGroupDescription($value);
        return $this;
    }

    /**
     * Sets group name field.
     */
    public function groupName(?string $value): self
    {
        $this->instance->setGroupName($value);
        return $this;
    }

    /**
     * Initializes a new create device group request object.
     */
    public function build(): CreateDeviceGroupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
