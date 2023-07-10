<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Device;
use VerizonLib\Models\History;
use VerizonLib\Models\HistoryAttributeValue;

/**
 * Builder for model History
 *
 * @see History
 */
class HistoryBuilder
{
    /**
     * @var History
     */
    private $instance;

    private function __construct(History $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new history Builder object.
     */
    public static function init(string $accountName, Device $device): self
    {
        return new self(new History($accountName, $device));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?HistoryAttributeValue $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new history object.
     */
    public function build(): History
    {
        return CoreHelper::clone($this->instance);
    }
}
