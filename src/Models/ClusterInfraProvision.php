<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ClusterInfraProvision implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $clusterId;

    /**
     * @var string|null
     */
    private $provisionId;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $modifiedAt;

    /**
     * @var string|null
     */
    private $organizationId;

    /**
     * @var string|null
     */
    private $partnerId;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $runningState;

    /**
     * @var string|null
     */
    private $runningStatus;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var int|null
     */
    private $totalSteps;

    /**
     * Returns Cluster Id.
     */
    public function getClusterId(): ?string
    {
        return $this->clusterId;
    }

    /**
     * Sets Cluster Id.
     *
     * @maps cluster_id
     */
    public function setClusterId(?string $clusterId): void
    {
        $this->clusterId = $clusterId;
    }

    /**
     * Returns Provision Id.
     */
    public function getProvisionId(): ?string
    {
        return $this->provisionId;
    }

    /**
     * Sets Provision Id.
     *
     * @maps provision_id
     */
    public function setProvisionId(?string $provisionId): void
    {
        $this->provisionId = $provisionId;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Modified At.
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    /**
     * Sets Modified At.
     *
     * @maps modified_at
     */
    public function setModifiedAt(?string $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

    /**
     * Returns Organization Id.
     */
    public function getOrganizationId(): ?string
    {
        return $this->organizationId;
    }

    /**
     * Sets Organization Id.
     *
     * @maps organization_id
     */
    public function setOrganizationId(?string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    /**
     * Returns Partner Id.
     */
    public function getPartnerId(): ?string
    {
        return $this->partnerId;
    }

    /**
     * Sets Partner Id.
     *
     * @maps partner_id
     */
    public function setPartnerId(?string $partnerId): void
    {
        $this->partnerId = $partnerId;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Running State.
     */
    public function getRunningState(): ?string
    {
        return $this->runningState;
    }

    /**
     * Sets Running State.
     *
     * @maps running_state
     */
    public function setRunningState(?string $runningState): void
    {
        $this->runningState = $runningState;
    }

    /**
     * Returns Running Status.
     */
    public function getRunningStatus(): ?string
    {
        return $this->runningStatus;
    }

    /**
     * Sets Running Status.
     *
     * @maps running_status
     */
    public function setRunningStatus(?string $runningStatus): void
    {
        $this->runningStatus = $runningStatus;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Total Steps.
     */
    public function getTotalSteps(): ?int
    {
        return $this->totalSteps;
    }

    /**
     * Sets Total Steps.
     *
     * @maps total_steps
     */
    public function setTotalSteps(?int $totalSteps): void
    {
        $this->totalSteps = $totalSteps;
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
        if (isset($this->clusterId)) {
            $json['cluster_id']      = $this->clusterId;
        }
        if (isset($this->provisionId)) {
            $json['provision_id']    = $this->provisionId;
        }
        if (isset($this->createdAt)) {
            $json['created_at']      = $this->createdAt;
        }
        if (isset($this->modifiedAt)) {
            $json['modified_at']     = $this->modifiedAt;
        }
        if (isset($this->organizationId)) {
            $json['organization_id'] = $this->organizationId;
        }
        if (isset($this->partnerId)) {
            $json['partner_id']      = $this->partnerId;
        }
        if (isset($this->type)) {
            $json['type']            = $this->type;
        }
        if (isset($this->runningState)) {
            $json['running_state']   = $this->runningState;
        }
        if (isset($this->runningStatus)) {
            $json['running_status']  = $this->runningStatus;
        }
        if (isset($this->id)) {
            $json['id']              = $this->id;
        }
        if (isset($this->status)) {
            $json['status']          = $this->status;
        }
        if (isset($this->totalSteps)) {
            $json['total_steps']     = $this->totalSteps;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
