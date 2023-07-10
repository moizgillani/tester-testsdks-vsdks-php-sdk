<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\EdgeServiceRepository;
use VerizonLib\Models\Revision;
use VerizonLib\Models\VirtualMachine;

/**
 * Builder for model VirtualMachine
 *
 * @see VirtualMachine
 */
class VirtualMachineBuilder
{
    /**
     * @var VirtualMachine
     */
    private $instance;

    private function __construct(VirtualMachine $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new virtual machine Builder object.
     */
    public static function init(EdgeServiceRepository $repository, string $templateType): self
    {
        return new self(new VirtualMachine($repository, $templateType));
    }

    /**
     * Sets revision field.
     */
    public function revision(?Revision $value): self
    {
        $this->instance->setRevision($value);
        return $this;
    }

    /**
     * Sets values field.
     */
    public function values(?EdgeServiceRepository $value): self
    {
        $this->instance->setValues($value);
        return $this;
    }

    /**
     * Sets provider field.
     */
    public function provider(?string $value): self
    {
        $this->instance->setProvider($value);
        return $this;
    }

    /**
     * Initializes a new virtual machine object.
     */
    public function build(): VirtualMachine
    {
        return CoreHelper::clone($this->instance);
    }
}
