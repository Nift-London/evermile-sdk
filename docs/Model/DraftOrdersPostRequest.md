# # DraftOrdersPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**draft_order_id** | **string** | The draft&#39;s evermile ID. Used for updating a draft order (if provided) | [optional]
**external_order_id** | **string** | An external order ID to attach to this order | [optional] [default to '']
**merchant_id** | **string** | The merchant&#39;s ID | [optional]
**store_id** | **string** | A store ID associated with this location | [optional]
**pickup_contact_details** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerPickupContactDetails**](DraftOrdersGet200ResponseDraftsInnerPickupContactDetails.md) |  | [optional]
**pickup_location_id** | **string** | The id of an existing sender location with the sender contact details | [optional]
**dropoff_contact_details** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails**](DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails.md) |  | [optional]
**sender_contact_details** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails**](DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails.md) |  | [optional]
**extended_liability_coverage_cents** | **int** | The amount of extended liability coverage required for this order | [optional]
**pickup_locations_ids** | **string[]** | A list of location ids from which the items can be picked up. | [optional]
**pickup_window** | [**\OpenAPI\Client\Model\QuotePostRequestPickupWindow**](QuotePostRequestPickupWindow.md) |  | [optional]
**destination_locations** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerDestinationLocationsInner[]**](DraftOrdersGet200ResponseDraftsInnerDestinationLocationsInner.md) | A list of locations to which the items can be delivered | [optional]
**parcels** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerParcelsInner[]**](DraftOrdersGet200ResponseDraftsInnerParcelsInner.md) | The list of parcels to pick up in this delivery from any **single** source&lt;br&gt;(must all be available at all of the pickup locations in *pickupLocations*) | [optional]
**in_stock** | **bool** | Are all the items in stock (may affect the proposals) | [optional] [default to true]
**handling** | **string[]** | Handling instructions for a parcel | [optional]
**proof_of_delivery_requirement** | **string[]** | Proof of delivery requirements for a parcel | [optional]
**original_order_id** | **string** | The id of the order that this draft is based on, usually for cases when editing an existing draft | [optional]
**recipient_message** | **string** | Additional message for the recipient | [optional]
**is_gift** | **bool** | Whether this delivery is a gift | [optional] [default to false]
**is_other_sender** | **bool** | Whether this delivery has other sender details than the merchant&#39;s details | [optional] [default to false]
**is_from_collection_point** | **bool** | Whether this delivery origin is a collection point | [optional] [default to false]
**draft_type** | **string** |  | [optional]
**external_data** | [**\OpenAPI\Client\Model\OrderPostRequestExternalData**](OrderPostRequestExternalData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
