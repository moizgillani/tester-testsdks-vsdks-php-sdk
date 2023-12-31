<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class NodeConfiguration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool|null
     */
    private $isWavelengthZone = false;

    /**
     * @var bool|null
     */
    private $isManagedNodeGroup = false;

    /**
     * @var bool|null
     */
    private $isSpotInstanceNeeded = false;

    /**
     * @var string|null
     */
    private $endPointAccessType = EndPointAccessTypeEnum::PRIVATE_;

    /**
     * @var string|null
     */
    private $instanceType = 'm5.xlarge';

    /**
     * @var int|null
     */
    private $nodes = 2;

    /**
     * @var int|null
     */
    private $nodesMin;

    /**
     * @var int|null
     */
    private $nodesMax;

    /**
     * @var string|null
     */
    private $nodeVolumeType;

    /**
     * @var string|null
     */
    private $subnetCidrBlock;

    /**
     * @var string|null
     */
    private $nodeAmiFamily = 'AmazonLinux2';

    /**
     * @var int|null
     */
    private $nodeVolumeSize;

    /**
     * @var string|null
     */
    private $keyName;

    /**
     * @var int|null
     */
    private $maxPodPerNode;

    /**
     * @var bool|null
     */
    private $useVolumeEncryption = true;

    /**
     * @var bool|null
     */
    private $nodePrivateNetworking = false;

    /**
     * @var string|null
     */
    private $instanceProfileArn;

    /**
     * @var string|null
     */
    private $instanceRoleArn;

    /**
     * @var string|null
     */
    private $instanceRolePermissionBoundary;

    /**
     * @var IdList[]|null
     */
    private $securityGroupIds;

    /**
     * @var IdList[]|null
     */
    private $availabilityZoneIds;

    /**
     * @var NodeConfigurationLabel|null
     */
    private $labels;

    /**
     * @var NodeConfigurationTag|null
     */
    private $tags;

    /**
     * @var bool|null
     */
    private $autoCreateServiceRoles = true;

    /**
     * @var bool|null
     */
    private $enableFullAccessToEcr;

    /**
     * @var bool|null
     */
    private $enableAsgAccess;

    /**
     * @var bool|null
     */
    private $enableDnsAccess;

    /**
     * @var bool|null
     */
    private $enableAppMeshAccess;

    /**
     * @var bool|null
     */
    private $enableAlbAccess;

    /**
     * @var bool|null
     */
    private $enableEfsAccess;

    /**
     * Returns Name.
     * Name of the nodeGroup.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the nodeGroup.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Is Wavelength Zone.
     */
    public function getIsWavelengthZone(): ?bool
    {
        return $this->isWavelengthZone;
    }

    /**
     * Sets Is Wavelength Zone.
     *
     * @maps isWavelengthZone
     */
    public function setIsWavelengthZone(?bool $isWavelengthZone): void
    {
        $this->isWavelengthZone = $isWavelengthZone;
    }

    /**
     * Returns Is Managed Node Group.
     */
    public function getIsManagedNodeGroup(): ?bool
    {
        return $this->isManagedNodeGroup;
    }

    /**
     * Sets Is Managed Node Group.
     *
     * @maps isManagedNodeGroup
     */
    public function setIsManagedNodeGroup(?bool $isManagedNodeGroup): void
    {
        $this->isManagedNodeGroup = $isManagedNodeGroup;
    }

    /**
     * Returns Is Spot Instance Needed.
     */
    public function getIsSpotInstanceNeeded(): ?bool
    {
        return $this->isSpotInstanceNeeded;
    }

    /**
     * Sets Is Spot Instance Needed.
     *
     * @maps isSpotInstanceNeeded
     */
    public function setIsSpotInstanceNeeded(?bool $isSpotInstanceNeeded): void
    {
        $this->isSpotInstanceNeeded = $isSpotInstanceNeeded;
    }

    /**
     * Returns End Point Access Type.
     */
    public function getEndPointAccessType(): ?string
    {
        return $this->endPointAccessType;
    }

    /**
     * Sets End Point Access Type.
     *
     * @maps endPointAccessType
     * @factory \VerizonLib\Models\EndPointAccessTypeEnum::checkValue
     */
    public function setEndPointAccessType(?string $endPointAccessType): void
    {
        $this->endPointAccessType = $endPointAccessType;
    }

    /**
     * Returns Instance Type.
     */
    public function getInstanceType(): ?string
    {
        return $this->instanceType;
    }

    /**
     * Sets Instance Type.
     *
     * @maps instanceType
     */
    public function setInstanceType(?string $instanceType): void
    {
        $this->instanceType = $instanceType;
    }

    /**
     * Returns Nodes.
     */
    public function getNodes(): ?int
    {
        return $this->nodes;
    }

    /**
     * Sets Nodes.
     *
     * @maps nodes
     */
    public function setNodes(?int $nodes): void
    {
        $this->nodes = $nodes;
    }

    /**
     * Returns Nodes Min.
     */
    public function getNodesMin(): ?int
    {
        return $this->nodesMin;
    }

    /**
     * Sets Nodes Min.
     *
     * @maps nodesMin
     */
    public function setNodesMin(?int $nodesMin): void
    {
        $this->nodesMin = $nodesMin;
    }

    /**
     * Returns Nodes Max.
     */
    public function getNodesMax(): ?int
    {
        return $this->nodesMax;
    }

    /**
     * Sets Nodes Max.
     *
     * @maps nodesMax
     */
    public function setNodesMax(?int $nodesMax): void
    {
        $this->nodesMax = $nodesMax;
    }

    /**
     * Returns Node Volume Type.
     */
    public function getNodeVolumeType(): ?string
    {
        return $this->nodeVolumeType;
    }

    /**
     * Sets Node Volume Type.
     *
     * @maps nodeVolumeType
     */
    public function setNodeVolumeType(?string $nodeVolumeType): void
    {
        $this->nodeVolumeType = $nodeVolumeType;
    }

    /**
     * Returns Subnet Cidr Block.
     */
    public function getSubnetCidrBlock(): ?string
    {
        return $this->subnetCidrBlock;
    }

    /**
     * Sets Subnet Cidr Block.
     *
     * @maps subnetCidrBlock
     */
    public function setSubnetCidrBlock(?string $subnetCidrBlock): void
    {
        $this->subnetCidrBlock = $subnetCidrBlock;
    }

    /**
     * Returns Node Ami Family.
     */
    public function getNodeAmiFamily(): ?string
    {
        return $this->nodeAmiFamily;
    }

    /**
     * Sets Node Ami Family.
     *
     * @maps nodeAmiFamily
     */
    public function setNodeAmiFamily(?string $nodeAmiFamily): void
    {
        $this->nodeAmiFamily = $nodeAmiFamily;
    }

    /**
     * Returns Node Volume Size.
     */
    public function getNodeVolumeSize(): ?int
    {
        return $this->nodeVolumeSize;
    }

    /**
     * Sets Node Volume Size.
     *
     * @maps nodeVolumeSize
     */
    public function setNodeVolumeSize(?int $nodeVolumeSize): void
    {
        $this->nodeVolumeSize = $nodeVolumeSize;
    }

    /**
     * Returns Key Name.
     */
    public function getKeyName(): ?string
    {
        return $this->keyName;
    }

    /**
     * Sets Key Name.
     *
     * @maps keyName
     */
    public function setKeyName(?string $keyName): void
    {
        $this->keyName = $keyName;
    }

    /**
     * Returns Max Pod Per Node.
     */
    public function getMaxPodPerNode(): ?int
    {
        return $this->maxPodPerNode;
    }

    /**
     * Sets Max Pod Per Node.
     *
     * @maps maxPodPerNode
     */
    public function setMaxPodPerNode(?int $maxPodPerNode): void
    {
        $this->maxPodPerNode = $maxPodPerNode;
    }

    /**
     * Returns Use Volume Encryption.
     */
    public function getUseVolumeEncryption(): ?bool
    {
        return $this->useVolumeEncryption;
    }

    /**
     * Sets Use Volume Encryption.
     *
     * @maps useVolumeEncryption
     */
    public function setUseVolumeEncryption(?bool $useVolumeEncryption): void
    {
        $this->useVolumeEncryption = $useVolumeEncryption;
    }

    /**
     * Returns Node Private Networking.
     */
    public function getNodePrivateNetworking(): ?bool
    {
        return $this->nodePrivateNetworking;
    }

    /**
     * Sets Node Private Networking.
     *
     * @maps nodePrivateNetworking
     */
    public function setNodePrivateNetworking(?bool $nodePrivateNetworking): void
    {
        $this->nodePrivateNetworking = $nodePrivateNetworking;
    }

    /**
     * Returns Instance Profile Arn.
     */
    public function getInstanceProfileArn(): ?string
    {
        return $this->instanceProfileArn;
    }

    /**
     * Sets Instance Profile Arn.
     *
     * @maps instanceProfileArn
     */
    public function setInstanceProfileArn(?string $instanceProfileArn): void
    {
        $this->instanceProfileArn = $instanceProfileArn;
    }

    /**
     * Returns Instance Role Arn.
     */
    public function getInstanceRoleArn(): ?string
    {
        return $this->instanceRoleArn;
    }

    /**
     * Sets Instance Role Arn.
     *
     * @maps instanceRoleArn
     */
    public function setInstanceRoleArn(?string $instanceRoleArn): void
    {
        $this->instanceRoleArn = $instanceRoleArn;
    }

    /**
     * Returns Instance Role Permission Boundary.
     */
    public function getInstanceRolePermissionBoundary(): ?string
    {
        return $this->instanceRolePermissionBoundary;
    }

    /**
     * Sets Instance Role Permission Boundary.
     *
     * @maps instanceRolePermissionBoundary
     */
    public function setInstanceRolePermissionBoundary(?string $instanceRolePermissionBoundary): void
    {
        $this->instanceRolePermissionBoundary = $instanceRolePermissionBoundary;
    }

    /**
     * Returns Security Group Ids.
     *
     * @return IdList[]|null
     */
    public function getSecurityGroupIds(): ?array
    {
        return $this->securityGroupIds;
    }

    /**
     * Sets Security Group Ids.
     *
     * @maps securityGroupIds
     *
     * @param IdList[]|null $securityGroupIds
     */
    public function setSecurityGroupIds(?array $securityGroupIds): void
    {
        $this->securityGroupIds = $securityGroupIds;
    }

    /**
     * Returns Availability Zone Ids.
     *
     * @return IdList[]|null
     */
    public function getAvailabilityZoneIds(): ?array
    {
        return $this->availabilityZoneIds;
    }

    /**
     * Sets Availability Zone Ids.
     *
     * @maps availabilityZoneIds
     *
     * @param IdList[]|null $availabilityZoneIds
     */
    public function setAvailabilityZoneIds(?array $availabilityZoneIds): void
    {
        $this->availabilityZoneIds = $availabilityZoneIds;
    }

    /**
     * Returns Labels.
     */
    public function getLabels(): ?NodeConfigurationLabel
    {
        return $this->labels;
    }

    /**
     * Sets Labels.
     *
     * @maps labels
     */
    public function setLabels(?NodeConfigurationLabel $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * Returns Tags.
     */
    public function getTags(): ?NodeConfigurationTag
    {
        return $this->tags;
    }

    /**
     * Sets Tags.
     *
     * @maps tags
     */
    public function setTags(?NodeConfigurationTag $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * Returns Auto Create Service Roles.
     */
    public function getAutoCreateServiceRoles(): ?bool
    {
        return $this->autoCreateServiceRoles;
    }

    /**
     * Sets Auto Create Service Roles.
     *
     * @maps autoCreateServiceRoles
     */
    public function setAutoCreateServiceRoles(?bool $autoCreateServiceRoles): void
    {
        $this->autoCreateServiceRoles = $autoCreateServiceRoles;
    }

    /**
     * Returns Enable Full Access to Ecr.
     */
    public function getEnableFullAccessToEcr(): ?bool
    {
        return $this->enableFullAccessToEcr;
    }

    /**
     * Sets Enable Full Access to Ecr.
     *
     * @maps enableFullAccessToEcr
     */
    public function setEnableFullAccessToEcr(?bool $enableFullAccessToEcr): void
    {
        $this->enableFullAccessToEcr = $enableFullAccessToEcr;
    }

    /**
     * Returns Enable Asg Access.
     */
    public function getEnableAsgAccess(): ?bool
    {
        return $this->enableAsgAccess;
    }

    /**
     * Sets Enable Asg Access.
     *
     * @maps enableAsgAccess
     */
    public function setEnableAsgAccess(?bool $enableAsgAccess): void
    {
        $this->enableAsgAccess = $enableAsgAccess;
    }

    /**
     * Returns Enable Dns Access.
     */
    public function getEnableDnsAccess(): ?bool
    {
        return $this->enableDnsAccess;
    }

    /**
     * Sets Enable Dns Access.
     *
     * @maps enableDnsAccess
     */
    public function setEnableDnsAccess(?bool $enableDnsAccess): void
    {
        $this->enableDnsAccess = $enableDnsAccess;
    }

    /**
     * Returns Enable App Mesh Access.
     */
    public function getEnableAppMeshAccess(): ?bool
    {
        return $this->enableAppMeshAccess;
    }

    /**
     * Sets Enable App Mesh Access.
     *
     * @maps enableAppMeshAccess
     */
    public function setEnableAppMeshAccess(?bool $enableAppMeshAccess): void
    {
        $this->enableAppMeshAccess = $enableAppMeshAccess;
    }

    /**
     * Returns Enable Alb Access.
     */
    public function getEnableAlbAccess(): ?bool
    {
        return $this->enableAlbAccess;
    }

    /**
     * Sets Enable Alb Access.
     *
     * @maps enableAlbAccess
     */
    public function setEnableAlbAccess(?bool $enableAlbAccess): void
    {
        $this->enableAlbAccess = $enableAlbAccess;
    }

    /**
     * Returns Enable Efs Access.
     */
    public function getEnableEfsAccess(): ?bool
    {
        return $this->enableEfsAccess;
    }

    /**
     * Sets Enable Efs Access.
     *
     * @maps enableEfsAccess
     */
    public function setEnableEfsAccess(?bool $enableEfsAccess): void
    {
        $this->enableEfsAccess = $enableEfsAccess;
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
            $json['name']                           = $this->name;
        }
        if (isset($this->isWavelengthZone)) {
            $json['isWavelengthZone']               = $this->isWavelengthZone;
        }
        if (isset($this->isManagedNodeGroup)) {
            $json['isManagedNodeGroup']             = $this->isManagedNodeGroup;
        }
        if (isset($this->isSpotInstanceNeeded)) {
            $json['isSpotInstanceNeeded']           = $this->isSpotInstanceNeeded;
        }
        if (isset($this->endPointAccessType)) {
            $json['endPointAccessType']             = EndPointAccessTypeEnum::checkValue($this->endPointAccessType);
        }
        if (isset($this->instanceType)) {
            $json['instanceType']                   = $this->instanceType;
        }
        if (isset($this->nodes)) {
            $json['nodes']                          = $this->nodes;
        }
        if (isset($this->nodesMin)) {
            $json['nodesMin']                       = $this->nodesMin;
        }
        if (isset($this->nodesMax)) {
            $json['nodesMax']                       = $this->nodesMax;
        }
        if (isset($this->nodeVolumeType)) {
            $json['nodeVolumeType']                 = $this->nodeVolumeType;
        }
        if (isset($this->subnetCidrBlock)) {
            $json['subnetCidrBlock']                = $this->subnetCidrBlock;
        }
        if (isset($this->nodeAmiFamily)) {
            $json['nodeAmiFamily']                  = $this->nodeAmiFamily;
        }
        if (isset($this->nodeVolumeSize)) {
            $json['nodeVolumeSize']                 = $this->nodeVolumeSize;
        }
        if (isset($this->keyName)) {
            $json['keyName']                        = $this->keyName;
        }
        if (isset($this->maxPodPerNode)) {
            $json['maxPodPerNode']                  = $this->maxPodPerNode;
        }
        if (isset($this->useVolumeEncryption)) {
            $json['useVolumeEncryption']            = $this->useVolumeEncryption;
        }
        if (isset($this->nodePrivateNetworking)) {
            $json['nodePrivateNetworking']          = $this->nodePrivateNetworking;
        }
        if (isset($this->instanceProfileArn)) {
            $json['instanceProfileArn']             = $this->instanceProfileArn;
        }
        if (isset($this->instanceRoleArn)) {
            $json['instanceRoleArn']                = $this->instanceRoleArn;
        }
        if (isset($this->instanceRolePermissionBoundary)) {
            $json['instanceRolePermissionBoundary'] = $this->instanceRolePermissionBoundary;
        }
        if (isset($this->securityGroupIds)) {
            $json['securityGroupIds']               = $this->securityGroupIds;
        }
        if (isset($this->availabilityZoneIds)) {
            $json['availabilityZoneIds']            = $this->availabilityZoneIds;
        }
        if (isset($this->labels)) {
            $json['labels']                         = $this->labels;
        }
        if (isset($this->tags)) {
            $json['tags']                           = $this->tags;
        }
        if (isset($this->autoCreateServiceRoles)) {
            $json['autoCreateServiceRoles']         = $this->autoCreateServiceRoles;
        }
        if (isset($this->enableFullAccessToEcr)) {
            $json['enableFullAccessToEcr']          = $this->enableFullAccessToEcr;
        }
        if (isset($this->enableAsgAccess)) {
            $json['enableAsgAccess']                = $this->enableAsgAccess;
        }
        if (isset($this->enableDnsAccess)) {
            $json['enableDnsAccess']                = $this->enableDnsAccess;
        }
        if (isset($this->enableAppMeshAccess)) {
            $json['enableAppMeshAccess']            = $this->enableAppMeshAccess;
        }
        if (isset($this->enableAlbAccess)) {
            $json['enableAlbAccess']                = $this->enableAlbAccess;
        }
        if (isset($this->enableEfsAccess)) {
            $json['enableEfsAccess']                = $this->enableEfsAccess;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
