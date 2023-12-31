<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\MECPerformanceMetrics;

/**
 * Builder for model MECPerformanceMetrics
 *
 * @see MECPerformanceMetrics
 */
class MECPerformanceMetricsBuilder
{
    /**
     * @var MECPerformanceMetrics
     */
    private $instance;

    private function __construct(MECPerformanceMetrics $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mecperformance metrics Builder object.
     */
    public static function init(): self
    {
        return new self(new MECPerformanceMetrics());
    }

    /**
     * Sets query status field.
     */
    public function queryStatus(?string $value): self
    {
        $this->instance->setQueryStatus($value);
        return $this;
    }

    /**
     * Sets start field.
     */
    public function start(?string $value): self
    {
        $this->instance->setStart($value);
        return $this;
    }

    /**
     * Sets end field.
     */
    public function end(?string $value): self
    {
        $this->instance->setEnd($value);
        return $this;
    }

    /**
     * Sets query result field.
     */
    public function queryResult(?array $value): self
    {
        $this->instance->setQueryResult($value);
        return $this;
    }

    /**
     * Initializes a new mecperformance metrics object.
     */
    public function build(): MECPerformanceMetrics
    {
        return CoreHelper::clone($this->instance);
    }
}
