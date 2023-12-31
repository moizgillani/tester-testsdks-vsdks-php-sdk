<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ManagedAccountCancelRequest;

/**
 * Builder for model ManagedAccountCancelRequest
 *
 * @see ManagedAccountCancelRequest
 */
class ManagedAccountCancelRequestBuilder
{
    /**
     * @var ManagedAccountCancelRequest
     */
    private $instance;

    private function __construct(ManagedAccountCancelRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new managed account cancel request Builder object.
     */
    public static function init(
        string $accountName,
        string $paccountName,
        string $serviceName,
        string $type,
        string $txid
    ): self {
        return new self(new ManagedAccountCancelRequest($accountName, $paccountName, $serviceName, $type, $txid));
    }

    /**
     * Initializes a new managed account cancel request object.
     */
    public function build(): ManagedAccountCancelRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
