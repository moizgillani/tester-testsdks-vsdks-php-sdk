<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Supported Kubernetes distribution for the selected cloud provider.
 */
class CloudDestributionEnum
{
    public const AMAZONEKS = 'AmazonEKS';

    public const ENUM_UPSTREAM_KUBERNETES = 'Upstream Kubernetes';

    public const ENUM_AZURE_AKS = 'Azure AKS';

    public const ENUM_AMAZON_EKS_DISTRO = 'Amazon EKS distro';

    public const ENUM_GCP_GKE = 'GCP GKE';

    private const _ALL_VALUES = [
        self::AMAZONEKS,
        self::ENUM_UPSTREAM_KUBERNETES,
        self::ENUM_AZURE_AKS,
        self::ENUM_AMAZON_EKS_DISTRO,
        self::ENUM_GCP_GKE
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for CloudDestributionEnum.");
    }
}
