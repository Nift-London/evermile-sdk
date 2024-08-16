# # QuoteMultiRoutePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origins** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequestOriginsInner[]**](QuoteMultiRoutePostRequestOriginsInner.md) | A list of locations details from which the items should be picked up. |
**destinations** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequestOriginsInner[]**](QuoteMultiRoutePostRequestOriginsInner.md) | A list of locations details to which the items should be delivered. |
**parcels** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInner[]**](QuotePostRequestParcelsInner.md) | The list of parcels that should be picked up and dropped off in this delivery. |
**in_stock** | **bool** | Are all the items in stock (may affect the proposals) | [default to true]
**date_range** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInnerDeliverySlot**](QuotePostRequestDestinationLocationsInnerDeliverySlot.md) |  |
**params** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequestParams**](QuoteMultiRoutePostRequestParams.md) |  | [optional]
**additional_properties** | **array<string,mixed>** | Additional properties for the order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
