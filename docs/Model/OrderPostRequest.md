# # OrderPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**proposal_id** | **string** | The proposal ID to create order from |
**external_order_id** | **string** | An external order ID (reference ID) to attach to this order | [optional] [default to '']
**pickup_contact_details** | [**\OpenAPI\Client\Model\OrderPostRequestPickupContactDetails**](OrderPostRequestPickupContactDetails.md) |  | [optional]
**pickup_location_id** | **string** | The id of an existing sender location with the sender contact details | [optional]
**dropoff_contact_details** | [**\OpenAPI\Client\Model\OrderPostRequestDropoffContactDetails**](OrderPostRequestDropoffContactDetails.md) |  | [optional]
**sender_contact_details** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails**](OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails.md) |  | [optional]
**use_credits** | **bool** | Whether to use available credits to pay for order | [default to false]
**proof_of_delivery_requirement** | **string[]** | Proof of delivery requirements for a parcel, Optional. Will override any POD passed in on the quote | [optional]
**extended_liability_coverage_cents** | **int** | The amount of extended liability coverage required for this order | [optional]
**draft_order_id** | **string** | The draft&#39;s evermile ID. Used for marking the draft as ordered. (if provided) | [optional]
**recipient_message** | **string** | Additional message for the recipient | [optional]
**is_gift** | **bool** | Whether this delivery is a gift | [optional] [default to false]
**simulated_order** | **bool** | Whether this order is a simulated order (for testing/demo purposes) | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
