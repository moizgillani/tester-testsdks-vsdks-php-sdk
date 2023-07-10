<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceListQueryItem;

/**
 * Builder for model DeviceListQueryItem
 *
 * @see DeviceListQueryItem
 */
class DeviceListQueryItemBuilder
{
    /**
     * @var DeviceListQueryItem
     */
    private $instance;

    private function __construct(DeviceListQueryItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device list query item Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceListQueryItem());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?string $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets mdn field.
     */
    public function mdn(?string $value): self
    {
        $this->instance->setMdn($value);
        return $this;
    }

    /**
     * Sets model field.
     */
    public function model(?string $value): self
    {
        $this->instance->setModel($value);
        return $this;
    }

    /**
     * Sets make field.
     */
    public function make(?string $value): self
    {
        $this->instance->setMake($value);
        return $this;
    }

    /**
     * Sets firmware field.
     */
    public function firmware(?string $value): self
    {
        $this->instance->setFirmware($value);
        return $this;
    }

    /**
     * Sets fota eligible field.
     */
    public function fotaEligible(?bool $value): self
    {
        $this->instance->setFotaEligible($value);
        return $this;
    }

    /**
     * Sets license assigned field.
     */
    public function licenseAssigned(?bool $value): self
    {
        $this->instance->setLicenseAssigned($value);
        return $this;
    }

    /**
     * Sets upgrade time field.
     */
    public function upgradeTime(?string $value): self
    {
        $this->instance->setUpgradeTime($value);
        return $this;
    }

    /**
     * Initializes a new device list query item object.
     */
    public function build(): DeviceListQueryItem
    {
        return CoreHelper::clone($this->instance);
    }
}