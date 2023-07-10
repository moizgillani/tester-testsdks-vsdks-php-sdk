<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CreateTargetRequestFields;
use VerizonLib\Models\FieldsHttpHeaders;

/**
 * Builder for model CreateTargetRequestFields
 *
 * @see CreateTargetRequestFields
 */
class CreateTargetRequestFieldsBuilder
{
    /**
     * @var CreateTargetRequestFields
     */
    private $instance;

    private function __construct(CreateTargetRequestFields $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create target request fields Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateTargetRequestFields());
    }

    /**
     * Sets httpheaders field.
     */
    public function httpheaders(?FieldsHttpHeaders $value): self
    {
        $this->instance->setHttpheaders($value);
        return $this;
    }

    /**
     * Sets devicetypes field.
     */
    public function devicetypes(?array $value): self
    {
        $this->instance->setDevicetypes($value);
        return $this;
    }

    /**
     * Initializes a new create target request fields object.
     */
    public function build(): CreateTargetRequestFields
    {
        return CoreHelper::clone($this->instance);
    }
}
