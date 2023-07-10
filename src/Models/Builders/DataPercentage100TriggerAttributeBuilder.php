<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DataPercentage100TriggerAttribute;

/**
 * Builder for model DataPercentage100TriggerAttribute
 *
 * @see DataPercentage100TriggerAttribute
 */
class DataPercentage100TriggerAttributeBuilder
{
    /**
     * @var DataPercentage100TriggerAttribute
     */
    private $instance;

    private function __construct(DataPercentage100TriggerAttribute $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data percentage 100 trigger attribute Builder object.
     */
    public static function init(): self
    {
        return new self(new DataPercentage100TriggerAttribute());
    }

    /**
     * Sets key field.
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?bool $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new data percentage 100 trigger attribute object.
     */
    public function build(): DataPercentage100TriggerAttribute
    {
        return CoreHelper::clone($this->instance);
    }
}