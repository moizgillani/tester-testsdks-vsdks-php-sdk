<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceOnboardingYamlGitBranch;

/**
 * Builder for model ServiceOnboardingYamlGitBranch
 *
 * @see ServiceOnboardingYamlGitBranch
 */
class ServiceOnboardingYamlGitBranchBuilder
{
    /**
     * @var ServiceOnboardingYamlGitBranch
     */
    private $instance;

    private function __construct(ServiceOnboardingYamlGitBranch $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service onboarding yaml git branch Builder object.
     */
    public static function init(string $branchName): self
    {
        return new self(new ServiceOnboardingYamlGitBranch($branchName));
    }

    /**
     * Sets values yaml paths field.
     */
    public function valuesYamlPaths(?array $value): self
    {
        $this->instance->setValuesYamlPaths($value);
        return $this;
    }

    /**
     * Initializes a new service onboarding yaml git branch object.
     */
    public function build(): ServiceOnboardingYamlGitBranch
    {
        return CoreHelper::clone($this->instance);
    }
}