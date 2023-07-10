<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ClusterNamespacesLocation;

/**
 * Builder for model ClusterNamespacesLocation
 *
 * @see ClusterNamespacesLocation
 */
class ClusterNamespacesLocationBuilder
{
    /**
     * @var ClusterNamespacesLocation
     */
    private $instance;

    private function __construct(ClusterNamespacesLocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cluster namespaces location Builder object.
     */
    public static function init(): self
    {
        return new self(new ClusterNamespacesLocation());
    }

    /**
     * Sets ern field.
     */
    public function ern(?string $value): self
    {
        $this->instance->setErn($value);
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets latitude field.
     */
    public function latitude(?string $value): self
    {
        $this->instance->setLatitude($value);
        return $this;
    }

    /**
     * Sets longitude field.
     */
    public function longitude(?string $value): self
    {
        $this->instance->setLongitude($value);
        return $this;
    }

    /**
     * Sets csp field.
     */
    public function csp(?string $value): self
    {
        $this->instance->setCsp($value);
        return $this;
    }

    /**
     * Initializes a new cluster namespaces location object.
     */
    public function build(): ClusterNamespacesLocation
    {
        return CoreHelper::clone($this->instance);
    }
}