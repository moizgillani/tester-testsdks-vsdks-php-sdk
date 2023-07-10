<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\GPU;

/**
 * Builder for model GPU
 *
 * @see GPU
 */
class GPUBuilder
{
    /**
     * @var GPU
     */
    private $instance;

    private function __construct(GPU $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new gpu Builder object.
     */
    public static function init(): self
    {
        return new self(new GPU());
    }

    /**
     * Sets min core clock mhz field.
     */
    public function minCoreClockMHz(?int $value): self
    {
        $this->instance->setMinCoreClockMHz($value);
        return $this;
    }

    /**
     * Sets min memory clock mhz field.
     */
    public function minMemoryClockMHz(?int $value): self
    {
        $this->instance->setMinMemoryClockMHz($value);
        return $this;
    }

    /**
     * Sets min bandwidth gbs field.
     */
    public function minBandwidthGBs(?int $value): self
    {
        $this->instance->setMinBandwidthGBs($value);
        return $this;
    }

    /**
     * Sets min tflops field.
     */
    public function minTFLOPS(?int $value): self
    {
        $this->instance->setMinTFLOPS($value);
        return $this;
    }

    /**
     * Initializes a new gpu object.
     */
    public function build(): GPU
    {
        return CoreHelper::clone($this->instance);
    }
}
