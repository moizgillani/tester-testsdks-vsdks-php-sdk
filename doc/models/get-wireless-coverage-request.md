
# Get Wireless Coverage Request

## Structure

`GetWirelessCoverageRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9-]{3,32}$` | getAccountName(): string | setAccountName(string accountName): void |
| `requestType` | `string` | Required | **Constraints**: *Minimum Length*: `2`, *Maximum Length*: `12`, *Pattern*: `^[A-Za-z]{2,12}$` | getRequestType(): string | setRequestType(string requestType): void |
| `locationType` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `12`, *Pattern*: `^[A-Za-z]{3,12}$` | getLocationType(): string | setLocationType(string locationType): void |
| `locations` | [`Locationscoord`](../../doc/models/locationscoord.md) | Required | - | getLocations(): Locationscoord | setLocations(Locationscoord locations): void |
| `networkTypesList` | [`NetworkType[]`](../../doc/models/network-type.md) | Required | **Constraints**: *Maximum Items*: `100` | getNetworkTypesList(): array | setNetworkTypesList(array networkTypesList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "requestType": "NW",
  "locationType": "LONGLAT",
  "locations": {
    "coordinatesList": [
      {
        "latitude": "-33.84819",
        "longitude": "151.22049"
      }
    ]
  },
  "networkTypesList": [
    {
      "networkType": "LTE"
    }
  ]
}
```

