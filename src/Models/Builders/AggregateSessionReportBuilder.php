<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AggregateSessionReport;

/**
 * Builder for model AggregateSessionReport
 *
 * @see AggregateSessionReport
 */
class AggregateSessionReportBuilder
{
    /**
     * @var AggregateSessionReport
     */
    private $instance;

    private function __construct(AggregateSessionReport $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new aggregate session report Builder object.
     */
    public static function init(): self
    {
        return new self(new AggregateSessionReport());
    }

    /**
     * Sets txid field.
     */
    public function txid(?string $value): self
    {
        $this->instance->setTxid($value);
        return $this;
    }

    /**
     * Sets usage field.
     */
    public function usage(?array $value): self
    {
        $this->instance->setUsage($value);
        return $this;
    }

    /**
     * Sets errors field.
     */
    public function errors(?array $value): self
    {
        $this->instance->setErrors($value);
        return $this;
    }

    /**
     * Initializes a new aggregate session report object.
     */
    public function build(): AggregateSessionReport
    {
        return CoreHelper::clone($this->instance);
    }
}