# # QuoteMultiRoutePost200ResponseProposalsInnerRoutesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The route ID |
**pickup_tasks** | [**\OpenAPI\Client\Model\QuoteMultiRoutePost200ResponseProposalsInnerRoutesInnerPickupTasksInner[]**](QuoteMultiRoutePost200ResponseProposalsInnerRoutesInnerPickupTasksInner.md) | A list of locations to which the items will be delivered. |
**dropoff_tasks** | [**\OpenAPI\Client\Model\QuoteMultiRoutePost200ResponseProposalsInnerRoutesInnerPickupTasksInner[]**](QuoteMultiRoutePost200ResponseProposalsInnerRoutesInnerPickupTasksInner.md) | A list of locations to which the items will be delivered. |
**delivery_company** | **string** | The company that will perform the delivery (if known) | [optional]
**types** | **string[]** |  | [optional]
**predicted_emission_saving_kg** | **float** |  | [optional]
**vehicle_type** | **string** |  |
**price** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  |
**price_vat** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  |
**external_id** | **string** | The external route ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
