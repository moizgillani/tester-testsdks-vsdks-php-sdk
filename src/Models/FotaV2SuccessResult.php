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
 * Response to a successful request.
 */
class FotaV2SuccessResult implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $success;

    /**
     * @param bool $success
     */
    public function __construct(bool $success)
    {
        $this->success = $success;
    }

    /**
     * Returns Success.
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * Sets Success.
     *
     * @required
     * @maps success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
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
        $json['success'] = $this->success;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
