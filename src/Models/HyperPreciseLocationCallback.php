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
 * Callback registration request.
 */
class HyperPreciseLocationCallback implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @param string $name
     * @param string $url
     */
    public function __construct(string $name, string $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Returns Name.
     * The name of the callback service that you want to subscribe to.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the callback service that you want to subscribe to.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Url.
     * The address on your server where you have enabled a listening service for the specific type of
     * callback messages. Specify a URL that is reachable from the Verizon data centers. If your service is
     * running on HTTPS, you should use a one-way authentication certificate with a white-listed IP address.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The address on your server where you have enabled a listening service for the specific type of
     * callback messages. Specify a URL that is reachable from the Verizon data centers. If your service is
     * running on HTTPS, you should use a one-way authentication certificate with a white-listed IP address.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
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
        $json['name'] = $this->name;
        $json['url']  = $this->url;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
