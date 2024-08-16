# # QuotePost200ResponseDateProposalsInnerProposalsInnerProposal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The proposal ID |
**price** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  |
**price_vat** | [**\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue**](QuotePostRequestParcelsInnerItemsListInnerValue.md) |  | [optional]
**credit_back** | **int** | The amount of credits this proposal awards, in credit cents | [optional]
**estimated_pickup** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInnerDeliverySlot**](QuotePostRequestDestinationLocationsInnerDeliverySlot.md) |  |
**estimated_dropoff** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInnerDeliverySlot**](QuotePostRequestDestinationLocationsInnerDeliverySlot.md) |  |
**dropoff_window_type** | **string** | &lt;u&gt;The reported issue&lt;/u&gt;: &lt;br&gt;             &lt;table&gt;   &lt;tr&gt;&lt;td&gt;scheduledWindow&lt;/td&gt;     &lt;td&gt;A scheduled delivery window&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;allDay&lt;/td&gt;              &lt;td&gt;An all day window&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;express&lt;/td&gt;             &lt;td&gt;An express window&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; |
**origin** | [**\OpenAPI\Client\Model\QuotePost200ResponseDateProposalsInnerProposalsInnerProposalOrigin**](QuotePost200ResponseDateProposalsInnerProposalsInnerProposalOrigin.md) |  |
**pickup_location_id** | **string** | The id of an existing sender location with the sender contact details (optional) | [optional]
**destination** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddress**](QuotePostRequestPickupInfoOneOf1InnerAddress.md) |  |
**delivery_company** | **string** | The company that will perform the delivery (if known) | [optional]
**labels** | **string[]** | An array of labels for this proposal |
**price_level** | **int** |  | [optional]
**handoff_info** | [**\OpenAPI\Client\Model\QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfo**](QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfo.md) |  | [optional]
**types** | **string[]** |  | [optional]
**predicted_emission_saving_kg** | **float** |  | [optional]
**vehicle_type** | **string** |  | [optional]
**specific_liability_coverage** | [**\OpenAPI\Client\Model\QuotePost200ResponseDateProposalsInnerProposalsInnerProposalSpecificLiabilityCoverage**](QuotePost200ResponseDateProposalsInnerProposalsInnerProposalSpecificLiabilityCoverage.md) |  | [optional]
**overnight_type** | **string** | The type of overnight delivery (if it&#39;s overnight) |
**estimated_pickup_within_store_hours** | **bool** | Whether the estimated pickup is within store hours |
**origin_destination_distance_meters** | **int** |  | [optional]
**promotion_id** | **string** | The id of the promotion that this proposal was created from | [optional]
**promotion_applied** | **bool** | Whether a promotion was applied to this proposal | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
