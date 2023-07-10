<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ComputeResourcesType;
use VerizonLib\Models\MECPlatformsAdditionalSupportInfo;
use VerizonLib\Models\NetworkResourcesType;
use VerizonLib\Models\ResourcesServiceProfileWithId;

/**
 * Builder for model ResourcesServiceProfileWithId
 *
 * @see ResourcesServiceProfileWithId
 */
class ResourcesServiceProfileWithIdBuilder
{
    /**
     * @var ResourcesServiceProfileWithId
     */
    private $instance;

    private function __construct(ResourcesServiceProfileWithId $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new resources service profile with id Builder object.
     */
    public static function init(string $clientType): self
    {
        return new self(new ResourcesServiceProfileWithId($clientType));
    }

    /**
     * Sets service profile id field.
     */
    public function serviceProfileId(?string $value): self
    {
        $this->instance->setServiceProfileId($value);
        return $this;
    }

    /**
     * Sets ecsp filter field.
     */
    public function ecspFilter(?string $value): self
    {
        $this->instance->setEcspFilter($value);
        return $this;
    }

    /**
     * Sets client schedule field.
     */
    public function clientSchedule(?string $value): self
    {
        $this->instance->setClientSchedule($value);
        return $this;
    }

    /**
     * Sets client service area field.
     */
    public function clientServiceArea(?string $value): self
    {
        $this->instance->setClientServiceArea($value);
        return $this;
    }

    /**
     * Sets network resources field.
     */
    public function networkResources(?NetworkResourcesType $value): self
    {
        $this->instance->setNetworkResources($value);
        return $this;
    }

    /**
     * Sets compute resources field.
     */
    public function computeResources(?ComputeResourcesType $value): self
    {
        $this->instance->setComputeResources($value);
        return $this;
    }

    /**
     * Sets properties field.
     */
    public function properties(?MECPlatformsAdditionalSupportInfo $value): self
    {
        $this->instance->setProperties($value);
        return $this;
    }

    /**
     * Initializes a new resources service profile with id object.
     */
    public function build(): ResourcesServiceProfileWithId
    {
        return CoreHelper::clone($this->instance);
    }
}