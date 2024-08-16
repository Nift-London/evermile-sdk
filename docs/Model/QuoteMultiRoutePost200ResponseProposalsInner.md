# # QuoteMultiRoutePost200ResponseProposalsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The proposal ID |
**price** | [**\OpenAPI\Client\Model\QuoteMultiRoutePost200ResponseProposalsInnerPrice**](QuoteMultiRoutePost200ResponseProposalsInnerPrice.md) |  |
**price_vat** | [**\OpenAPI\Client\Model\QuoteMultiRoutePost200ResponseProposalsInnerPriceVat**](QuoteMultiRoutePost200ResponseProposalsInnerPriceVat.md) |  |
**price_per_drop** | [**\OpenAPI\Client\Model\QuoteMultiRoutePost200ResponseProposalsInnerPricePerDrop**](QuoteMultiRoutePost200ResponseProposalsInnerPricePerDrop.md) |  |
**credit_back** | **int** | The amount of credits this proposal awards, in credit cents | [optional]
**predicted_emission_saving_kg** | **float** | The total predicted emission saving for this proposal | [optional]
**routes** | [**\OpenAPI\Client\Model\QuoteMultiRoutePost200ResponseProposalsInnerRoutesInner[]**](QuoteMultiRoutePost200ResponseProposalsInnerRoutesInner.md) | An array of routes for this proposal |
**optimized_tasks_order** | **bool** | Whether the order of the tasks is optimized | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
