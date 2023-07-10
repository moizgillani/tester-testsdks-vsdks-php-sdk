<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\FirmwarePackage;

/**
 * Builder for model FirmwarePackage
 *
 * @see FirmwarePackage
 */
class FirmwarePackageBuilder
{
    /**
     * @var FirmwarePackage
     */
    private $instance;

    private function __construct(FirmwarePackage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new firmware package Builder object.
     */
    public static function init(
        string $firmwareName,
        string $firmwareFrom,
        string $firmwareTo,
        \DateTime $launchDate,
        string $releaseNote,
        string $model,
        string $make,
        string $protocol
    ): self {
        return new self(new FirmwarePackage(
            $firmwareName,
            $firmwareFrom,
            $firmwareTo,
            $launchDate,
            $releaseNote,
            $model,
            $make,
            $protocol
        ));
    }

    /**
     * Initializes a new firmware package object.
     */
    public function build(): FirmwarePackage
    {
        return CoreHelper::clone($this->instance);
    }
}
