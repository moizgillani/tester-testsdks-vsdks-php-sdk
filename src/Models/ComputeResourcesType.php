<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Compute resources of a service profile.
 */
class ComputeResourcesType implements \JsonSerializable
{
    /**
     * @var GPU|null
     */
    private $gPU;

    /**
     * @var int|null
     */
    private $minRAMGB;

    /**
     * @var int|null
     */
    private $minStorageGB;

    /**
     * Returns G PU.
     * GPU resources of a service profile.
     */
    public function getGPU(): ?GPU
    {
        return $this->gPU;
    }

    /**
     * Sets G PU.
     * GPU resources of a service profile.
     *
     * @maps GPU
     */
    public function setGPU(?GPU $gPU): void
    {
        $this->gPU = $gPU;
    }

    /**
     * Returns Min RAMGB.
     * Minimum RAM required in Gigabytes.
     */
    public function getMinRAMGB(): ?int
    {
        return $this->minRAMGB;
    }

    /**
     * Sets Min RAMGB.
     * Minimum RAM required in Gigabytes.
     *
     * @maps minRAMGB
     */
    public function setMinRAMGB(?int $minRAMGB): void
    {
        $this->minRAMGB = $minRAMGB;
    }

    /**
     * Returns Min Storage GB.
     * Minimum storage requirement in Gigabytes.
     */
    public function getMinStorageGB(): ?int
    {
        return $this->minStorageGB;
    }

    /**
     * Sets Min Storage GB.
     * Minimum storage requirement in Gigabytes.
     *
     * @maps minStorageGB
     */
    public function setMinStorageGB(?int $minStorageGB): void
    {
        $this->minStorageGB = $minStorageGB;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->gPU)) {
            $json['GPU']          = $this->gPU;
        }
        if (isset($this->minRAMGB)) {
            $json['minRAMGB']     = $this->minRAMGB;
        }
        if (isset($this->minStorageGB)) {
            $json['minStorageGB'] = $this->minStorageGB;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
