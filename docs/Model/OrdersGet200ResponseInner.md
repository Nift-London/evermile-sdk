# # OrdersGet200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The order ID |
**pickup_window** | [**\OpenAPI\Client\Model\OrdersGet200ResponseInnerPickupWindow**](OrdersGet200ResponseInnerPickupWindow.md) |  |
**carrier** | **string** | The carrier name |
**status** | [**\OpenAPI\Client\Model\OrderPost201ResponseStatus**](OrderPost201ResponseStatus.md) |  |
**creation_time** | **\DateTime** | The order original creation time in ISO8601 format |
**updated_time** | **\DateTime** | The order last update time in ISO8601 format | [optional]
**label_print_time** | **\DateTime** | The last time a label was printed in ISO8601 format | [optional]
**dropoff_address** | **string** | The dropoff address |
**dropoff_geo_location** | [**\OpenAPI\Client\Model\OrdersGet200ResponseInnerDropoffGeoLocation**](OrdersGet200ResponseInnerDropoffGeoLocation.md) |  | [optional]
**dropoff_window** | [**\OpenAPI\Client\Model\OrdersGet200ResponseInnerPickupWindow**](OrdersGet200ResponseInnerPickupWindow.md) |  | [optional]
**estimated_arrival_time** | **\DateTime** | The estimated arrival time in ISO8601 format | [optional]
**customer** | [**\OpenAPI\Client\Model\OrderPost201ResponseCustomer**](OrderPost201ResponseCustomer.md) |  |
**notes** | **string** | The dropoff note | [optional]
**aggregation_id** | **string** | The aggregation ID |
**parcels_count** | **int** | The number of parcels in this order |
**external_order_id** | **string** | An external order ID attached to this order |
**store_id** | **string** | The ID of the e-commerce store for this order (if exists) | [optional]
**order_tracking_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseOrderTrackingInfo**](OrderPost201ResponseOrderTrackingInfo.md) |  | [optional]
**used_credits** | **bool** | Whether credits were used to pay for this order |
**label_required** | **bool** | Whether label is required |
**proof_of_collection** | [**\OpenAPI\Client\Model\OrderPost201ResponseProofOfCollectionInner[]**](OrderPost201ResponseProofOfCollectionInner.md) | Proof of collection for an order | [optional]
**proof_of_delivery** | [**\OpenAPI\Client\Model\OrderPost201ResponseProofOfCollectionInner[]**](OrderPost201ResponseProofOfCollectionInner.md) | Proof of delivery for an order | [optional]
**username** | **string** | The name of the user who created the order | [optional]
**expected_vehicle_type** | **string** |  | [optional]
**delivery_method** | **string** | The delivery method |
**origin** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddress**](QuotePostRequestPickupInfoOneOf1InnerAddress.md) |  |
**pickup_contact_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseCustomer**](OrderPost201ResponseCustomer.md) |  | [optional]
**sender_contact_details** | [**\OpenAPI\Client\Model\OrderPostRequestSenderContactDetails**](OrderPostRequestSenderContactDetails.md) |  | [optional]
**is_gift** | **bool** | Whether this delivery is a gift | [optional] [default to false]
**route_order_index** | **int** | The index of the order in the route | [optional]
**route_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseRouteInfo**](OrderPost201ResponseRouteInfo.md) |  | [optional]
**schedule_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseScheduleInfo**](OrderPost201ResponseScheduleInfo.md) |  | [optional]
**extra_external_ids** | **string[]** | Additional external IDs for the order | [optional]
**is_return** | **bool** | Whether it is required to return back to the origin location | [optional]
**simulated_order** | **bool** | Whether this order is a simulated order (for testing/demo purposes) | [default to false]
**value** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  | [optional]
**edit_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseEditInfo**](OrderPost201ResponseEditInfo.md) |  | [optional]
**is_nationwide** | **bool** | Whether it is a nationwide delivery | [optional]
**carrier_delivery_url** | **string** | The URL to find the delivery in the carrier (if exists) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
