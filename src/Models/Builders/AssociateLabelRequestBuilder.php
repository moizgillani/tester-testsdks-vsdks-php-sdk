<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountLabels;
use VerizonLib\Models\AssociateLabelRequest;

/**
 * Builder for model AssociateLabelRequest
 *
 * @see AssociateLabelRequest
 */
class AssociateLabelRequestBuilder
{
    /**
     * @var AssociateLabelRequest
     */
    private $instance;

    private function __construct(AssociateLabelRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new associate label request Builder object.
     */
    public static function init(): self
    {
        return new self(new AssociateLabelRequest());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets labels field.
     */
    public function labels(?AccountLabels $value): self
    {
        $this->instance->setLabels($value);
        return $this;
    }

    /**
     * Initializes a new associate label request object.
     */
    public function build(): AssociateLabelRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
