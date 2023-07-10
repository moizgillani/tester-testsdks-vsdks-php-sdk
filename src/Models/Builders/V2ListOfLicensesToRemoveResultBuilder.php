<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V2ListOfLicensesToRemoveResult;

/**
 * Builder for model V2ListOfLicensesToRemoveResult
 *
 * @see V2ListOfLicensesToRemoveResult
 */
class V2ListOfLicensesToRemoveResultBuilder
{
    /**
     * @var V2ListOfLicensesToRemoveResult
     */
    private $instance;

    private function __construct(V2ListOfLicensesToRemoveResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v2 list of licenses to remove result Builder object.
     */
    public static function init(int $count, array $deviceList): self
    {
        return new self(new V2ListOfLicensesToRemoveResult($count, $deviceList));
    }

    /**
     * Initializes a new v2 list of licenses to remove result object.
     */
    public function build(): V2ListOfLicensesToRemoveResult
    {
        return CoreHelper::clone($this->instance);
    }
}
