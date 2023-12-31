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
 * Type of the file being uploaded.
 */
class CategoryTypeEnum
{
    public const GENERAL_VALIDATION = 'GENERAL_VALIDATION';

    public const OBSERVABILITY_TEMPLATE = 'OBSERVABILITY_TEMPLATE';

    public const SWAGGER_SPEC = 'SWAGGER_SPEC';

    public const DEPENDENT_SERVICE_VALUES = 'DEPENDENT_SERVICE_VALUES';

    public const WORKLOAD_TGZ = 'WORKLOAD_TGZ';

    public const WORKLOAD_VALUE = 'WORKLOAD_VALUE';

    public const WORKLOAD_YAML = 'WORKLOAD_YAML';

    public const WORKLOAD_TERRAFORM_ZIP = 'WORKLOAD_TERRAFORM_ZIP';

    public const WORKLOAD_TERRAFORM_TF = 'WORKLOAD_TERRAFORM_TF';

    public const WORKLOAD_TERRAFORM_TFVAR = 'WORKLOAD_TERRAFORM_TFVAR';

    public const WORKFLOW_SOURCE_FILE = 'WORKFLOW_SOURCE_FILE';

    public const WORKFLOW_INPUT_SCHEMA = 'WORKFLOW_INPUT_SCHEMA';

    public const WORKFLOW_TGZ = 'WORKFLOW_TGZ';

    private const _ALL_VALUES = [
        self::GENERAL_VALIDATION,
        self::OBSERVABILITY_TEMPLATE,
        self::SWAGGER_SPEC,
        self::DEPENDENT_SERVICE_VALUES,
        self::WORKLOAD_TGZ,
        self::WORKLOAD_VALUE,
        self::WORKLOAD_YAML,
        self::WORKLOAD_TERRAFORM_ZIP,
        self::WORKLOAD_TERRAFORM_TF,
        self::WORKLOAD_TERRAFORM_TFVAR,
        self::WORKFLOW_SOURCE_FILE,
        self::WORKFLOW_INPUT_SCHEMA,
        self::WORKFLOW_TGZ
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
        throw new Exception("$value is invalid for CategoryTypeEnum.");
    }
}
