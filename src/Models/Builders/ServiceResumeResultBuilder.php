<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceResumeResult;

/**
 * Builder for model ServiceResumeResult
 *
 * @see ServiceResumeResult
 */
class ServiceResumeResultBuilder
{
    /**
     * @var ServiceResumeResult
     */
    private $instance;

    private function __construct(ServiceResumeResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service resume result Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceResumeResult());
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
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
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
     * Sets sub status field.
     */
    public function subStatus(?string $value): self
    {
        $this->instance->setSubStatus($value);
        return $this;
    }

    /**
     * Initializes a new service resume result object.
     */
    public function build(): ServiceResumeResult
    {
        return CoreHelper::clone($this->instance);
    }
}