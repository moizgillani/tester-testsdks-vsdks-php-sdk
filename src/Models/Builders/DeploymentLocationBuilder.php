<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeploymentLocation;
use VerizonLib\Models\DeploymentLocationCluster;
use VerizonLib\Models\DeploymentLocationNamespace;

/**
 * Builder for model DeploymentLocation
 *
 * @see DeploymentLocation
 */
class DeploymentLocationBuilder
{
    /**
     * @var DeploymentLocation
     */
    private $instance;

    private function __construct(DeploymentLocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new deployment location Builder object.
     */
    public static function init(): self
    {
        return new self(new DeploymentLocation());
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
     * Sets cluster field.
     */
    public function cluster(?DeploymentLocationCluster $value): self
    {
        $this->instance->setCluster($value);
        return $this;
    }

    /**
     * Sets namespace field.
     */
    public function namespace(?DeploymentLocationNamespace $value): self
    {
        $this->instance->setNamespace($value);
        return $this;
    }

    /**
     * Initializes a new deployment location object.
     */
    public function build(): DeploymentLocation
    {
        return CoreHelper::clone($this->instance);
    }
}