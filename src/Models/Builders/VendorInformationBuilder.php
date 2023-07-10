<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\VendorInformation;

/**
 * Builder for model VendorInformation
 *
 * @see VendorInformation
 */
class VendorInformationBuilder
{
    /**
     * @var VendorInformation
     */
    private $instance;

    private function __construct(VendorInformation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new vendor information Builder object.
     */
    public static function init(string $id, string $name): self
    {
        return new self(new VendorInformation($id, $name));
    }

    /**
     * Sets primary email field.
     */
    public function primaryEmail(?string $value): self
    {
        $this->instance->setPrimaryEmail($value);
        return $this;
    }

    /**
     * Sets secondary email field.
     */
    public function secondaryEmail(?string $value): self
    {
        $this->instance->setSecondaryEmail($value);
        return $this;
    }

    /**
     * Sets contact number field.
     */
    public function contactNumber(?string $value): self
    {
        $this->instance->setContactNumber($value);
        return $this;
    }

    /**
     * Initializes a new vendor information object.
     */
    public function build(): VendorInformation
    {
        return CoreHelper::clone($this->instance);
    }
}
