<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ClusterInfra implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

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
    private $country;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $latitude;

    /**
     * @var string|null
     */
    private $longitude;

    /**
     * @var string|null
     */
    private $clusterId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $cert;

    /**
     * @var string|null
     */
    private $passphrase;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $cname;

    /**
     * @var string|null
     */
    private $arecord;

    /**
     * @var float|null
     */
    private $baseRatio;

    /**
     * @var bool|null
     */
    private $haEnabled;

    /**
     * @var string|null
     */
    private $displayName;

    /**
     * @var string|null
     */
    private $upgradeStatus;

    /**
     * @var string|null
     */
    private $providerId;

    /**
     * @var bool|null
     */
    private $autoCreate;

    /**
     * @var bool|null
     */
    private $autoApproveNodes;

    /**
     * @var string|null
     */
    private $provisionId;

    /**
     * @var bool|null
     */
    private $isMonitorEnabled;

    /**
     * @var int|null
     */
    private $health;

    /**
     * @var string|null
     */
    private $healthStatusModifiedAt;

    /**
     * @var string|null
     */
    private $manufacturer;

    /**
     * @var string|null
     */
    private $clusterType;

    /**
     * @var string|null
     */
    private $clusterBlueprint;

    /**
     * @var string|null
     */
    private $gimageUsed;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * @var bool|null
     */
    private $isMasterDedicated;

    /**
     * @var string|null
     */
    private $projectId;

    /**
     * @var string|null
     */
    private $provisionOs;

    /**
     * @var string|null
     */
    private $defaultStorageClass;

    /**
     * @var StorageClassMap|null
     */
    private $storageClassMap;

    /**
     * @var string|null
     */
    private $cniProvider;

    /**
     * @var string|null
     */
    private $provisionK8s;

    /**
     * @var string|null
     */
    private $etcdVersion;

    /**
     * @var string|null
     */
    private $consulVersion;

    /**
     * @var string|null
     */
    private $clusterBlueprintVersion;

    /**
     * @var bool|null
     */
    private $upgradeProtection;

    /**
     * @var ClusterInfraProvision|null
     */
    private $provision;

    /**
     * @var Metro|null
     */
    private $metro;

    /**
     * @var Node[]|null
     */
    private $nodes;

    /**
     * @var ClusterProviderParams|null
     */
    private $clusterProviderParams;

    /**
     * @var NodeGroupItem[]|null
     */
    private $nodegroups;

    /**
     * @var ClusterVersionInfo|null
     */
    private $clusterVersionInfo;

    /**
     * @var ProjectItem[]|null
     */
    private $projects;

    /**
     * @var Cluster|null
     */
    private $cluster;

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     * Returns Country.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Latitude.
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     *
     * @maps latitude
     */
    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns Longitude.
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     *
     * @maps longitude
     */
    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
    }

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
     * Returns Cert.
     */
    public function getCert(): ?string
    {
        return $this->cert;
    }

    /**
     * Sets Cert.
     *
     * @maps cert
     */
    public function setCert(?string $cert): void
    {
        $this->cert = $cert;
    }

    /**
     * Returns Passphrase.
     */
    public function getPassphrase(): ?string
    {
        return $this->passphrase;
    }

    /**
     * Sets Passphrase.
     *
     * @maps passphrase
     */
    public function setPassphrase(?string $passphrase): void
    {
        $this->passphrase = $passphrase;
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
     * Returns Cname.
     */
    public function getCname(): ?string
    {
        return $this->cname;
    }

    /**
     * Sets Cname.
     *
     * @maps cname
     */
    public function setCname(?string $cname): void
    {
        $this->cname = $cname;
    }

    /**
     * Returns Arecord.
     */
    public function getArecord(): ?string
    {
        return $this->arecord;
    }

    /**
     * Sets Arecord.
     *
     * @maps arecord
     */
    public function setArecord(?string $arecord): void
    {
        $this->arecord = $arecord;
    }

    /**
     * Returns Base Ratio.
     */
    public function getBaseRatio(): ?float
    {
        return $this->baseRatio;
    }

    /**
     * Sets Base Ratio.
     *
     * @maps base_ratio
     */
    public function setBaseRatio(?float $baseRatio): void
    {
        $this->baseRatio = $baseRatio;
    }

    /**
     * Returns Ha Enabled.
     */
    public function getHaEnabled(): ?bool
    {
        return $this->haEnabled;
    }

    /**
     * Sets Ha Enabled.
     *
     * @maps ha_enabled
     */
    public function setHaEnabled(?bool $haEnabled): void
    {
        $this->haEnabled = $haEnabled;
    }

    /**
     * Returns Display Name.
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * Sets Display Name.
     *
     * @maps display_name
     */
    public function setDisplayName(?string $displayName): void
    {
        $this->displayName = $displayName;
    }

    /**
     * Returns Upgrade Status.
     */
    public function getUpgradeStatus(): ?string
    {
        return $this->upgradeStatus;
    }

    /**
     * Sets Upgrade Status.
     *
     * @maps upgradeStatus
     */
    public function setUpgradeStatus(?string $upgradeStatus): void
    {
        $this->upgradeStatus = $upgradeStatus;
    }

    /**
     * Returns Provider Id.
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }

    /**
     * Sets Provider Id.
     *
     * @maps provider_id
     */
    public function setProviderId(?string $providerId): void
    {
        $this->providerId = $providerId;
    }

    /**
     * Returns Auto Create.
     */
    public function getAutoCreate(): ?bool
    {
        return $this->autoCreate;
    }

    /**
     * Sets Auto Create.
     *
     * @maps auto_create
     */
    public function setAutoCreate(?bool $autoCreate): void
    {
        $this->autoCreate = $autoCreate;
    }

    /**
     * Returns Auto Approve Nodes.
     */
    public function getAutoApproveNodes(): ?bool
    {
        return $this->autoApproveNodes;
    }

    /**
     * Sets Auto Approve Nodes.
     *
     * @maps auto_approve_nodes
     */
    public function setAutoApproveNodes(?bool $autoApproveNodes): void
    {
        $this->autoApproveNodes = $autoApproveNodes;
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
     * Returns Is Monitor Enabled.
     */
    public function getIsMonitorEnabled(): ?bool
    {
        return $this->isMonitorEnabled;
    }

    /**
     * Sets Is Monitor Enabled.
     *
     * @maps is_monitor_enabled
     */
    public function setIsMonitorEnabled(?bool $isMonitorEnabled): void
    {
        $this->isMonitorEnabled = $isMonitorEnabled;
    }

    /**
     * Returns Health.
     */
    public function getHealth(): ?int
    {
        return $this->health;
    }

    /**
     * Sets Health.
     *
     * @maps health
     */
    public function setHealth(?int $health): void
    {
        $this->health = $health;
    }

    /**
     * Returns Health Status Modified At.
     */
    public function getHealthStatusModifiedAt(): ?string
    {
        return $this->healthStatusModifiedAt;
    }

    /**
     * Sets Health Status Modified At.
     *
     * @maps health_status_modified_at
     */
    public function setHealthStatusModifiedAt(?string $healthStatusModifiedAt): void
    {
        $this->healthStatusModifiedAt = $healthStatusModifiedAt;
    }

    /**
     * Returns Manufacturer.
     */
    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    /**
     * Sets Manufacturer.
     *
     * @maps manufacturer
     */
    public function setManufacturer(?string $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Returns Cluster Type.
     */
    public function getClusterType(): ?string
    {
        return $this->clusterType;
    }

    /**
     * Sets Cluster Type.
     *
     * @maps cluster_type
     */
    public function setClusterType(?string $clusterType): void
    {
        $this->clusterType = $clusterType;
    }

    /**
     * Returns Cluster Blueprint.
     */
    public function getClusterBlueprint(): ?string
    {
        return $this->clusterBlueprint;
    }

    /**
     * Sets Cluster Blueprint.
     *
     * @maps cluster_blueprint
     */
    public function setClusterBlueprint(?string $clusterBlueprint): void
    {
        $this->clusterBlueprint = $clusterBlueprint;
    }

    /**
     * Returns Gimage Used.
     */
    public function getGimageUsed(): ?string
    {
        return $this->gimageUsed;
    }

    /**
     * Sets Gimage Used.
     *
     * @maps gimage_used
     */
    public function setGimageUsed(?string $gimageUsed): void
    {
        $this->gimageUsed = $gimageUsed;
    }

    /**
     * Returns Reason.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Is Master Dedicated.
     */
    public function getIsMasterDedicated(): ?bool
    {
        return $this->isMasterDedicated;
    }

    /**
     * Sets Is Master Dedicated.
     *
     * @maps is_master_dedicated
     */
    public function setIsMasterDedicated(?bool $isMasterDedicated): void
    {
        $this->isMasterDedicated = $isMasterDedicated;
    }

    /**
     * Returns Project Id.
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * Sets Project Id.
     *
     * @maps project_id
     */
    public function setProjectId(?string $projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * Returns Provision Os.
     */
    public function getProvisionOs(): ?string
    {
        return $this->provisionOs;
    }

    /**
     * Sets Provision Os.
     *
     * @maps provision_os
     */
    public function setProvisionOs(?string $provisionOs): void
    {
        $this->provisionOs = $provisionOs;
    }

    /**
     * Returns Default Storage Class.
     */
    public function getDefaultStorageClass(): ?string
    {
        return $this->defaultStorageClass;
    }

    /**
     * Sets Default Storage Class.
     *
     * @maps default_storage_class
     */
    public function setDefaultStorageClass(?string $defaultStorageClass): void
    {
        $this->defaultStorageClass = $defaultStorageClass;
    }

    /**
     * Returns Storage Class Map.
     */
    public function getStorageClassMap(): ?StorageClassMap
    {
        return $this->storageClassMap;
    }

    /**
     * Sets Storage Class Map.
     *
     * @maps storage_class_map
     */
    public function setStorageClassMap(?StorageClassMap $storageClassMap): void
    {
        $this->storageClassMap = $storageClassMap;
    }

    /**
     * Returns Cni Provider.
     */
    public function getCniProvider(): ?string
    {
        return $this->cniProvider;
    }

    /**
     * Sets Cni Provider.
     *
     * @maps cni_provider
     */
    public function setCniProvider(?string $cniProvider): void
    {
        $this->cniProvider = $cniProvider;
    }

    /**
     * Returns Provision K8 S.
     */
    public function getProvisionK8s(): ?string
    {
        return $this->provisionK8s;
    }

    /**
     * Sets Provision K8 S.
     *
     * @maps provision_k8s
     */
    public function setProvisionK8s(?string $provisionK8s): void
    {
        $this->provisionK8s = $provisionK8s;
    }

    /**
     * Returns Etcd Version.
     */
    public function getEtcdVersion(): ?string
    {
        return $this->etcdVersion;
    }

    /**
     * Sets Etcd Version.
     *
     * @maps etcd_version
     */
    public function setEtcdVersion(?string $etcdVersion): void
    {
        $this->etcdVersion = $etcdVersion;
    }

    /**
     * Returns Consul Version.
     */
    public function getConsulVersion(): ?string
    {
        return $this->consulVersion;
    }

    /**
     * Sets Consul Version.
     *
     * @maps consul_version
     */
    public function setConsulVersion(?string $consulVersion): void
    {
        $this->consulVersion = $consulVersion;
    }

    /**
     * Returns Cluster Blueprint Version.
     */
    public function getClusterBlueprintVersion(): ?string
    {
        return $this->clusterBlueprintVersion;
    }

    /**
     * Sets Cluster Blueprint Version.
     *
     * @maps cluster_blueprint_version
     */
    public function setClusterBlueprintVersion(?string $clusterBlueprintVersion): void
    {
        $this->clusterBlueprintVersion = $clusterBlueprintVersion;
    }

    /**
     * Returns Upgrade Protection.
     */
    public function getUpgradeProtection(): ?bool
    {
        return $this->upgradeProtection;
    }

    /**
     * Sets Upgrade Protection.
     *
     * @maps upgrade_protection
     */
    public function setUpgradeProtection(?bool $upgradeProtection): void
    {
        $this->upgradeProtection = $upgradeProtection;
    }

    /**
     * Returns Provision.
     */
    public function getProvision(): ?ClusterInfraProvision
    {
        return $this->provision;
    }

    /**
     * Sets Provision.
     *
     * @maps provision
     */
    public function setProvision(?ClusterInfraProvision $provision): void
    {
        $this->provision = $provision;
    }

    /**
     * Returns Metro.
     */
    public function getMetro(): ?Metro
    {
        return $this->metro;
    }

    /**
     * Sets Metro.
     *
     * @maps Metro
     */
    public function setMetro(?Metro $metro): void
    {
        $this->metro = $metro;
    }

    /**
     * Returns Nodes.
     *
     * @return Node[]|null
     */
    public function getNodes(): ?array
    {
        return $this->nodes;
    }

    /**
     * Sets Nodes.
     *
     * @maps nodes
     *
     * @param Node[]|null $nodes
     */
    public function setNodes(?array $nodes): void
    {
        $this->nodes = $nodes;
    }

    /**
     * Returns Cluster Provider Params.
     */
    public function getClusterProviderParams(): ?ClusterProviderParams
    {
        return $this->clusterProviderParams;
    }

    /**
     * Sets Cluster Provider Params.
     *
     * @maps cluster_provider_params
     */
    public function setClusterProviderParams(?ClusterProviderParams $clusterProviderParams): void
    {
        $this->clusterProviderParams = $clusterProviderParams;
    }

    /**
     * Returns Nodegroups.
     *
     * @return NodeGroupItem[]|null
     */
    public function getNodegroups(): ?array
    {
        return $this->nodegroups;
    }

    /**
     * Sets Nodegroups.
     *
     * @maps nodegroups
     *
     * @param NodeGroupItem[]|null $nodegroups
     */
    public function setNodegroups(?array $nodegroups): void
    {
        $this->nodegroups = $nodegroups;
    }

    /**
     * Returns Cluster Version Info.
     */
    public function getClusterVersionInfo(): ?ClusterVersionInfo
    {
        return $this->clusterVersionInfo;
    }

    /**
     * Sets Cluster Version Info.
     *
     * @maps cluster_version_info
     */
    public function setClusterVersionInfo(?ClusterVersionInfo $clusterVersionInfo): void
    {
        $this->clusterVersionInfo = $clusterVersionInfo;
    }

    /**
     * Returns Projects.
     *
     * @return ProjectItem[]|null
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }

    /**
     * Sets Projects.
     *
     * @maps projects
     *
     * @param ProjectItem[]|null $projects
     */
    public function setProjects(?array $projects): void
    {
        $this->projects = $projects;
    }

    /**
     * Returns Cluster.
     */
    public function getCluster(): ?Cluster
    {
        return $this->cluster;
    }

    /**
     * Sets Cluster.
     *
     * @maps cluster
     */
    public function setCluster(?Cluster $cluster): void
    {
        $this->cluster = $cluster;
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
            $json['name']                      = $this->name;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                = $this->createdAt;
        }
        if (isset($this->modifiedAt)) {
            $json['modified_at']               = $this->modifiedAt;
        }
        if (isset($this->organizationId)) {
            $json['organization_id']           = $this->organizationId;
        }
        if (isset($this->partnerId)) {
            $json['partner_id']                = $this->partnerId;
        }
        if (isset($this->country)) {
            $json['country']                   = $this->country;
        }
        if (isset($this->city)) {
            $json['city']                      = $this->city;
        }
        if (isset($this->latitude)) {
            $json['latitude']                  = $this->latitude;
        }
        if (isset($this->longitude)) {
            $json['longitude']                 = $this->longitude;
        }
        if (isset($this->clusterId)) {
            $json['cluster_id']                = $this->clusterId;
        }
        if (isset($this->status)) {
            $json['status']                    = $this->status;
        }
        if (isset($this->cert)) {
            $json['cert']                      = $this->cert;
        }
        if (isset($this->passphrase)) {
            $json['passphrase']                = $this->passphrase;
        }
        if (isset($this->id)) {
            $json['id']                        = $this->id;
        }
        if (isset($this->cname)) {
            $json['cname']                     = $this->cname;
        }
        if (isset($this->arecord)) {
            $json['arecord']                   = $this->arecord;
        }
        if (isset($this->baseRatio)) {
            $json['base_ratio']                = $this->baseRatio;
        }
        if (isset($this->haEnabled)) {
            $json['ha_enabled']                = $this->haEnabled;
        }
        if (isset($this->displayName)) {
            $json['display_name']              = $this->displayName;
        }
        if (isset($this->upgradeStatus)) {
            $json['upgradeStatus']             = $this->upgradeStatus;
        }
        if (isset($this->providerId)) {
            $json['provider_id']               = $this->providerId;
        }
        if (isset($this->autoCreate)) {
            $json['auto_create']               = $this->autoCreate;
        }
        if (isset($this->autoApproveNodes)) {
            $json['auto_approve_nodes']        = $this->autoApproveNodes;
        }
        if (isset($this->provisionId)) {
            $json['provision_id']              = $this->provisionId;
        }
        if (isset($this->isMonitorEnabled)) {
            $json['is_monitor_enabled']        = $this->isMonitorEnabled;
        }
        if (isset($this->health)) {
            $json['health']                    = $this->health;
        }
        if (isset($this->healthStatusModifiedAt)) {
            $json['health_status_modified_at'] = $this->healthStatusModifiedAt;
        }
        if (isset($this->manufacturer)) {
            $json['manufacturer']              = $this->manufacturer;
        }
        if (isset($this->clusterType)) {
            $json['cluster_type']              = $this->clusterType;
        }
        if (isset($this->clusterBlueprint)) {
            $json['cluster_blueprint']         = $this->clusterBlueprint;
        }
        if (isset($this->gimageUsed)) {
            $json['gimage_used']               = $this->gimageUsed;
        }
        if (isset($this->reason)) {
            $json['reason']                    = $this->reason;
        }
        if (isset($this->isMasterDedicated)) {
            $json['is_master_dedicated']       = $this->isMasterDedicated;
        }
        if (isset($this->projectId)) {
            $json['project_id']                = $this->projectId;
        }
        if (isset($this->provisionOs)) {
            $json['provision_os']              = $this->provisionOs;
        }
        if (isset($this->defaultStorageClass)) {
            $json['default_storage_class']     = $this->defaultStorageClass;
        }
        if (isset($this->storageClassMap)) {
            $json['storage_class_map']         = $this->storageClassMap;
        }
        if (isset($this->cniProvider)) {
            $json['cni_provider']              = $this->cniProvider;
        }
        if (isset($this->provisionK8s)) {
            $json['provision_k8s']             = $this->provisionK8s;
        }
        if (isset($this->etcdVersion)) {
            $json['etcd_version']              = $this->etcdVersion;
        }
        if (isset($this->consulVersion)) {
            $json['consul_version']            = $this->consulVersion;
        }
        if (isset($this->clusterBlueprintVersion)) {
            $json['cluster_blueprint_version'] = $this->clusterBlueprintVersion;
        }
        if (isset($this->upgradeProtection)) {
            $json['upgrade_protection']        = $this->upgradeProtection;
        }
        if (isset($this->provision)) {
            $json['provision']                 = $this->provision;
        }
        if (isset($this->metro)) {
            $json['Metro']                     = $this->metro;
        }
        if (isset($this->nodes)) {
            $json['nodes']                     = $this->nodes;
        }
        if (isset($this->clusterProviderParams)) {
            $json['cluster_provider_params']   = $this->clusterProviderParams;
        }
        if (isset($this->nodegroups)) {
            $json['nodegroups']                = $this->nodegroups;
        }
        if (isset($this->clusterVersionInfo)) {
            $json['cluster_version_info']      = $this->clusterVersionInfo;
        }
        if (isset($this->projects)) {
            $json['projects']                  = $this->projects;
        }
        if (isset($this->cluster)) {
            $json['cluster']                   = $this->cluster;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
