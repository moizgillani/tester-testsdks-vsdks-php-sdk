<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class EdsDiscoveryIntent implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $ueIdentity;

    /**
     * @var string|null
     */
    private $ueIdentityType = UEIdentityTypeEnum::IPADDRESS;

    /**
     * Returns Ue Identity.
     * UEIdentity to discover EDS location service.
     */
    public function getUeIdentity(): ?string
    {
        return $this->ueIdentity;
    }

    /**
     * Sets Ue Identity.
     * UEIdentity to discover EDS location service.
     *
     * @maps ueIdentity
     */
    public function setUeIdentity(?string $ueIdentity): void
    {
        $this->ueIdentity = $ueIdentity;
    }

    /**
     * Returns Ue Identity Type.
     * Default type for ueIdentityType.
     */
    public function getUeIdentityType(): ?string
    {
        return $this->ueIdentityType;
    }

    /**
     * Sets Ue Identity Type.
     * Default type for ueIdentityType.
     *
     * @maps ueIdentityType
     * @factory \VerizonLib\Models\UEIdentityTypeEnum::checkValue
     */
    public function setUeIdentityType(?string $ueIdentityType): void
    {
        $this->ueIdentityType = $ueIdentityType;
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
        if (isset($this->ueIdentity)) {
            $json['ueIdentity']     = $this->ueIdentity;
        }
        if (isset($this->ueIdentityType)) {
            $json['ueIdentityType'] = UEIdentityTypeEnum::checkValue($this->ueIdentityType);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
