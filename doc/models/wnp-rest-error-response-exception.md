
# WNP Rest Error Response Exception

## Structure

`WNPRestErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3,3}$` | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorMessage` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9 ]{3,64}$` | getErrorMessage(): ?string | setErrorMessage(?string errorMessage): void |

## Example (as JSON)

```json
{
  "errorCode": "400",
  "errorMessage": "A brief description of the error code"
}
```

