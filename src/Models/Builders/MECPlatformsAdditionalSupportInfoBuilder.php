<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\MECPlatformsAdditionalSupportInfo;
use VerizonLib\Models\MECPlatformsAdditionalSupportInfoData;

/**
 * Builder for model MECPlatformsAdditionalSupportInfo
 *
 * @see MECPlatformsAdditionalSupportInfo
 */
class MECPlatformsAdditionalSupportInfoBuilder
{
    /**
     * @var MECPlatformsAdditionalSupportInfo
     */
    private $instance;

    private function __construct(MECPlatformsAdditionalSupportInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mecplatforms additional support info Builder object.
     */
    public static function init(): self
    {
        return new self(new MECPlatformsAdditionalSupportInfo());
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets data field.
     */
    public function data(?MECPlatformsAdditionalSupportInfoData $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new mecplatforms additional support info object.
     */
    public function build(): MECPlatformsAdditionalSupportInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
