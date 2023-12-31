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
 * ResponseCode and/or a message indicating success or failure of the request.
 */
class ApiResponseCode implements \JsonSerializable
{
    /**
     * @var string
     */
    private $responseCode;

    /**
     * @var string
     */
    private $message;

    /**
     * @param string $responseCode
     * @param string $message
     */
    public function __construct(string $responseCode, string $message)
    {
        $this->responseCode = $responseCode;
        $this->message = $message;
    }

    /**
     * Returns Response Code.
     * Possible response codes.
     */
    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    /**
     * Sets Response Code.
     * Possible response codes.
     *
     * @required
     * @maps responseCode
     * @factory \VerizonLib\Models\ResponseCodeEnum::checkValue
     */
    public function setResponseCode(string $responseCode): void
    {
        $this->responseCode = $responseCode;
    }

    /**
     * Returns Message.
     * More details about the responseCode received.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * More details about the responseCode received.
     *
     * @required
     * @maps message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
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
        $json['responseCode'] = ResponseCodeEnum::checkValue($this->responseCode);
        $json['message']      = $this->message;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
