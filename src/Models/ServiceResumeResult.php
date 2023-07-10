<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ServiceResumeResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $requestId;

    /**
     * @var string|null
     */
    private $correlationId;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $subStatus;

    /**
     * Returns Request Id.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     *
     * @maps requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Correlation Id.
     */
    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    /**
     * Sets Correlation Id.
     *
     * @maps correlationId
     */
    public function setCorrelationId(?string $correlationId): void
    {
        $this->correlationId = $correlationId;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Sub Status.
     */
    public function getSubStatus(): ?string
    {
        return $this->subStatus;
    }

    /**
     * Sets Sub Status.
     *
     * @maps subStatus
     */
    public function setSubStatus(?string $subStatus): void
    {
        $this->subStatus = $subStatus;
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
        if (isset($this->requestId)) {
            $json['requestId']     = $this->requestId;
        }
        if (isset($this->correlationId)) {
            $json['correlationId'] = $this->correlationId;
        }
        if (isset($this->message)) {
            $json['message']       = $this->message;
        }
        if (isset($this->status)) {
            $json['status']        = $this->status;
        }
        if (isset($this->subStatus)) {
            $json['subStatus']     = $this->subStatus;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
