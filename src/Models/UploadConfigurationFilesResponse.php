<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

class UploadConfigurationFilesResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $fileName;

    /**
     * @var string|null
     */
    private $fileVersion;

    /**
     * @var \DateTime|null
     */
    private $launchDate;

    /**
     * @var string|null
     */
    private $releaseNote;

    /**
     * @var string|null
     */
    private $model;

    /**
     * @var string|null
     */
    private $make;

    /**
     * @var string|null
     */
    private $distributionType;

    /**
     * @var string|null
     */
    private $devicePlatformId;

    /**
     * @var string|null
     */
    private $localTargetPath;

    /**
     * Returns File Name.
     * The name of the file you are upgrading to.
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * Sets File Name.
     * The name of the file you are upgrading to.
     *
     * @maps fileName
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * Returns File Version.
     * The version of the file you are upgrading to.
     */
    public function getFileVersion(): ?string
    {
        return $this->fileVersion;
    }

    /**
     * Sets File Version.
     * The version of the file you are upgrading to.
     *
     * @maps fileVersion
     */
    public function setFileVersion(?string $fileVersion): void
    {
        $this->fileVersion = $fileVersion;
    }

    /**
     * Returns Launch Date.
     * Software launch date.
     */
    public function getLaunchDate(): ?\DateTime
    {
        return $this->launchDate;
    }

    /**
     * Sets Launch Date.
     * Software launch date.
     *
     * @maps launchDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setLaunchDate(?\DateTime $launchDate): void
    {
        $this->launchDate = $launchDate;
    }

    /**
     * Returns Release Note.
     * Software release note.
     */
    public function getReleaseNote(): ?string
    {
        return $this->releaseNote;
    }

    /**
     * Sets Release Note.
     * Software release note.
     *
     * @maps releaseNote
     */
    public function setReleaseNote(?string $releaseNote): void
    {
        $this->releaseNote = $releaseNote;
    }

    /**
     * Returns Model.
     * Software applicable device model.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * Sets Model.
     * Software applicable device model.
     *
     * @maps model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * Returns Make.
     * Software applicable device make.
     */
    public function getMake(): ?string
    {
        return $this->make;
    }

    /**
     * Sets Make.
     * Software applicable device make.
     *
     * @maps make
     */
    public function setMake(?string $make): void
    {
        $this->make = $make;
    }

    /**
     * Returns Distribution Type.
     * LWM2M, OMD-DM or HTTP.
     */
    public function getDistributionType(): ?string
    {
        return $this->distributionType;
    }

    /**
     * Sets Distribution Type.
     * LWM2M, OMD-DM or HTTP.
     *
     * @maps distributionType
     */
    public function setDistributionType(?string $distributionType): void
    {
        $this->distributionType = $distributionType;
    }

    /**
     * Returns Device Platform Id.
     * The platform (Android, iOS, etc.) that the software can be applied to.
     */
    public function getDevicePlatformId(): ?string
    {
        return $this->devicePlatformId;
    }

    /**
     * Sets Device Platform Id.
     * The platform (Android, iOS, etc.) that the software can be applied to.
     *
     * @maps devicePlatformId
     */
    public function setDevicePlatformId(?string $devicePlatformId): void
    {
        $this->devicePlatformId = $devicePlatformId;
    }

    /**
     * Returns Local Target Path.
     * Local target path on the device.
     */
    public function getLocalTargetPath(): ?string
    {
        return $this->localTargetPath;
    }

    /**
     * Sets Local Target Path.
     * Local target path on the device.
     *
     * @maps localTargetPath
     */
    public function setLocalTargetPath(?string $localTargetPath): void
    {
        $this->localTargetPath = $localTargetPath;
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
        if (isset($this->fileName)) {
            $json['fileName']         = $this->fileName;
        }
        if (isset($this->fileVersion)) {
            $json['fileVersion']      = $this->fileVersion;
        }
        if (isset($this->launchDate)) {
            $json['launchDate']       = DateTimeHelper::toSimpleDate($this->launchDate);
        }
        if (isset($this->releaseNote)) {
            $json['releaseNote']      = $this->releaseNote;
        }
        if (isset($this->model)) {
            $json['model']            = $this->model;
        }
        if (isset($this->make)) {
            $json['make']             = $this->make;
        }
        if (isset($this->distributionType)) {
            $json['distributionType'] = $this->distributionType;
        }
        if (isset($this->devicePlatformId)) {
            $json['devicePlatformId'] = $this->devicePlatformId;
        }
        if (isset($this->localTargetPath)) {
            $json['localTargetPath']  = $this->localTargetPath;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
