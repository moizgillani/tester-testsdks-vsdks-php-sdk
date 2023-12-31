<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\StatusProjectItem;

/**
 * Builder for model StatusProjectItem
 *
 * @see StatusProjectItem
 */
class StatusProjectItemBuilder
{
    /**
     * @var StatusProjectItem
     */
    private $instance;

    private function __construct(StatusProjectItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new status project item Builder object.
     */
    public static function init(): self
    {
        return new self(new StatusProjectItem());
    }

    /**
     * Sets project id field.
     */
    public function projectID(?string $value): self
    {
        $this->instance->setProjectID($value);
        return $this;
    }

    /**
     * Initializes a new status project item object.
     */
    public function build(): StatusProjectItem
    {
        return CoreHelper::clone($this->instance);
    }
}
