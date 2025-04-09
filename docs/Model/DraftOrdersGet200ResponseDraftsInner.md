# # DraftOrdersGet200ResponseDraftsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The draft&#39;s evermile ID. | [optional]
**status** | **string** |  |
**external_order_id** | **string** | An external order ID to attach to this order | [default to '']
**store_id** | **string** | A store ID associated with this location | [optional]
**pickup_contact_details** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerPickupContactDetails**](DraftOrdersGet200ResponseDraftsInnerPickupContactDetails.md) |  | [optional]
**pickup_location_id** | **string** | The id of an existing sender location with the sender contact details | [optional]
**dropoff_contact_details** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails**](DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails.md) |  | [optional]
**sender_contact_details** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails**](DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails.md) |  | [optional]
**extended_liability_coverage_cents** | **int** | The amount of extended liability coverage required for this order | [optional]
**pickup_locations_ids** | **string[]** | A list of location ids from which the items can be picked up. | [optional]
**destination_locations** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerDestinationLocationsInner[]**](DraftOrdersGet200ResponseDraftsInnerDestinationLocationsInner.md) | A list of locations to which the items can be delivered | [optional]
**parcels** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerParcelsInner[]**](DraftOrdersGet200ResponseDraftsInnerParcelsInner.md) | The list of parcels to pick up in this delivery from any **single** source&lt;br&gt;(must all be available at all of the pickup locations in *pickupLocations*) | [optional]
**in_stock** | **bool** | Are all the items in stock (may affect the proposals) | [optional] [default to true]
**handling** | **string[]** | Handling instructions for a parcel | [optional]
**proof_of_delivery_requirement** | **string[]** | Proof of delivery requirements for a parcel | [optional]
**original_order_id** | **string** | The id of the order that this draft is based on, usually for cases when editing an existing draft | [optional]
**creation_time** | **\DateTime** | The order original creation time in ISO8601 format |
**updated_time** | **\DateTime** | The order last update time in ISO8601 format |
**recipient_message** | **string** | Additional message for the recipient | [optional]
**is_gift** | **bool** | Whether this delivery is a gift | [optional] [default to false]
**is_other_sender** | **bool** | Whether this delivery has other sender details than the merchant&#39;s details | [optional] [default to false]
**is_from_collection_point** | **bool** | Whether this delivery origin is a collection point | [optional] [default to false]
**pickup_window** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInnerDeliverySlot**](QuotePostRequestDestinationLocationsInnerDeliverySlot.md) |  | [optional]
**external_data** | [**\OpenAPI\Client\Model\OrderPostRequestExternalData**](OrderPostRequestExternalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
