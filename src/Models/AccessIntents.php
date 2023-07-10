<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class AccessIntents implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enableCarrierNetworkAccess = false;

    /**
     * Returns Enable Carrier Network Access.
     */
    public function getEnableCarrierNetworkAccess(): ?bool
    {
        return $this->enableCarrierNetworkAccess;
    }

    /**
     * Sets Enable Carrier Network Access.
     *
     * @maps enableCarrierNetworkAccess
     */
    public function setEnableCarrierNetworkAccess(?bool $enableCarrierNetworkAccess): void
    {
        $this->enableCarrierNetworkAccess = $enableCarrierNetworkAccess;
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
        if (isset($this->enableCarrierNetworkAccess)) {
            $json['enableCarrierNetworkAccess'] = $this->enableCarrierNetworkAccess;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
