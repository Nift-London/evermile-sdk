# # OrderPost201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the order |
**external_order_id** | **string** | An external order ID attached to this order |
**store_id** | **string** | The ID of the e-commerce store for this order (if exists) | [optional]
**store_name** | **string** | The name of the store for this order (if exists) | [optional]
**status** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerStatus**](OrdersPaginatedHistoryGet200ResponseResultsInnerStatus.md) |  |
**communicated_pickup** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInnerDeliverySlot**](QuotePostRequestDestinationLocationsInnerDeliverySlot.md) |  |
**communicated_dropoff** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInnerDeliverySlot**](QuotePostRequestDestinationLocationsInnerDeliverySlot.md) |  |
**actual_pickup** | **\DateTime** | The actual pickup time in ISO8601 format (for packages picked up) | [optional]
**actual_dropoff** | **\DateTime** | The actual dropoff time in ISO8601 format (for packages dropped off) | [optional]
**pickup_eta** | **\DateTime** | The expected pickup time (if known) | [optional]
**dropoff_eta** | **\DateTime** | The expected dropoff time (if known) | [optional]
**courier_location** | [**\OpenAPI\Client\Model\OrderPost201ResponseCourierLocation**](OrderPost201ResponseCourierLocation.md) |  | [optional]
**origin** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddress**](QuotePostRequestPickupInfoOneOf1InnerAddress.md) |  |
**destination** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddress**](QuotePostRequestPickupInfoOneOf1InnerAddress.md) |  |
**customer** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerCustomer**](OrdersPaginatedHistoryGet200ResponseResultsInnerCustomer.md) |  |
**delivery_company** | **string** | The company that will perform the delivery (if known) | [optional]
**parcels** | [**\OpenAPI\Client\Model\OrderPost201ResponseParcelsInner[]**](OrderPost201ResponseParcelsInner.md) | The list of parcels in this order |
**value** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  |
**instructions** | **string** | Additional handling instructions for the packages | [optional]
**customer_instructions** | **string** | Additional handling instructions for the packages added by the customer | [optional]
**handling** | **string[]** | Handling instructions for a parcel | [optional]
**proof_of_delivery_requirement** | **string[]** | Proof of delivery requirements for a parcel | [optional]
**tracking_url** | **string** | The carrier tracking URL for this order (if exists) | [optional]
**customer_tracking_url** | **string** | The Evermile customer tracking URL for this order (if exists) | [optional]
**sender_tracking_url** | **string** | The sender tracking URL for this order (if exists) | [optional]
**order_tracking_info** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo**](OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo.md) |  | [optional]
**handoff_type** | **string** |  |
**handoff_info** | [**\OpenAPI\Client\Model\QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfo**](QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfo.md) |  | [optional]
**used_credits** | **bool** | Whether credits were used to pay for this order |
**proof_of_collection** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerProofOfCollectionInner[]**](OrdersPaginatedHistoryGet200ResponseResultsInnerProofOfCollectionInner.md) | Proof of collection for an order | [optional]
**proof_of_delivery** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerProofOfCollectionInner[]**](OrdersPaginatedHistoryGet200ResponseResultsInnerProofOfCollectionInner.md) | Proof of delivery for an order | [optional]
**notes** | **string[]** | Courier notes from each delivery in this order | [optional]
**merchant_name** | **string** | The name of the merchant for this order |
**label_required** | **bool** | Whether label is required |
**label_print_time** | **\DateTime** | The last time a label was printed in ISO8601 format | [optional]
**label_url** | **string** | The label URL (if one exists) | [optional]
**liability_coverage_cents** | **int** | The extended liability coverage in cents | [optional]
**username** | **string** | The name of the user who created the order | [optional]
**delivery_method** | **string** | The delivery method |
**expected_vehicle_type** | **string** |  | [optional]
**actual_vehicle_type** | **string** |  | [optional]
**cost_breakdown** | [**\OpenAPI\Client\Model\OrderPost201ResponseCostBreakdownInner[]**](OrderPost201ResponseCostBreakdownInner.md) | The cost breakdown for an order |
**total_value** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  |
**pickup_contact_info** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerCustomer**](OrdersPaginatedHistoryGet200ResponseResultsInnerCustomer.md) |  | [optional]
**proposal_types** | **string[]** |  | [optional]
**sender_contact_details** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails**](OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails.md) |  | [optional]
**is_gift** | **bool** | Whether this delivery is a gift | [optional] [default to false]
**recipient_message** | **string** | Additional message for the recipient | [optional]
**additional_properties** | **array<string,mixed>** | Additional properties for the order | [optional]
**route_order_index** | **int** | The index of the order in the route | [optional]
**route_info** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerRouteInfo**](OrdersPaginatedHistoryGet200ResponseResultsInnerRouteInfo.md) |  | [optional]
**estimated_pickup_within_store_hours** | **bool** | Whether the estimated pickup is within store hours |
**requested_sla** | **string** |  | [optional]
**schedule_info** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfo**](OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfo.md) |  | [optional]
**extra_external_ids** | **string[]** | Additional external IDs for the order | [optional]
**is_return** | **bool** | Whether it is required to return back to the origin location | [optional]
**simulated_order** | **bool** | Whether this order is a simulated order (for testing/demo purposes) | [default to false]
**happiness** | [**\OpenAPI\Client\Model\OrderPost201ResponseHappiness**](OrderPost201ResponseHappiness.md) |  | [optional]
**edit_info** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerEditInfo**](OrdersPaginatedHistoryGet200ResponseResultsInnerEditInfo.md) |  | [optional]
**proposal_label** | **string** |  | [optional]
**is_nationwide** | **bool** | Whether it is a nationwide delivery | [optional]
**carrier_delivery_url** | **string** | The URL to find the delivery in the carrier (if exists) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
