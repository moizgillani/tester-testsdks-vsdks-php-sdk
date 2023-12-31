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
 * Service which is selected.
 */
class SelectedService implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $state;

    /**
     * Returns Name.
     * Name of the service needs to be deployed.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the service needs to be deployed.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Version.
     * Name of the service user is created.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Sets Version.
     * Name of the service user is created.
     *
     * @maps version
     */
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }

    /**
     * Returns State.
     * Can have any value as - DRAFT, DESIGN, TESTING, PUBLISH, CERTIFY, READY_TO_USE, DEPRECATE, DELETED.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * Can have any value as - DRAFT, DESIGN, TESTING, PUBLISH, CERTIFY, READY_TO_USE, DEPRECATE, DELETED.
     *
     * @maps state
     * @factory \VerizonLib\Models\ServiceStateEnum::checkValue
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
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
        if (isset($this->name)) {
            $json['name']    = $this->name;
        }
        if (isset($this->version)) {
            $json['version'] = $this->version;
        }
        if (isset($this->state)) {
            $json['state']   = ServiceStateEnum::checkValue($this->state);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
