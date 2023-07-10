
# Get Device Experience Score History Request

## Structure

`GetDeviceExperienceScoreHistoryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9-]{3,32}$` | getAccountName(): string | setAccountName(string accountName): void |
| `deviceId` | [`DeviceIdentifier`](../../doc/models/device-identifier.md) | Required | - | getDeviceId(): DeviceIdentifier | setDeviceId(DeviceIdentifier deviceId): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "deviceId": {
    "kind": "iccid",
    "id": "01234567899876543210",
    "mdn": "0123456789"
  }
}
```

