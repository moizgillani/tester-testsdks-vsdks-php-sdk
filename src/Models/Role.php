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
 * Role of the user calling API.
 */
class Role implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $externalId;

    /**
     * @var string|null
     */
    private $roleARN;

    /**
     * Returns Account Id.
     * Account ID of the role.
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account ID of the role.
     *
     * @maps accountId
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns External Id.
     * External ID of the role.
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     * External ID of the role.
     *
     * @maps externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * Returns Role ARN.
     * Role ARN of the role.
     */
    public function getRoleARN(): ?string
    {
        return $this->roleARN;
    }

    /**
     * Sets Role ARN.
     * Role ARN of the role.
     *
     * @maps roleARN
     */
    public function setRoleARN(?string $roleARN): void
    {
        $this->roleARN = $roleARN;
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
        if (isset($this->accountId)) {
            $json['accountId']  = $this->accountId;
        }
        if (isset($this->externalId)) {
            $json['externalId'] = $this->externalId;
        }
        if (isset($this->roleARN)) {
            $json['roleARN']    = $this->roleARN;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
