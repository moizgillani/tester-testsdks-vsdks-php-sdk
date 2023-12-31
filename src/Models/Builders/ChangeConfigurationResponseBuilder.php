<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ChangeConfigurationResponse;
use VerizonLib\Models\Fields;

/**
 * Builder for model ChangeConfigurationResponse
 *
 * @see ChangeConfigurationResponse
 */
class ChangeConfigurationResponseBuilder
{
    /**
     * @var ChangeConfigurationResponse
     */
    private $instance;

    private function __construct(ChangeConfigurationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change configuration response Builder object.
     */
    public static function init(): self
    {
        return new self(new ChangeConfigurationResponse());
    }

    /**
     * Sets action field.
     */
    public function action(?string $value): self
    {
        $this->instance->setAction($value);
        return $this;
    }

    /**
     * Sets createdon field.
     */
    public function createdon(?string $value): self
    {
        $this->instance->setCreatedon($value);
        return $this;
    }

    /**
     * Sets deviceid field.
     */
    public function deviceid(?string $value): self
    {
        $this->instance->setDeviceid($value);
        return $this;
    }

    /**
     * Sets fields field.
     */
    public function fields(?Fields $value): self
    {
        $this->instance->setFields($value);
        return $this;
    }

    /**
     * Sets foreignid field.
     */
    public function foreignid(?string $value): self
    {
        $this->instance->setForeignid($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets lastupdated field.
     */
    public function lastupdated(?string $value): self
    {
        $this->instance->setLastupdated($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
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
     * Sets transactionid field.
     */
    public function transactionid(?string $value): self
    {
        $this->instance->setTransactionid($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?string $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Initializes a new change configuration response object.
     */
    public function build(): ChangeConfigurationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
