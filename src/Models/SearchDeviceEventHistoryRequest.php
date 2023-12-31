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
 * Search Device By Property resource definition.
 */
class SearchDeviceEventHistoryRequest implements \JsonSerializable
{
    /**
     * @var AccountIdentifier
     */
    private $accountidentifier;

    /**
     * @var array<string,string>|null
     */
    private $selection;

    /**
     * @var ResourceIdentifier
     */
    private $resourceidentifier;

    /**
     * @var int|null
     */
    private $limitnumber;

    /**
     * @var string|null
     */
    private $page;

    /**
     * @param AccountIdentifier $accountidentifier
     * @param ResourceIdentifier $resourceidentifier
     */
    public function __construct(AccountIdentifier $accountidentifier, ResourceIdentifier $resourceidentifier)
    {
        $this->accountidentifier = $accountidentifier;
        $this->resourceidentifier = $resourceidentifier;
    }

    /**
     * Returns Accountidentifier.
     * The ID of the authenticating billing account, in the format `{"billingaccountid":"1234567890-
     * 12345"}`.
     */
    public function getAccountidentifier(): AccountIdentifier
    {
        return $this->accountidentifier;
    }

    /**
     * Sets Accountidentifier.
     * The ID of the authenticating billing account, in the format `{"billingaccountid":"1234567890-
     * 12345"}`.
     *
     * @required
     * @maps accountidentifier
     */
    public function setAccountidentifier(AccountIdentifier $accountidentifier): void
    {
        $this->accountidentifier = $accountidentifier;
    }

    /**
     * Returns Selection.
     * A comma-separated list of properties and comparator values to match against subscriptions in the
     * ThingSpace account. See Working with Query Filters for more information. If the request does not
     * include `$selection`, the response will include all subscriptions to which the requesting user has
     * access.
     *
     * @return array<string,string>|null
     */
    public function getSelection(): ?array
    {
        return $this->selection;
    }

    /**
     * Sets Selection.
     * A comma-separated list of properties and comparator values to match against subscriptions in the
     * ThingSpace account. See Working with Query Filters for more information. If the request does not
     * include `$selection`, the response will include all subscriptions to which the requesting user has
     * access.
     *
     * @maps $selection
     *
     * @param array<string,string>|null $selection
     */
    public function setSelection(?array $selection): void
    {
        $this->selection = $selection;
    }

    /**
     * Returns Resourceidentifier.
     * The ID of the target to delete, in the format {"id": "dd1682d3-2d80-cefc-f3ee-25154800beff"}.
     */
    public function getResourceidentifier(): ResourceIdentifier
    {
        return $this->resourceidentifier;
    }

    /**
     * Sets Resourceidentifier.
     * The ID of the target to delete, in the format {"id": "dd1682d3-2d80-cefc-f3ee-25154800beff"}.
     *
     * @required
     * @maps resourceidentifier
     */
    public function setResourceidentifier(ResourceIdentifier $resourceidentifier): void
    {
        $this->resourceidentifier = $resourceidentifier;
    }

    /**
     * Returns Limitnumber.
     * The maximum number of events to include in the response.
     */
    public function getLimitnumber(): ?int
    {
        return $this->limitnumber;
    }

    /**
     * Sets Limitnumber.
     * The maximum number of events to include in the response.
     *
     * @maps $limitnumber
     */
    public function setLimitnumber(?int $limitnumber): void
    {
        $this->limitnumber = $limitnumber;
    }

    /**
     * Returns Page.
     * The maximum number of events to include in the response.
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * Sets Page.
     * The maximum number of events to include in the response.
     *
     * @maps $page
     */
    public function setPage(?string $page): void
    {
        $this->page = $page;
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
        $json['accountidentifier']  = $this->accountidentifier;
        if (isset($this->selection)) {
            $json['$selection']     = $this->selection;
        }
        $json['resourceidentifier'] = $this->resourceidentifier;
        if (isset($this->limitnumber)) {
            $json['$limitnumber']   = $this->limitnumber;
        }
        if (isset($this->page)) {
            $json['$page']          = $this->page;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
