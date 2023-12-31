<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\RegionItem;

/**
 * Builder for model RegionItem
 *
 * @see RegionItem
 */
class RegionItemBuilder
{
    /**
     * @var RegionItem
     */
    private $instance;

    private function __construct(RegionItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new region item Builder object.
     */
    public static function init(): self
    {
        return new self(new RegionItem());
    }

    /**
     * Sets region field.
     */
    public function region(?string $value): self
    {
        $this->instance->setRegion($value);
        return $this;
    }

    /**
     * Sets zones field.
     */
    public function zones(?array $value): self
    {
        $this->instance->setZones($value);
        return $this;
    }

    /**
     * Initializes a new region item object.
     */
    public function build(): RegionItem
    {
        return CoreHelper::clone($this->instance);
    }
}
