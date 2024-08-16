# # QuotePost200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_proposals** | [**\OpenAPI\Client\Model\QuotePost200ResponseDateProposalsInner[]**](QuotePost200ResponseDateProposalsInner.md) | An array (map) of proposals by date |
**express_proposals** | [**\OpenAPI\Client\Model\QuotePost200ResponseDateProposalsInnerProposalsInner[]**](QuotePost200ResponseDateProposalsInnerProposalsInner.md) | An array (map) of proposals by date |
**valid_until** | **\DateTime** | Proposals are valid until this time in ISO8601 format |
**delivery_type** | **string** |  | [optional]
**delivery_area** | **string** |  | [optional]
**current_price** | [**\OpenAPI\Client\Model\QuotePost200ResponseCurrentPrice**](QuotePost200ResponseCurrentPrice.md) |  | [optional]
**cancellation_fee** | [**\OpenAPI\Client\Model\QuotePost200ResponseCancellationFee**](QuotePost200ResponseCancellationFee.md) |  | [optional]
**cancellation_token** | **string** | A token that should be returned in order to confirm the cancellation of the original order. To confirm the cancellation, pass this in an X-EVERMILE-TOKEN header to createOrder. | [optional]
**override_display_hours** | [**\OpenAPI\Client\Model\QuotePost200ResponseOverrideDisplayHours**](QuotePost200ResponseOverrideDisplayHours.md) |  | [optional]
**booking_fee_cents** | **int** | An override for the booking fee in cents | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
