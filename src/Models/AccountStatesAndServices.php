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
 * Returns a list and details of all custom services and states defined for a specified account.
 */
class AccountStatesAndServices implements \JsonSerializable
{
    /**
     * @var Engagement[]
     */
    private $engagement;

    /**
     * @param Engagement[] $engagement
     */
    public function __construct(array $engagement)
    {
        $this->engagement = $engagement;
    }

    /**
     * Returns Engagement.
     * The engagements associated with the account.
     *
     * @return Engagement[]
     */
    public function getEngagement(): array
    {
        return $this->engagement;
    }

    /**
     * Sets Engagement.
     * The engagements associated with the account.
     *
     * @required
     * @maps engagement
     *
     * @param Engagement[] $engagement
     */
    public function setEngagement(array $engagement): void
    {
        $this->engagement = $engagement;
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
        $json['engagement'] = $this->engagement;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}