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
 * Information related to manage resources in Azure infrastructure.
 */
class AzureCspProfile implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $tenantID;

    /**
     * @var string|null
     */
    private $subscriptionID;

    /**
     * @var string|null
     */
    private $clientId;

    /**
     * @var string|null
     */
    private $clientSecret;

    /**
     * Returns Tenant ID.
     * Azure tenant ID.
     */
    public function getTenantID(): ?string
    {
        return $this->tenantID;
    }

    /**
     * Sets Tenant ID.
     * Azure tenant ID.
     *
     * @maps tenantID
     */
    public function setTenantID(?string $tenantID): void
    {
        $this->tenantID = $tenantID;
    }

    /**
     * Returns Subscription ID.
     * Azure subscription ID.
     */
    public function getSubscriptionID(): ?string
    {
        return $this->subscriptionID;
    }

    /**
     * Sets Subscription ID.
     * Azure subscription ID.
     *
     * @maps subscriptionID
     */
    public function setSubscriptionID(?string $subscriptionID): void
    {
        $this->subscriptionID = $subscriptionID;
    }

    /**
     * Returns Client Id.
     * Azure client ID.
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * Sets Client Id.
     * Azure client ID.
     *
     * @maps clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * Returns Client Secret.
     * Azure client secret.
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    /**
     * Sets Client Secret.
     * Azure client secret.
     *
     * @maps clientSecret
     */
    public function setClientSecret(?string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
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
        if (isset($this->tenantID)) {
            $json['tenantID']       = $this->tenantID;
        }
        if (isset($this->subscriptionID)) {
            $json['subscriptionID'] = $this->subscriptionID;
        }
        if (isset($this->clientId)) {
            $json['clientId']       = $this->clientId;
        }
        if (isset($this->clientSecret)) {
            $json['clientSecret']   = $this->clientSecret;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
