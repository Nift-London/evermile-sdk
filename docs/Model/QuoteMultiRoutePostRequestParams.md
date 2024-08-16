# # QuoteMultiRoutePostRequestParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**proposal_types** | **string[]** |  | [optional]
**exclude_carriers** | **string[]** | An array of carriers names to exclude from the proposals results | [optional]
**excluded_vehicle_types** | **string[]** | Which vehicle types to exclude from the request. **note** excluding vehicle types may result in higher prices. | [optional]
**earliest_pickup_start_time** | **\DateTime** | The earliest pickup start time in ISO8601 format. **note** Set either a pickup or a dropoff window. Not both. | [optional]
**latest_pickup_end_time** | **\DateTime** | The latest pickup end time in ISO8601 format. **note** Set either a pickup or a dropoff window. Not both. | [optional]
**earliest_dropoff_start_time** | **\DateTime** | The earliest dropoff start time in ISO8601 format. **note** Set either a pickup or a dropoff window. Not both. | [optional]
**latest_dropoff_end_time** | **\DateTime** | The latest dropoff end time in ISO8601 format. **note** Set either a pickup or a dropoff window. Not both. | [optional]
**optimize_tasks_order** | **bool** | Whether to optimize the order of the tasks. **note** Not optimizing the tasks order (setting to false) may result in higher prices. | [optional] [default to true]
**optimization_params** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequestParamsOptimizationParamsInner[]**](QuoteMultiRoutePostRequestParamsOptimizationParamsInner.md) | List of optimization parameters per carrier | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
