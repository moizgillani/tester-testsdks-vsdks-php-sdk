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
 * `installationWf` attribute of a service.
 */
class InstallationWf implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $hookType;

    /**
     * @var string|null
     */
    private $uploadType;

    /**
     * @var string|null
     */
    private $repositoryId;

    /**
     * @var Repository|null
     */
    private $repository;

    /**
     * @var string|null
     */
    private $sourceCodeType;

    /**
     * @var string|null
     */
    private $revisionType;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $path;

    /**
     * Returns Hook Type.
     */
    public function getHookType(): ?string
    {
        return $this->hookType;
    }

    /**
     * Sets Hook Type.
     *
     * @maps hookType
     * @factory \VerizonLib\Models\HookTypeEnum::checkValue
     */
    public function setHookType(?string $hookType): void
    {
        $this->hookType = $hookType;
    }

    /**
     * Returns Upload Type.
     * Allowed values are: GIT files (PULL_FROM_REPO), MANUAL_UPLOAD.
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * Sets Upload Type.
     * Allowed values are: GIT files (PULL_FROM_REPO), MANUAL_UPLOAD.
     *
     * @maps uploadType
     * @factory \VerizonLib\Models\UploadTypeEnum::checkValue
     */
    public function setUploadType(?string $uploadType): void
    {
        $this->uploadType = $uploadType;
    }

    /**
     * Returns Repository Id.
     * Repository ID of an existing repository.
     */
    public function getRepositoryId(): ?string
    {
        return $this->repositoryId;
    }

    /**
     * Sets Repository Id.
     * Repository ID of an existing repository.
     *
     * @maps repositoryId
     */
    public function setRepositoryId(?string $repositoryId): void
    {
        $this->repositoryId = $repositoryId;
    }

    /**
     * Returns Repository.
     * Users can create a repository to maintain service artifacts. Repository would be either a Git or
     * HELM repository.
     */
    public function getRepository(): ?Repository
    {
        return $this->repository;
    }

    /**
     * Sets Repository.
     * Users can create a repository to maintain service artifacts. Repository would be either a Git or
     * HELM repository.
     *
     * @maps repository
     */
    public function setRepository(?Repository $repository): void
    {
        $this->repository = $repository;
    }

    /**
     * Returns Source Code Type.
     * Source code type can be JAVA or GO.
     */
    public function getSourceCodeType(): ?string
    {
        return $this->sourceCodeType;
    }

    /**
     * Sets Source Code Type.
     * Source code type can be JAVA or GO.
     *
     * @maps sourceCodeType
     * @factory \VerizonLib\Models\SourceCodeTypeEnum::checkValue
     */
    public function setSourceCodeType(?string $sourceCodeType): void
    {
        $this->sourceCodeType = $sourceCodeType;
    }

    /**
     * Returns Revision Type.
     * Revision type can be a BRANCH or TAG.
     */
    public function getRevisionType(): ?string
    {
        return $this->revisionType;
    }

    /**
     * Sets Revision Type.
     * Revision type can be a BRANCH or TAG.
     *
     * @maps revisionType
     * @factory \VerizonLib\Models\WorkloadRevisionTypeEnum::checkValue
     */
    public function setRevisionType(?string $revisionType): void
    {
        $this->revisionType = $revisionType;
    }

    /**
     * Returns Name.
     * Branch or tag name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Branch or tag name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Path.
     * The workflow path.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Sets Path.
     * The workflow path.
     *
     * @maps path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
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
        if (isset($this->hookType)) {
            $json['hookType']       = HookTypeEnum::checkValue($this->hookType);
        }
        if (isset($this->uploadType)) {
            $json['uploadType']     = UploadTypeEnum::checkValue($this->uploadType);
        }
        if (isset($this->repositoryId)) {
            $json['repositoryId']   = $this->repositoryId;
        }
        if (isset($this->repository)) {
            $json['repository']     = $this->repository;
        }
        if (isset($this->sourceCodeType)) {
            $json['sourceCodeType'] = SourceCodeTypeEnum::checkValue($this->sourceCodeType);
        }
        if (isset($this->revisionType)) {
            $json['revisionType']   = WorkloadRevisionTypeEnum::checkValue($this->revisionType);
        }
        if (isset($this->name)) {
            $json['name']           = $this->name;
        }
        if (isset($this->path)) {
            $json['path']           = $this->path;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
