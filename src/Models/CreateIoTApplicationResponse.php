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
 * A success response includes an array of all matching events. Each event includes the full event
 * resource definition.
 */
class CreateIoTApplicationResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $appName;

    /**
     * @var string|null
     */
    private $sharedSecret;

    /**
     * @var string|null
     */
    private $url;

    /**
     * Returns App Name.
     * An application will be created under the user's Azure subscription with this name and of type IOT
     * central.
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * Sets App Name.
     * An application will be created under the user's Azure subscription with this name and of type IOT
     * central.
     *
     * @maps appName
     */
    public function setAppName(?string $appName): void
    {
        $this->appName = $appName;
    }

    /**
     * Returns Shared Secret.
     * Part of the user credentials (from Azure) the user needs to use for calling further TS Core APIs for
     * setting up Azure cloud connector.
     */
    public function getSharedSecret(): ?string
    {
        return $this->sharedSecret;
    }

    /**
     * Sets Shared Secret.
     * Part of the user credentials (from Azure) the user needs to use for calling further TS Core APIs for
     * setting up Azure cloud connector.
     *
     * @maps sharedSecret
     */
    public function setSharedSecret(?string $sharedSecret): void
    {
        $this->sharedSecret = $sharedSecret;
    }

    /**
     * Returns Url.
     * An IOT central endpoint the user can use to see the data that is being streamed.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * An IOT central endpoint the user can use to see the data that is being streamed.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
        if (isset($this->appName)) {
            $json['appName']      = $this->appName;
        }
        if (isset($this->sharedSecret)) {
            $json['sharedSecret'] = $this->sharedSecret;
        }
        if (isset($this->url)) {
            $json['url']          = $this->url;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
