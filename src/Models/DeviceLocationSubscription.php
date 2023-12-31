<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DeviceLocationSubscription implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $locType;

    /**
     * @var string|null
     */
    private $maxAllowance;

    /**
     * @var string|null
     */
    private $purchaseTime;

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
     * Returns Loc Type.
     * Location service license type.
     */
    public function getLocType(): ?string
    {
        return $this->locType;
    }

    /**
     * Sets Loc Type.
     * Location service license type.
     *
     * @maps locType
     */
    public function setLocType(?string $locType): void
    {
        $this->locType = $locType;
    }

    /**
     * Returns Max Allowance.
     * The number of billable location requests allowed per billing cycle.
     */
    public function getMaxAllowance(): ?string
    {
        return $this->maxAllowance;
    }

    /**
     * Sets Max Allowance.
     * The number of billable location requests allowed per billing cycle.
     *
     * @maps maxAllowance
     */
    public function setMaxAllowance(?string $maxAllowance): void
    {
        $this->maxAllowance = $maxAllowance;
    }

    /**
     * Returns Purchase Time.
     * Location service purchase time.
     */
    public function getPurchaseTime(): ?string
    {
        return $this->purchaseTime;
    }

    /**
     * Sets Purchase Time.
     * Location service purchase time.
     *
     * @maps purchaseTime
     */
    public function setPurchaseTime(?string $purchaseTime): void
    {
        $this->purchaseTime = $purchaseTime;
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
            $json['accountName']  = $this->accountName;
        }
        if (isset($this->locType)) {
            $json['locType']      = $this->locType;
        }
        if (isset($this->maxAllowance)) {
            $json['maxAllowance'] = $this->maxAllowance;
        }
        if (isset($this->purchaseTime)) {
            $json['purchaseTime'] = $this->purchaseTime;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
