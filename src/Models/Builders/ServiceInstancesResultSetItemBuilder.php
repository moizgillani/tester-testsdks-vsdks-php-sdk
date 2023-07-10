<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceInstance;
use VerizonLib\Models\ServiceInstancesResultSetItem;

/**
 * Builder for model ServiceInstancesResultSetItem
 *
 * @see ServiceInstancesResultSetItem
 */
class ServiceInstancesResultSetItemBuilder
{
    /**
     * @var ServiceInstancesResultSetItem
     */
    private $instance;

    private function __construct(ServiceInstancesResultSetItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service instances result set item Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceInstancesResultSetItem());
    }

    /**
     * Sets status url field.
     */
    public function statusUrl(?string $value): self
    {
        $this->instance->setStatusUrl($value);
        return $this;
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Sets correlation id field.
     */
    public function correlationId(?string $value): self
    {
        $this->instance->setCorrelationId($value);
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
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets service field.
     */
    public function service(?ServiceInstance $value): self
    {
        $this->instance->setService($value);
        return $this;
    }

    /**
     * Initializes a new service instances result set item object.
     */
    public function build(): ServiceInstancesResultSetItem
    {
        return CoreHelper::clone($this->instance);
    }
}
