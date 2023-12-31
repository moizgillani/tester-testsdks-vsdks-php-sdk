<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class GetWirelessCoverageRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $requestType;

    /**
     * @var string
     */
    private $locationType;

    /**
     * @var Locationscoord
     */
    private $locations;

    /**
     * @var NetworkType[]
     */
    private $networkTypesList;

    /**
     * @param string $accountName
     * @param string $requestType
     * @param string $locationType
     * @param Locationscoord $locations
     * @param NetworkType[] $networkTypesList
     */
    public function __construct(
        string $accountName,
        string $requestType,
        string $locationType,
        Locationscoord $locations,
        array $networkTypesList
    ) {
        $this->accountName = $accountName;
        $this->requestType = $requestType;
        $this->locationType = $locationType;
        $this->locations = $locations;
        $this->networkTypesList = $networkTypesList;
    }

    /**
     * Returns Account Name.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Request Type.
     */
    public function getRequestType(): string
    {
        return $this->requestType;
    }

    /**
     * Sets Request Type.
     *
     * @required
     * @maps requestType
     */
    public function setRequestType(string $requestType): void
    {
        $this->requestType = $requestType;
    }

    /**
     * Returns Location Type.
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }

    /**
     * Sets Location Type.
     *
     * @required
     * @maps locationType
     */
    public function setLocationType(string $locationType): void
    {
        $this->locationType = $locationType;
    }

    /**
     * Returns Locations.
     */
    public function getLocations(): Locationscoord
    {
        return $this->locations;
    }

    /**
     * Sets Locations.
     *
     * @required
     * @maps locations
     */
    public function setLocations(Locationscoord $locations): void
    {
        $this->locations = $locations;
    }

    /**
     * Returns Network Types List.
     *
     * @return NetworkType[]
     */
    public function getNetworkTypesList(): array
    {
        return $this->networkTypesList;
    }

    /**
     * Sets Network Types List.
     *
     * @required
     * @maps networkTypesList
     *
     * @param NetworkType[] $networkTypesList
     */
    public function setNetworkTypesList(array $networkTypesList): void
    {
        $this->networkTypesList = $networkTypesList;
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
        $json['accountName']      = $this->accountName;
        $json['requestType']      = $this->requestType;
        $json['locationType']     = $this->locationType;
        $json['locations']        = $this->locations;
        $json['networkTypesList'] = $this->networkTypesList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
