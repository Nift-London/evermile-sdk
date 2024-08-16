# # OrderMultiRoutePostRequestAdditionalDropoffInfoInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The task ID |
**contact_details** | [**\OpenAPI\Client\Model\OrderPostRequestDropoffContactDetails**](OrderPostRequestDropoffContactDetails.md) |  | [optional]
**external_order_id** | **string** | An external order ID to attach to this order | [optional] [default to '']
**extended_liability_coverage_cents** | **int** | The amount of extended liability coverage required for this order | [optional]
**is_gift** | **bool** | Whether this delivery is a gift | [optional] [default to false]
**sender_contact_details** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails**](OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails.md) |  | [optional]
**recipient_message** | **string** | Additional message for the recipient | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
