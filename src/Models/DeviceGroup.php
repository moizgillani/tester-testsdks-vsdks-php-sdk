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
 * Returns a list of all device groups in a specified account.
 */
class DeviceGroup implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $description;

    /**
     * @var CustomFields[]|null
     */
    private $extendedAttributes;

    /**
     * @var bool|null
     */
    private $isDefaultGroup;

    /**
     * @var string|null
     */
    private $name;

    /**
     * Returns Description.
     * The description of the device group.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The description of the device group.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Extended Attributes.
     * Any extended attributes for the device group, as Key and Value pairs.
     *
     * @return CustomFields[]|null
     */
    public function getExtendedAttributes(): ?array
    {
        return $this->extendedAttributes;
    }

    /**
     * Sets Extended Attributes.
     * Any extended attributes for the device group, as Key and Value pairs.
     *
     * @maps extendedAttributes
     *
     * @param CustomFields[]|null $extendedAttributes
     */
    public function setExtendedAttributes(?array $extendedAttributes): void
    {
        $this->extendedAttributes = $extendedAttributes;
    }

    /**
     * Returns Is Default Group.
     * Identifies the default device group.
     */
    public function getIsDefaultGroup(): ?bool
    {
        return $this->isDefaultGroup;
    }

    /**
     * Sets Is Default Group.
     * Identifies the default device group.
     *
     * @maps isDefaultGroup
     */
    public function setIsDefaultGroup(?bool $isDefaultGroup): void
    {
        $this->isDefaultGroup = $isDefaultGroup;
    }

    /**
     * Returns Name.
     * The name of the device group.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the device group.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
        if (isset($this->description)) {
            $json['description']        = $this->description;
        }
        if (isset($this->extendedAttributes)) {
            $json['extendedAttributes'] = $this->extendedAttributes;
        }
        if (isset($this->isDefaultGroup)) {
            $json['isDefaultGroup']     = $this->isDefaultGroup;
        }
        if (isset($this->name)) {
            $json['name']               = $this->name;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
