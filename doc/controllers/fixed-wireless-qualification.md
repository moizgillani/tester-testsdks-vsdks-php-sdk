# Fixed Wireless Qualification

```php
$fixedWirelessQualificationController = $client->getFixedWirelessQualificationController();
```

## Class Name

`FixedWirelessQualificationController`


# Domestic 4 G and 5G Fixed Wireless Qualification

Use this query for Fixed Wireless Qualification of an address. Network types include: LTE, C-BAND and MMWAVE.

```php
function domestic4GAnd5gFixedWirelessQualification(GetWirelessCoverageRequestFWA $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GetWirelessCoverageRequestFWA`](../../doc/models/get-wireless-coverage-request-fwa.md) | Body, Required | Request for network coverage details. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`WNPRequestResponse`](../../doc/models/wnp-request-response.md).

## Example Usage

```php
$body = GetWirelessCoverageRequestFWABuilder::init(
    '0000123456-00001',
    'FWA',
    'ADDRESS',
    LocationsBuilder::init()->build(),
    [
        NetworkTypeBuilder::init()
            ->networkType('LTE')
            ->build()
    ]
)->build();

$apiResponse = $fixedWirelessQualificationController->domestic4GAnd5gFixedWirelessQualification($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`WNPRestErrorResponseException`](../../doc/models/wnp-rest-error-response-exception.md) |

