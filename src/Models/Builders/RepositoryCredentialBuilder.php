<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\RepositoryCredential;

/**
 * Builder for model RepositoryCredential
 *
 * @see RepositoryCredential
 */
class RepositoryCredentialBuilder
{
    /**
     * @var RepositoryCredential
     */
    private $instance;

    private function __construct(RepositoryCredential $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new repository credential Builder object.
     */
    public static function init(): self
    {
        return new self(new RepositoryCredential());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets password field.
     */
    public function password(?string $value): self
    {
        $this->instance->setPassword($value);
        return $this;
    }

    /**
     * Initializes a new repository credential object.
     */
    public function build(): RepositoryCredential
    {
        return CoreHelper::clone($this->instance);
    }
}
