<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\IP;

/**
 * Builder for model IP
 *
 * @see IP
 */
class IPBuilder
{
    /**
     * @var IP
     */
    private $instance;

    private function __construct(IP $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ip Builder object.
     */
    public static function init(): self
    {
        return new self(new IP());
    }

    /**
     * Sets private ip field.
     */
    public function privateIP(?string $value): self
    {
        $this->instance->setPrivateIP($value);
        return $this;
    }

    /**
     * Initializes a new ip object.
     */
    public function build(): IP
    {
        return CoreHelper::clone($this->instance);
    }
}
