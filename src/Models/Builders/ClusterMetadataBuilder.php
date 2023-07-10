<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Cloud;
use VerizonLib\Models\ClusterMetadata;
use VerizonLib\Models\DataCenter;
use VerizonLib\Models\ServiceLaunchClusterAdditionalParams;

/**
 * Builder for model ClusterMetadata
 *
 * @see ClusterMetadata
 */
class ClusterMetadataBuilder
{
    /**
     * @var ClusterMetadata
     */
    private $instance;

    private function __construct(ClusterMetadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cluster metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new ClusterMetadata());
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
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets cluster type field.
     */
    public function clusterType(?string $value): self
    {
        $this->instance->setClusterType($value);
        return $this;
    }

    /**
     * Sets cloud field.
     */
    public function cloud(?Cloud $value): self
    {
        $this->instance->setCloud($value);
        return $this;
    }

    /**
     * Sets data center field.
     */
    public function dataCenter(?DataCenter $value): self
    {
        $this->instance->setDataCenter($value);
        return $this;
    }

    /**
     * Sets labels field.
     */
    public function labels(?array $value): self
    {
        $this->instance->setLabels($value);
        return $this;
    }

    /**
     * Sets ingress ips field.
     */
    public function ingressIps(?ServiceLaunchClusterAdditionalParams $value): self
    {
        $this->instance->setIngressIps($value);
        return $this;
    }

    /**
     * Sets upgrade protection field.
     */
    public function upgradeProtection(?bool $value): self
    {
        $this->instance->setUpgradeProtection($value);
        return $this;
    }

    /**
     * Initializes a new cluster metadata object.
     */
    public function build(): ClusterMetadata
    {
        return CoreHelper::clone($this->instance);
    }
}
