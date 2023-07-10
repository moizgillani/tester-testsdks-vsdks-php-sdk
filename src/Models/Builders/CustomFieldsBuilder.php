<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CustomFields;

/**
 * Builder for model CustomFields
 *
 * @see CustomFields
 */
class CustomFieldsBuilder
{
    /**
     * @var CustomFields
     */
    private $instance;

    private function __construct(CustomFields $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new custom fields Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomFields());
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
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new custom fields object.
     */
    public function build(): CustomFields
    {
        return CoreHelper::clone($this->instance);
    }
}
