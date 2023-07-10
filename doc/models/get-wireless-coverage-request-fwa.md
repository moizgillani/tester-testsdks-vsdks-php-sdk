
# Get Wireless Coverage Request FWA

## Structure

`GetWirelessCoverageRequestFWA`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9-]{3,32}$` | getAccountName(): string | setAccountName(string accountName): void |
| `requestType` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `12`, *Pattern*: `^[A-Za-z]{3,12}$` | getRequestType(): string | setRequestType(string requestType): void |
| `locationType` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `12`, *Pattern*: `^[A-Za-z]{3,12}$` | getLocationType(): string | setLocationType(string locationType): void |
| `locations` | [`Locations`](../../doc/models/locations.md) | Required | - | getLocations(): Locations | setLocations(Locations locations): void |
| `networkTypesList` | [`NetworkType[]`](../../doc/models/network-type.md) | Required | **Constraints**: *Maximum Items*: `100` | getNetworkTypesList(): array | setNetworkTypesList(array networkTypesList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "requestType": "FWA",
  "locationType": "ADDRESS",
  "locations": {
    "addressList": [
      {
        "addressLine1": "addressLine17",
        "addressLine2": "addressLine25",
        "city": "city5",
        "state": "state1",
        "country": "country9"
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

