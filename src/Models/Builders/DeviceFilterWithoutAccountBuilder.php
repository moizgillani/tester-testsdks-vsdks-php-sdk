<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceFilterWithoutAccount;

/**
 * Builder for model DeviceFilterWithoutAccount
 *
 * @see DeviceFilterWithoutAccount
 */
class DeviceFilterWithoutAccountBuilder
{
    /**
     * @var DeviceFilterWithoutAccount
     */
    private $instance;

    private function __construct(DeviceFilterWithoutAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device filter without account Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceFilterWithoutAccount());
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
     * Sets service plan field.
     */
    public function servicePlan(?string $value): self
    {
        $this->instance->setServicePlan($value);
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
     * Initializes a new device filter without account object.
     */
    public function build(): DeviceFilterWithoutAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
