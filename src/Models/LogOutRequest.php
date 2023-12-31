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
 * Request to end a Connectivity Management session.
 */
class LogOutRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $sessionToken;

    /**
     * Returns Session Token.
     * The session token is returned to confirm that it was invalidated.
     */
    public function getSessionToken(): ?string
    {
        return $this->sessionToken;
    }

    /**
     * Sets Session Token.
     * The session token is returned to confirm that it was invalidated.
     *
     * @maps sessionToken
     */
    public function setSessionToken(?string $sessionToken): void
    {
        $this->sessionToken = $sessionToken;
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
        if (isset($this->sessionToken)) {
            $json['sessionToken'] = $this->sessionToken;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
