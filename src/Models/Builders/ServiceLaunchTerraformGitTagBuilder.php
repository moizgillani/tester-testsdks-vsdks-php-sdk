<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceLaunchTerraformGitTag;

/**
 * Builder for model ServiceLaunchTerraformGitTag
 *
 * @see ServiceLaunchTerraformGitTag
 */
class ServiceLaunchTerraformGitTagBuilder
{
    /**
     * @var ServiceLaunchTerraformGitTag
     */
    private $instance;

    private function __construct(ServiceLaunchTerraformGitTag $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service launch terraform git tag Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceLaunchTerraformGitTag());
    }

    /**
     * Sets tag name field.
     */
    public function tagName(?string $value): self
    {
        $this->instance->setTagName($value);
        return $this;
    }

    /**
     * Sets terraform path field.
     */
    public function terraformPath(?string $value): self
    {
        $this->instance->setTerraformPath($value);
        return $this;
    }

    /**
     * Initializes a new service launch terraform git tag object.
     */
    public function build(): ServiceLaunchTerraformGitTag
    {
        return CoreHelper::clone($this->instance);
    }
}
