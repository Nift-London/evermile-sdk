# # OrderPost201ResponseCostBreakdownInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | &lt;u&gt;The cost item name&lt;/u&gt;: &lt;br&gt;             &lt;table&gt;   &lt;tr&gt;&lt;td&gt;CostItemDeliveryCost&lt;/td&gt;     &lt;td&gt;The cost of the delivery&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemBookingFee&lt;/td&gt;              &lt;td&gt;The booking fee of the delivery&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemLiability&lt;/td&gt;             &lt;td&gt;The cost of the liability coverage&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemWaitingTime&lt;/td&gt;             &lt;td&gt;The cost of the waiting time&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemAdditionalParcels&lt;/td&gt;             &lt;td&gt;The cost of the additional parcels&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemLateAmendment&lt;/td&gt;             &lt;td&gt;The cost for late amendment&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemOverweight&lt;/td&gt;             &lt;td&gt;The cost for overweight&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemOversize&lt;/td&gt;             &lt;td&gt;The cost for oversize&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemReturnToStore&lt;/td&gt;             &lt;td&gt;The cost item returned to store&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemCreditUsage&lt;/td&gt;             &lt;td&gt;The credit usage&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemCancellation&lt;/td&gt;             &lt;td&gt;The cost for a cancellation&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemDiscount&lt;/td&gt;             &lt;td&gt;A delivery discount&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;CostItemCancelledAtPickup&lt;/td&gt;     &lt;td&gt;The cost for a cancellation at pickup&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; |
**price** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  |
**waiver_details** | [**\OpenAPI\Client\Model\OrderPost201ResponseCostBreakdownInnerWaiverDetails**](OrderPost201ResponseCostBreakdownInnerWaiverDetails.md) |  | [optional]
**cancellation_fee_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo**](OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo.md) |  | [optional]
**liability_info** | [**\OpenAPI\Client\Model\OrderPost201ResponseCostBreakdownInnerLiabilityInfo**](OrderPost201ResponseCostBreakdownInnerLiabilityInfo.md) |  | [optional]
**discount_info** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValueDiscount**](QuotePostRequestParcelsInnerItemsListInnerValueDiscount.md) |  | [optional]
**comment** | **string** | A freeform comment | [optional]
**item_id** | **string** | The ID of the cost item | [optional]
**performed_by** | **string** | Who created this item | [optional]
**effective_date** | **\DateTime** | The effective date of the cost item |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
