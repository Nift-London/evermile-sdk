# # LocationPutRequestLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | An informative name for this location |
**address** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddress**](QuotePostRequestPickupInfoOneOf1InnerAddress.md) |  |
**phone** | **string** | A phone number for this location (relevant when location is used as sender_info) | [optional]
**email** | **string** | An email of the contact person for this location (relevant when location is used as sender_info) | [optional]
**notes** | **string** | Additional notes to describe this location | [optional]
**is_default** | **bool** | True if this is the default location | [optional]
**is_store_pickup_default** | **bool** | True if this is the default store pickup location | [optional]
**id** | **string** | The location&#39;s evermile ID. Used for updating a location (if provided) | [optional]
**store_id** | **string** | A store ID associated with this location | [optional]
**schedule** | [**\OpenAPI\Client\Model\LocationsGet200ResponseLocationsInnerAllOfSchedule**](LocationsGet200ResponseLocationsInnerAllOfSchedule.md) |  | [optional]
**delivery_enabled** | **bool** | Whether this location is enabled for deliveries | [optional]
**store_pickup_enabled** | **bool** | Whether this location is enabled for store pickups | [optional]
**delivery_config** | [**\OpenAPI\Client\Model\LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig**](LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig.md) |  | [optional]
**store_pickup_config** | [**\OpenAPI\Client\Model\LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig**](LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
