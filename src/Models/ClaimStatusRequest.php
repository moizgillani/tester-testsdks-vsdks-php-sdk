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
 * Current status of the claim can have only two values eg: VERIFIED/UNVERIFIED.
 */
class ClaimStatusRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $claimStatus;

    /**
     * Returns Claim Status.
     * Current status of the claim can have only two values eg: VERIFIED/UNVERIFIED.
     */
    public function getClaimStatus(): ?string
    {
        return $this->claimStatus;
    }

    /**
     * Sets Claim Status.
     * Current status of the claim can have only two values eg: VERIFIED/UNVERIFIED.
     *
     * @maps claimStatus
     * @factory \VerizonLib\Models\ClaimStatusEnum::checkValue
     */
    public function setClaimStatus(?string $claimStatus): void
    {
        $this->claimStatus = $claimStatus;
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
        if (isset($this->claimStatus)) {
            $json['claimStatus'] = ClaimStatusEnum::checkValue($this->claimStatus);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
