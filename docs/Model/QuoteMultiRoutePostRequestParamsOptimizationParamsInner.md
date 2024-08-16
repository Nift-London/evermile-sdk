# # QuoteMultiRoutePostRequestParamsOptimizationParamsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier** | **string** |  |
**number_of_drivers** | **int** | The number of drivers available for the carrier / own fleet | [optional]
**max_number_of_stops** | **int** | The maximum number of stops per driver | [optional]
**max_number_of_parcels** | **int** | The maximum number of parcels per driver | [optional]
**max_route_length_minutes** | **int** | The maximum route length in minutes | [optional]
**override_pickup_start_hour** | **array<string,string>** |  | [optional]
**pickup_window_length_minutes** | **int** | The length of the pickup window in minutes | [optional]
**drivers_schedule** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequestParamsOptimizationParamsInnerDriversScheduleInner[]**](QuoteMultiRoutePostRequestParamsOptimizationParamsInnerDriversScheduleInner.md) |  | [optional]
**disabled_slot_groups** | **string[]** | A list of slot groups to disable | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
