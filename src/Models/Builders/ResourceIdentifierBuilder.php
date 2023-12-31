<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ResourceIdentifier;

/**
 * Builder for model ResourceIdentifier
 *
 * @see ResourceIdentifier
 */
class ResourceIdentifierBuilder
{
    /**
     * @var ResourceIdentifier
     */
    private $instance;

    private function __construct(ResourceIdentifier $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new resource identifier Builder object.
     */
    public static function init(): self
    {
        return new self(new ResourceIdentifier());
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
     * Sets imei field.
     */
    public function imei(?string $value): self
    {
        $this->instance->setImei($value);
        return $this;
    }

    /**
     * Initializes a new resource identifier object.
     */
    public function build(): ResourceIdentifier
    {
        return CoreHelper::clone($this->instance);
    }
}
