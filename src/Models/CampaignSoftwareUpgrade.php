<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

/**
 * Software upgrade information.
 */
class CampaignSoftwareUpgrade implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $campaignName;

    /**
     * @var string
     */
    private $softwareName;

    /**
     * @var string
     */
    private $softwareFrom;

    /**
     * @var string
     */
    private $softwareTo;

    /**
     * @var string
     */
    private $distributionType;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \DateTime|null
     */
    private $downloadAfterDate;

    /**
     * @var V2TimeWindow[]|null
     */
    private $downloadTimeWindowList;

    /**
     * @var \DateTime|null
     */
    private $installAfterDate;

    /**
     * @var V2TimeWindow[]|null
     */
    private $installTimeWindowList;

    /**
     * @var string[]
     */
    private $deviceList;

    /**
     * @param string $softwareName
     * @param string $softwareFrom
     * @param string $softwareTo
     * @param string $distributionType
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param string[] $deviceList
     */
    public function __construct(
        string $softwareName,
        string $softwareFrom,
        string $softwareTo,
        string $distributionType,
        \DateTime $startDate,
        \DateTime $endDate,
        array $deviceList
    ) {
        $this->softwareName = $softwareName;
        $this->softwareFrom = $softwareFrom;
        $this->softwareTo = $softwareTo;
        $this->distributionType = $distributionType;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Campaign Name.
     * Campaign name.
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * Sets Campaign Name.
     * Campaign name.
     *
     * @maps campaignName
     */
    public function setCampaignName(?string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * Returns Software Name.
     * Software name to upgrade to.
     */
    public function getSoftwareName(): string
    {
        return $this->softwareName;
    }

    /**
     * Sets Software Name.
     * Software name to upgrade to.
     *
     * @required
     * @maps softwareName
     */
    public function setSoftwareName(string $softwareName): void
    {
        $this->softwareName = $softwareName;
    }

    /**
     * Returns Software From.
     * Old software name.
     */
    public function getSoftwareFrom(): string
    {
        return $this->softwareFrom;
    }

    /**
     * Sets Software From.
     * Old software name.
     *
     * @required
     * @maps softwareFrom
     */
    public function setSoftwareFrom(string $softwareFrom): void
    {
        $this->softwareFrom = $softwareFrom;
    }

    /**
     * Returns Software To.
     * New software name.
     */
    public function getSoftwareTo(): string
    {
        return $this->softwareTo;
    }

    /**
     * Sets Software To.
     * New software name.
     *
     * @required
     * @maps softwareTo
     */
    public function setSoftwareTo(string $softwareTo): void
    {
        $this->softwareTo = $softwareTo;
    }

    /**
     * Returns Distribution Type.
     * OMA or HTTP.
     */
    public function getDistributionType(): string
    {
        return $this->distributionType;
    }

    /**
     * Sets Distribution Type.
     * OMA or HTTP.
     *
     * @required
     * @maps distributionType
     */
    public function setDistributionType(string $distributionType): void
    {
        $this->distributionType = $distributionType;
    }

    /**
     * Returns Start Date.
     * Campaign start date.
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * Campaign start date.
     *
     * @required
     * @maps startDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     * Campaign end date.
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * Campaign end date.
     *
     * @required
     * @maps endDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Download After Date.
     * Specifies starting date client should download package. If null, client will download as soon as
     * possible.
     */
    public function getDownloadAfterDate(): ?\DateTime
    {
        return $this->downloadAfterDate;
    }

    /**
     * Sets Download After Date.
     * Specifies starting date client should download package. If null, client will download as soon as
     * possible.
     *
     * @maps downloadAfterDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDownloadAfterDate(?\DateTime $downloadAfterDate): void
    {
        $this->downloadAfterDate = $downloadAfterDate;
    }

    /**
     * Returns Download Time Window List.
     * List of allowed download time windows.
     *
     * @return V2TimeWindow[]|null
     */
    public function getDownloadTimeWindowList(): ?array
    {
        return $this->downloadTimeWindowList;
    }

    /**
     * Sets Download Time Window List.
     * List of allowed download time windows.
     *
     * @maps downloadTimeWindowList
     *
     * @param V2TimeWindow[]|null $downloadTimeWindowList
     */
    public function setDownloadTimeWindowList(?array $downloadTimeWindowList): void
    {
        $this->downloadTimeWindowList = $downloadTimeWindowList;
    }

    /**
     * Returns Install After Date.
     * Client will install package after date. If null, client will install as soon as possible.
     */
    public function getInstallAfterDate(): ?\DateTime
    {
        return $this->installAfterDate;
    }

    /**
     * Sets Install After Date.
     * Client will install package after date. If null, client will install as soon as possible.
     *
     * @maps installAfterDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setInstallAfterDate(?\DateTime $installAfterDate): void
    {
        $this->installAfterDate = $installAfterDate;
    }

    /**
     * Returns Install Time Window List.
     * List of allowed install time windows.
     *
     * @return V2TimeWindow[]|null
     */
    public function getInstallTimeWindowList(): ?array
    {
        return $this->installTimeWindowList;
    }

    /**
     * Sets Install Time Window List.
     * List of allowed install time windows.
     *
     * @maps installTimeWindowList
     *
     * @param V2TimeWindow[]|null $installTimeWindowList
     */
    public function setInstallTimeWindowList(?array $installTimeWindowList): void
    {
        $this->installTimeWindowList = $installTimeWindowList;
    }

    /**
     * Returns Device List.
     * Device IMEI list.
     *
     * @return string[]
     */
    public function getDeviceList(): array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * Device IMEI list.
     *
     * @required
     * @maps deviceList
     *
     * @param string[] $deviceList
     */
    public function setDeviceList(array $deviceList): void
    {
        $this->deviceList = $deviceList;
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
        if (isset($this->campaignName)) {
            $json['campaignName']           = $this->campaignName;
        }
        $json['softwareName']               = $this->softwareName;
        $json['softwareFrom']               = $this->softwareFrom;
        $json['softwareTo']                 = $this->softwareTo;
        $json['distributionType']           = $this->distributionType;
        $json['startDate']                  = DateTimeHelper::toSimpleDate($this->startDate);
        $json['endDate']                    = DateTimeHelper::toSimpleDate($this->endDate);
        if (isset($this->downloadAfterDate)) {
            $json['downloadAfterDate']      = DateTimeHelper::toSimpleDate($this->downloadAfterDate);
        }
        if (isset($this->downloadTimeWindowList)) {
            $json['downloadTimeWindowList'] = $this->downloadTimeWindowList;
        }
        if (isset($this->installAfterDate)) {
            $json['installAfterDate']       = DateTimeHelper::toSimpleDate($this->installAfterDate);
        }
        if (isset($this->installTimeWindowList)) {
            $json['installTimeWindowList']  = $this->installTimeWindowList;
        }
        $json['deviceList']                 = $this->deviceList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
