<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\UpgradeInfo;

/**
 * Builder for model UpgradeInfo
 *
 * @see UpgradeInfo
 */
class UpgradeInfoBuilder
{
    /**
     * @var UpgradeInfo
     */
    private $instance;

    private function __construct(UpgradeInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new upgrade info Builder object.
     */
    public static function init(): self
    {
        return new self(new UpgradeInfo());
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
     * Sets edge id field.
     */
    public function edgeId(?string $value): self
    {
        $this->instance->setEdgeId($value);
        return $this;
    }

    /**
     * Sets organization id field.
     */
    public function organizationId(?string $value): self
    {
        $this->instance->setOrganizationId($value);
        return $this;
    }

    /**
     * Sets partner id field.
     */
    public function partnerId(?string $value): self
    {
        $this->instance->setPartnerId($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets modified at field.
     */
    public function modifiedAt(?string $value): self
    {
        $this->instance->setModifiedAt($value);
        return $this;
    }

    /**
     * Sets nodegroup id field.
     */
    public function nodegroupId(?string $value): self
    {
        $this->instance->setNodegroupId($value);
        return $this;
    }

    /**
     * Initializes a new upgrade info object.
     */
    public function build(): UpgradeInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
