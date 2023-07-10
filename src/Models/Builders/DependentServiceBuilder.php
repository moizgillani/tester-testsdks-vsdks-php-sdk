<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DependentService;

/**
 * Builder for model DependentService
 *
 * @see DependentService
 */
class DependentServiceBuilder
{
    /**
     * @var DependentService
     */
    private $instance;

    private function __construct(DependentService $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new dependent service Builder object.
     */
    public static function init(): self
    {
        return new self(new DependentService());
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
     * Sets version field.
     */
    public function version(?string $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
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
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets created by field.
     */
    public function createdBy(?string $value): self
    {
        $this->instance->setCreatedBy($value);
        return $this;
    }

    /**
     * Sets last modified by field.
     */
    public function lastModifiedBy(?string $value): self
    {
        $this->instance->setLastModifiedBy($value);
        return $this;
    }

    /**
     * Sets instances field.
     */
    public function instances(?int $value): self
    {
        $this->instance->setInstances($value);
        return $this;
    }

    /**
     * Initializes a new dependent service object.
     */
    public function build(): DependentService
    {
        return CoreHelper::clone($this->instance);
    }
}
