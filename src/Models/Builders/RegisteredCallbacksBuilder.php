<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\RegisteredCallbacks;

/**
 * Builder for model RegisteredCallbacks
 *
 * @see RegisteredCallbacks
 */
class RegisteredCallbacksBuilder
{
    /**
     * @var RegisteredCallbacks
     */
    private $instance;

    private function __construct(RegisteredCallbacks $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new registered callbacks Builder object.
     */
    public static function init(): self
    {
        return new self(new RegisteredCallbacks());
    }

    /**
     * Sets aname field.
     */
    public function aname(?string $value): self
    {
        $this->instance->setAname($value);
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
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets username field.
     */
    public function username(?string $value): self
    {
        $this->instance->setUsername($value);
        return $this;
    }

    /**
     * Sets password field.
     */
    public function password(?string $value): self
    {
        $this->instance->setPassword($value);
        return $this;
    }

    /**
     * Initializes a new registered callbacks object.
     */
    public function build(): RegisteredCallbacks
    {
        return CoreHelper::clone($this->instance);
    }
}
