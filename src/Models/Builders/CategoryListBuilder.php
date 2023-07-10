<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CategoryList;

/**
 * Builder for model CategoryList
 *
 * @see CategoryList
 */
class CategoryListBuilder
{
    /**
     * @var CategoryList
     */
    private $instance;

    private function __construct(CategoryList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new category list Builder object.
     */
    public static function init(): self
    {
        return new self(new CategoryList());
    }

    /**
     * Sets categories field.
     */
    public function categories(?array $value): self
    {
        $this->instance->setCategories($value);
        return $this;
    }

    /**
     * Initializes a new category list object.
     */
    public function build(): CategoryList
    {
        return CoreHelper::clone($this->instance);
    }
}
