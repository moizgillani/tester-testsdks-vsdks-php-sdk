<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ManagedAccAddedList;

/**
 * Builder for model ManagedAccAddedList
 *
 * @see ManagedAccAddedList
 */
class ManagedAccAddedListBuilder
{
    /**
     * @var ManagedAccAddedList
     */
    private $instance;

    private function __construct(ManagedAccAddedList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new managed acc added list Builder object.
     */
    public static function init(): self
    {
        return new self(new ManagedAccAddedList());
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
     * Sets txid field.
     */
    public function txid(?string $value): self
    {
        $this->instance->setTxid($value);
        return $this;
    }

    /**
     * Initializes a new managed acc added list object.
     */
    public function build(): ManagedAccAddedList
    {
        return CoreHelper::clone($this->instance);
    }
}
