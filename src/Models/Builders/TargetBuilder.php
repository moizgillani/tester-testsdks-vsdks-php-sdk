<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Target;

/**
 * Builder for model Target
 *
 * @see Target
 */
class TargetBuilder
{
    /**
     * @var Target
     */
    private $instance;

    private function __construct(Target $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new target Builder object.
     */
    public static function init(): self
    {
        return new self(new Target());
    }

    /**
     * Sets address field.
     */
    public function address(?string $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets addressscheme field.
     */
    public function addressscheme(?string $value): self
    {
        $this->instance->setAddressscheme($value);
        return $this;
    }

    /**
     * Sets billingaccountid field.
     */
    public function billingaccountid(?string $value): self
    {
        $this->instance->setBillingaccountid($value);
        return $this;
    }

    /**
     * Sets createdon field.
     */
    public function createdon(?string $value): self
    {
        $this->instance->setCreatedon($value);
        return $this;
    }

    /**
     * Sets externalid field.
     */
    public function externalid(?string $value): self
    {
        $this->instance->setExternalid($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets lastupdated field.
     */
    public function lastupdated(?string $value): self
    {
        $this->instance->setLastupdated($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets region field.
     */
    public function region(?string $value): self
    {
        $this->instance->setRegion($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?string $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Sets versionid field.
     */
    public function versionid(?string $value): self
    {
        $this->instance->setVersionid($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Initializes a new target object.
     */
    public function build(): Target
    {
        return CoreHelper::clone($this->instance);
    }
}
