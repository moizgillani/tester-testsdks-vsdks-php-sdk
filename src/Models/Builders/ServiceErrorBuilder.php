<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceError;

/**
 * Builder for model ServiceError
 *
 * @see ServiceError
 */
class ServiceErrorBuilder
{
    /**
     * @var ServiceError
     */
    private $instance;

    private function __construct(ServiceError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service error Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceError());
    }

    /**
     * Sets error category field.
     */
    public function errorCategory(?string $value): self
    {
        $this->instance->setErrorCategory($value);
        return $this;
    }

    /**
     * Sets error code field.
     */
    public function errorCode(?string $value): self
    {
        $this->instance->setErrorCode($value);
        return $this;
    }

    /**
     * Sets error desc field.
     */
    public function errorDesc(?string $value): self
    {
        $this->instance->setErrorDesc($value);
        return $this;
    }

    /**
     * Sets error subcategory field.
     */
    public function errorSubcategory(?string $value): self
    {
        $this->instance->setErrorSubcategory($value);
        return $this;
    }

    /**
     * Initializes a new service error object.
     */
    public function build(): ServiceError
    {
        return CoreHelper::clone($this->instance);
    }
}
