<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeploymentLocationNamespace;

/**
 * Builder for model DeploymentLocationNamespace
 *
 * @see DeploymentLocationNamespace
 */
class DeploymentLocationNamespaceBuilder
{
    /**
     * @var DeploymentLocationNamespace
     */
    private $instance;

    private function __construct(DeploymentLocationNamespace $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new deployment location namespace Builder object.
     */
    public static function init(): self
    {
        return new self(new DeploymentLocationNamespace());
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
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Initializes a new deployment location namespace object.
     */
    public function build(): DeploymentLocationNamespace
    {
        return CoreHelper::clone($this->instance);
    }
}
