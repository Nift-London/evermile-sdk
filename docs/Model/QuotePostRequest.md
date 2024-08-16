# # QuotePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_info** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfo**](QuotePostRequestPickupInfo.md) |  | [optional]
**pickup_window** | [**\OpenAPI\Client\Model\QuotePostRequestPickupWindow**](QuotePostRequestPickupWindow.md) |  | [optional]
**destination_locations** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInner[]**](QuotePostRequestDestinationLocationsInner.md) | A list of locations to which the items can be delivered. Either *destinationLocations* or *destinationLocationIds* must be provided. | [optional]
**destination_locations_ids** | **string[]** | A list of location ids to which the items can be delivered. Either *destinationLocations* or *destinationLocationIds* must be provided. | [optional]
**parcels** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInner[]**](QuotePostRequestParcelsInner.md) | The list of parcels to pick up in this delivery from any **single** source&lt;br&gt;(must all be available at all of the pickup locations in *pickupLocations*) |
**in_stock** | **bool** | Are all the items in stock (may affect the proposals) | [default to true]
**handling** | **string[]** | Handling instructions for a parcel | [optional]
**proof_of_delivery_requirement** | **string[]** | Proof of delivery requirements for a parcel | [optional]
**instructions** | **string** | Additional handling instructions for the packages | [optional]
**original_order_id** | **string** | The id of the order that this quote is based on, usually for cases when editing an existing order | [optional]
**exclude_carriers** | **string[]** | An array of carriers names to exclude from the proposals results | [optional]
**excluded_vehicle_types** | **string[]** | Which vehicle types to exclude from the request. **note** excluding vehicle types may result in higher prices. | [optional]
**proposal_types** | **string[]** |  | [optional]
**destination_location_ids_with_contraints** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOfPickupLocationsInner[]**](QuotePostRequestPickupInfoOneOfPickupLocationsInner.md) |  | [optional]
**allow_proposals_outside_store_hours** | **bool** | Whether to allow proposals outside store hours | [optional]
**promotion_id** | **string** | The id of the promotion to apply to this quote | [optional]
**additional_properties** | **array<string,mixed>** | Additional properties for the order | [optional]
**pickup_locations** | **string[]** | A list of location ids from which the items can be picked up. **Deprecated** use *pickupInfo* instead. | [optional]
**pickup_locations_data** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1Inner[]**](QuotePostRequestPickupInfoOneOf1Inner.md) | A list of locations from which the items can be picked up. **Deprecated** use *pickupInfo* instead. | [optional]
**pickup_location_ids_with_constraints** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOfPickupLocationsInner[]**](QuotePostRequestPickupInfoOneOfPickupLocationsInner.md) | A list of location ids from which the items can be picked up, with a pickup constraint. **Deprecated** use *pickupInfo* instead. | [optional]
**timeout_seconds** | **float** | The timeout in seconds for the quote request | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
