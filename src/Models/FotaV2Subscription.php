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
 * FOTA Subscription.
 */
class FotaV2Subscription implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $purchaseType;

    /**
     * @var int|null
     */
    private $licenseCount;

    /**
     * @var int|null
     */
    private $licenseUsedCount;

    /**
     * @var string|null
     */
    private $updateTime;

    /**
     * Returns Account Name.
     * Account identifier in "##########-#####".
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account identifier in "##########-#####".
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Purchase Type.
     * Subscription models used by the account.
     */
    public function getPurchaseType(): ?string
    {
        return $this->purchaseType;
    }

    /**
     * Sets Purchase Type.
     * Subscription models used by the account.
     *
     * @maps purchaseType
     */
    public function setPurchaseType(?string $purchaseType): void
    {
        $this->purchaseType = $purchaseType;
    }

    /**
     * Returns License Count.
     * Number of monthly licenses in an MRC subscription.
     */
    public function getLicenseCount(): ?int
    {
        return $this->licenseCount;
    }

    /**
     * Sets License Count.
     * Number of monthly licenses in an MRC subscription.
     *
     * @maps licenseCount
     */
    public function setLicenseCount(?int $licenseCount): void
    {
        $this->licenseCount = $licenseCount;
    }

    /**
     * Returns License Used Count.
     * Number of licenses currently assigned to devices.
     */
    public function getLicenseUsedCount(): ?int
    {
        return $this->licenseUsedCount;
    }

    /**
     * Sets License Used Count.
     * Number of licenses currently assigned to devices.
     *
     * @maps licenseUsedCount
     */
    public function setLicenseUsedCount(?int $licenseUsedCount): void
    {
        $this->licenseUsedCount = $licenseUsedCount;
    }

    /**
     * Returns Update Time.
     * The date and time of when the subscription was last updated.
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * Sets Update Time.
     * The date and time of when the subscription was last updated.
     *
     * @maps updateTime
     */
    public function setUpdateTime(?string $updateTime): void
    {
        $this->updateTime = $updateTime;
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
        if (isset($this->accountName)) {
            $json['accountName']      = $this->accountName;
        }
        if (isset($this->purchaseType)) {
            $json['purchaseType']     = $this->purchaseType;
        }
        if (isset($this->licenseCount)) {
            $json['licenseCount']     = $this->licenseCount;
        }
        if (isset($this->licenseUsedCount)) {
            $json['licenseUsedCount'] = $this->licenseUsedCount;
        }
        if (isset($this->updateTime)) {
            $json['updateTime']       = $this->updateTime;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
