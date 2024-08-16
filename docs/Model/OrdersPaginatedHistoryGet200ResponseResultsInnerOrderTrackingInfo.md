# # OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label_url** | **string** | The URL to download the label (if exists) | [optional]
**carrier_tracking_url** | **string** | The carrier tracking URL for this order (if exists) | [optional]
**carrier_delivery_url** | **string** | The URL to find the delivery in the carrier (if exists) | [optional]
**courier_location** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation**](QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation.md) |  | [optional]
**dropoff_eta** | **\DateTime** | The dropoff ETA in ISO8601 format | [optional]
**pickup_eta** | **\DateTime** | The pickup ETA in ISO8601 format | [optional]
**courier_name** | **string** | The courier full name | [optional]
**courier_phone** | **string** | The courier phone number | [optional]
**dropoff_window_start** | **\DateTime** | The updated dropoff widnow start in ISO8601 format | [optional]
**dropoff_window_end** | **\DateTime** | The updated dropoff window end in ISO8601 format | [optional]
**dropoff_window_type** | **string** |  | [optional]
**pickup_window_start** | **\DateTime** | The updated pickup widnow start in ISO8601 format | [optional]
**pickup_window_end** | **\DateTime** | The updated pickup window end in ISO8601 format | [optional]
**is_courier_assigned** | **bool** | Indicate whether a courier is assigned for this order |
**is_on_way_to_pickup** | **bool** | Indicate whether a courier is on the way to pick up this order | [optional]
**vehicle_type** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
