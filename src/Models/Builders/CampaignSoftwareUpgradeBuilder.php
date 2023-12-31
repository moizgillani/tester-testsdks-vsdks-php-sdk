<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CampaignSoftwareUpgrade;

/**
 * Builder for model CampaignSoftwareUpgrade
 *
 * @see CampaignSoftwareUpgrade
 */
class CampaignSoftwareUpgradeBuilder
{
    /**
     * @var CampaignSoftwareUpgrade
     */
    private $instance;

    private function __construct(CampaignSoftwareUpgrade $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new campaign software upgrade Builder object.
     */
    public static function init(
        string $softwareName,
        string $softwareFrom,
        string $softwareTo,
        string $distributionType,
        \DateTime $startDate,
        \DateTime $endDate,
        array $deviceList
    ): self {
        return new self(new CampaignSoftwareUpgrade(
            $softwareName,
            $softwareFrom,
            $softwareTo,
            $distributionType,
            $startDate,
            $endDate,
            $deviceList
        ));
    }

    /**
     * Sets campaign name field.
     */
    public function campaignName(?string $value): self
    {
        $this->instance->setCampaignName($value);
        return $this;
    }

    /**
     * Sets download after date field.
     */
    public function downloadAfterDate(?\DateTime $value): self
    {
        $this->instance->setDownloadAfterDate($value);
        return $this;
    }

    /**
     * Sets download time window list field.
     */
    public function downloadTimeWindowList(?array $value): self
    {
        $this->instance->setDownloadTimeWindowList($value);
        return $this;
    }

    /**
     * Sets install after date field.
     */
    public function installAfterDate(?\DateTime $value): self
    {
        $this->instance->setInstallAfterDate($value);
        return $this;
    }

    /**
     * Sets install time window list field.
     */
    public function installTimeWindowList(?array $value): self
    {
        $this->instance->setInstallTimeWindowList($value);
        return $this;
    }

    /**
     * Initializes a new campaign software upgrade object.
     */
    public function build(): CampaignSoftwareUpgrade
    {
        return CoreHelper::clone($this->instance);
    }
}
