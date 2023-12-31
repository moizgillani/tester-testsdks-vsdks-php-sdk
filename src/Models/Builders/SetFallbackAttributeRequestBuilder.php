<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SetFallbackAttributeRequest;

/**
 * Builder for model SetFallbackAttributeRequest
 *
 * @see SetFallbackAttributeRequest
 */
class SetFallbackAttributeRequestBuilder
{
    /**
     * @var SetFallbackAttributeRequest
     */
    private $instance;

    private function __construct(SetFallbackAttributeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new set fallback attribute request Builder object.
     */
    public static function init(): self
    {
        return new self(new SetFallbackAttributeRequest());
    }

    /**
     * Sets devices field.
     */
    public function devices(?array $value): self
    {
        $this->instance->setDevices($value);
        return $this;
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
     * Sets carrier name field.
     */
    public function carrierName(?string $value): self
    {
        $this->instance->setCarrierName($value);
        return $this;
    }

    /**
     * Initializes a new set fallback attribute request object.
     */
    public function build(): SetFallbackAttributeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
