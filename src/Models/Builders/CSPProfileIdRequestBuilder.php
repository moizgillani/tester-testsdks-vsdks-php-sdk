<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CSPProfileIdRequest;

/**
 * Builder for model CSPProfileIdRequest
 *
 * @see CSPProfileIdRequest
 */
class CSPProfileIdRequestBuilder
{
    /**
     * @var CSPProfileIdRequest
     */
    private $instance;

    private function __construct(CSPProfileIdRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cspprofile id request Builder object.
     */
    public static function init(): self
    {
        return new self(new CSPProfileIdRequest());
    }

    /**
     * Sets csp profile id field.
     */
    public function cspProfileId(?string $value): self
    {
        $this->instance->setCspProfileId($value);
        return $this;
    }

    /**
     * Initializes a new cspprofile id request object.
     */
    public function build(): CSPProfileIdRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
