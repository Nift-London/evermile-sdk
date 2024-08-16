# # OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellation_fee_type** | **string** | &lt;u&gt;The type of the cancellation fee&lt;/u&gt;: &lt;br&gt;             &lt;table&gt;   &lt;tr&gt;&lt;td&gt;regularCancellationFee&lt;/td&gt;          &lt;td&gt;fee for cancellation&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;lateCancellationFee&lt;/td&gt;      &lt;td&gt;fee for late cancellation&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;freeCancellation&lt;/td&gt;      &lt;td&gt;no cancellation fee&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; |
**percent** | **int** | The fee percentage of the original cost |
**original_cost** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
