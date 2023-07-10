<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceLaunchHelmGitTag;

/**
 * Builder for model ServiceLaunchHelmGitTag
 *
 * @see ServiceLaunchHelmGitTag
 */
class ServiceLaunchHelmGitTagBuilder
{
    /**
     * @var ServiceLaunchHelmGitTag
     */
    private $instance;

    private function __construct(ServiceLaunchHelmGitTag $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service launch helm git tag Builder object.
     */
    public static function init(string $tagName, string $helmChartPath, array $valuesYamlPaths): self
    {
        return new self(new ServiceLaunchHelmGitTag($tagName, $helmChartPath, $valuesYamlPaths));
    }

    /**
     * Initializes a new service launch helm git tag object.
     */
    public function build(): ServiceLaunchHelmGitTag
    {
        return CoreHelper::clone($this->instance);
    }
}
