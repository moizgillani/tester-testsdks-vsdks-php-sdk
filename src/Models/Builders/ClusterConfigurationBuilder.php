<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ClusterConfiguration;
use VerizonLib\Models\EdgeServiceLaunchParams;

/**
 * Builder for model ClusterConfiguration
 *
 * @see ClusterConfiguration
 */
class ClusterConfigurationBuilder
{
    /**
     * @var ClusterConfiguration
     */
    private $instance;

    private function __construct(ClusterConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cluster configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new ClusterConfiguration());
    }

    /**
     * Sets tags field.
     */
    public function tags(?EdgeServiceLaunchParams $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets end point access type field.
     */
    public function endPointAccessType(?string $value): self
    {
        $this->instance->setEndPointAccessType($value);
        return $this;
    }

    /**
     * Sets auto create network infra field.
     */
    public function autoCreateNetworkInfra(?bool $value): self
    {
        $this->instance->setAutoCreateNetworkInfra($value);
        return $this;
    }

    /**
     * Sets infra ipv 4 range field.
     */
    public function infraIPv4range(?string $value): self
    {
        $this->instance->setInfraIPv4range($value);
        return $this;
    }

    /**
     * Sets network nat mode field.
     */
    public function networkNatMode(?string $value): self
    {
        $this->instance->setNetworkNatMode($value);
        return $this;
    }

    /**
     * Sets availability zones field.
     */
    public function availabilityZones(?array $value): self
    {
        $this->instance->setAvailabilityZones($value);
        return $this;
    }

    /**
     * Sets private network infra ids field.
     */
    public function privateNetworkInfraIds(?array $value): self
    {
        $this->instance->setPrivateNetworkInfraIds($value);
        return $this;
    }

    /**
     * Sets public network infra ids field.
     */
    public function publicNetworkInfraIds(?array $value): self
    {
        $this->instance->setPublicNetworkInfraIds($value);
        return $this;
    }

    /**
     * Initializes a new cluster configuration object.
     */
    public function build(): ClusterConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}