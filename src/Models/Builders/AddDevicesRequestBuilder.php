<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AddDevicesRequest;

/**
 * Builder for model AddDevicesRequest
 *
 * @see AddDevicesRequest
 */
class AddDevicesRequestBuilder
{
    /**
     * @var AddDevicesRequest
     */
    private $instance;

    private function __construct(AddDevicesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new add devices request Builder object.
     */
    public static function init(): self
    {
        return new self(new AddDevicesRequest());
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
     * Sets custom fields field.
     */
    public function customFields(?array $value): self
    {
        $this->instance->setCustomFields($value);
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
     * Sets group name field.
     */
    public function groupName(?string $value): self
    {
        $this->instance->setGroupName($value);
        return $this;
    }

    /**
     * Sets sku number field.
     */
    public function skuNumber(?string $value): self
    {
        $this->instance->setSkuNumber($value);
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Initializes a new add devices request object.
     */
    public function build(): AddDevicesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
