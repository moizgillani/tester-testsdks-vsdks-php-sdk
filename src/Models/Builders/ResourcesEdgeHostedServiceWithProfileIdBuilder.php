<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ResourcesEdgeHostedServiceWithProfileId;
use VerizonLib\Models\ResourcesServiceEndpoint;

/**
 * Builder for model ResourcesEdgeHostedServiceWithProfileId
 *
 * @see ResourcesEdgeHostedServiceWithProfileId
 */
class ResourcesEdgeHostedServiceWithProfileIdBuilder
{
    /**
     * @var ResourcesEdgeHostedServiceWithProfileId
     */
    private $instance;

    private function __construct(ResourcesEdgeHostedServiceWithProfileId $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new resources edge hosted service with profile id Builder object.
     */
    public static function init(): self
    {
        return new self(new ResourcesEdgeHostedServiceWithProfileId());
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
     * Sets service endpoint field.
     */
    public function serviceEndpoint(?ResourcesServiceEndpoint $value): self
    {
        $this->instance->setServiceEndpoint($value);
        return $this;
    }

    /**
     * Sets application server provider id field.
     */
    public function applicationServerProviderId(?string $value): self
    {
        $this->instance->setApplicationServerProviderId($value);
        return $this;
    }

    /**
     * Sets application id field.
     */
    public function applicationId(?string $value): self
    {
        $this->instance->setApplicationId($value);
        return $this;
    }

    /**
     * Sets service description field.
     */
    public function serviceDescription(?string $value): self
    {
        $this->instance->setServiceDescription($value);
        return $this;
    }

    /**
     * Sets service profile id field.
     */
    public function serviceProfileID(?string $value): self
    {
        $this->instance->setServiceProfileID($value);
        return $this;
    }

    /**
     * Initializes a new resources edge hosted service with profile id object.
     */
    public function build(): ResourcesEdgeHostedServiceWithProfileId
    {
        return CoreHelper::clone($this->instance);
    }
}
