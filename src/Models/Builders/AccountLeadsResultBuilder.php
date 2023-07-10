<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountLeadsResult;

/**
 * Builder for model AccountLeadsResult
 *
 * @see AccountLeadsResult
 */
class AccountLeadsResultBuilder
{
    /**
     * @var AccountLeadsResult
     */
    private $instance;

    private function __construct(AccountLeadsResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account leads result Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountLeadsResult());
    }

    /**
     * Sets has more data field.
     */
    public function hasMoreData(?bool $value): self
    {
        $this->instance->setHasMoreData($value);
        return $this;
    }

    /**
     * Sets leads field.
     */
    public function leads(?array $value): self
    {
        $this->instance->setLeads($value);
        return $this;
    }

    /**
     * Initializes a new account leads result object.
     */
    public function build(): AccountLeadsResult
    {
        return CoreHelper::clone($this->instance);
    }
}
