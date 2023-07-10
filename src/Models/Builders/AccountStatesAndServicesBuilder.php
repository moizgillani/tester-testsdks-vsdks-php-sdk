<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountStatesAndServices;

/**
 * Builder for model AccountStatesAndServices
 *
 * @see AccountStatesAndServices
 */
class AccountStatesAndServicesBuilder
{
    /**
     * @var AccountStatesAndServices
     */
    private $instance;

    private function __construct(AccountStatesAndServices $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account states and services Builder object.
     */
    public static function init(array $engagement): self
    {
        return new self(new AccountStatesAndServices($engagement));
    }

    /**
     * Initializes a new account states and services object.
     */
    public function build(): AccountStatesAndServices
    {
        return CoreHelper::clone($this->instance);
    }
}