<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\LogInRequest;

/**
 * Builder for model LogInRequest
 *
 * @see LogInRequest
 */
class LogInRequestBuilder
{
    /**
     * @var LogInRequest
     */
    private $instance;

    private function __construct(LogInRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new log in request Builder object.
     */
    public static function init(): self
    {
        return new self(new LogInRequest());
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
     * Initializes a new log in request object.
     */
    public function build(): LogInRequest
    {
        return CoreHelper::clone($this->instance);
    }
}