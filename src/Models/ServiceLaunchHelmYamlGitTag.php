<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ServiceLaunchHelmYamlGitTag implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $tagName;

    /**
     * @var string[]|null
     */
    private $valuesYamlPaths;

    /**
     * Returns Tag Name.
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * Sets Tag Name.
     *
     * @maps tagName
     */
    public function setTagName(?string $tagName): void
    {
        $this->tagName = $tagName;
    }

    /**
     * Returns Values Yaml Paths.
     *
     * @return string[]|null
     */
    public function getValuesYamlPaths(): ?array
    {
        return $this->valuesYamlPaths;
    }

    /**
     * Sets Values Yaml Paths.
     *
     * @maps valuesYamlPaths
     *
     * @param string[]|null $valuesYamlPaths
     */
    public function setValuesYamlPaths(?array $valuesYamlPaths): void
    {
        $this->valuesYamlPaths = $valuesYamlPaths;
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
        if (isset($this->tagName)) {
            $json['tagName']         = $this->tagName;
        }
        if (isset($this->valuesYamlPaths)) {
            $json['valuesYamlPaths'] = $this->valuesYamlPaths;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
