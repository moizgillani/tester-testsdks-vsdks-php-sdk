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
 * Deployment boundary of a service.
 */
class Boundary implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $csp = CSPCompatibilityEnum::AWS_WL;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string[]|null
     */
    private $zoneId;

    /**
     * Returns Csp.
     * Cloud service provider e.g. AWS_PUBLIC_CLOUD, AWS_WL, AWS_OUTPOST, AZURE_EDGE, AZURE_PUBLIC_CLOUD.
     */
    public function getCsp(): ?string
    {
        return $this->csp;
    }

    /**
     * Sets Csp.
     * Cloud service provider e.g. AWS_PUBLIC_CLOUD, AWS_WL, AWS_OUTPOST, AZURE_EDGE, AZURE_PUBLIC_CLOUD.
     *
     * @maps csp
     * @factory \VerizonLib\Models\CSPCompatibilityEnum::checkValue
     */
    public function setCsp(?string $csp): void
    {
        $this->csp = $csp;
    }

    /**
     * Returns Region.
     * Boundary region e.g. US East (Ohio).
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Sets Region.
     * Boundary region e.g. US East (Ohio).
     *
     * @maps region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * Returns Zone Id.
     * Zones listed under a specific region.
     *
     * @return string[]|null
     */
    public function getZoneId(): ?array
    {
        return $this->zoneId;
    }

    /**
     * Sets Zone Id.
     * Zones listed under a specific region.
     *
     * @maps zoneId
     *
     * @param string[]|null $zoneId
     */
    public function setZoneId(?array $zoneId): void
    {
        $this->zoneId = $zoneId;
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
        if (isset($this->csp)) {
            $json['csp']    = CSPCompatibilityEnum::checkValue($this->csp);
        }
        if (isset($this->region)) {
            $json['region'] = $this->region;
        }
        if (isset($this->zoneId)) {
            $json['zoneId'] = $this->zoneId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
