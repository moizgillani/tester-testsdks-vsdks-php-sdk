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
 * Request to get the Id of the CSP profile.
 */
class CSPProfileIdRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cspProfileId;

    /**
     * Returns Csp Profile Id.
     * CSP Profile ID in which service will be deployed.
     */
    public function getCspProfileId(): ?string
    {
        return $this->cspProfileId;
    }

    /**
     * Sets Csp Profile Id.
     * CSP Profile ID in which service will be deployed.
     *
     * @maps cspProfileId
     */
    public function setCspProfileId(?string $cspProfileId): void
    {
        $this->cspProfileId = $cspProfileId;
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
        if (isset($this->cspProfileId)) {
            $json['cspProfileId'] = $this->cspProfileId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
