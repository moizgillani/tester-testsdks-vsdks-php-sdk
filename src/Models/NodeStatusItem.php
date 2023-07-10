<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class NodeStatusItem implements \JsonSerializable
{
    /**
     * @var Metadata|null
     */
    private $metadata;

    /**
     * @var ServiceLaunchClusterAdditionalParams|null
     */
    private $spec;

    /**
     * @var NodeStatus|null
     */
    private $status;

    /**
     * Returns Metadata.
     */
    public function getMetadata(): ?Metadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Spec.
     */
    public function getSpec(): ?ServiceLaunchClusterAdditionalParams
    {
        return $this->spec;
    }

    /**
     * Sets Spec.
     *
     * @maps spec
     */
    public function setSpec(?ServiceLaunchClusterAdditionalParams $spec): void
    {
        $this->spec = $spec;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?NodeStatus
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?NodeStatus $status): void
    {
        $this->status = $status;
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
        if (isset($this->metadata)) {
            $json['metadata'] = $this->metadata;
        }
        if (isset($this->spec)) {
            $json['spec']     = $this->spec;
        }
        if (isset($this->status)) {
            $json['status']   = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}