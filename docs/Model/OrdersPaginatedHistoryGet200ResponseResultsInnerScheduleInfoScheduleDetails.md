# # OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scheduled_date** | **string** |  | [optional]
**frequency** | **string** | &lt;u&gt;The frequency of a recurring order&lt;/u&gt;: &lt;br&gt; &lt;table&gt;   &lt;tr&gt;&lt;td&gt;daily&lt;/td&gt; &lt;td&gt;repeating by selected days of week&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;weekly&lt;/td&gt;      &lt;td&gt;repeating every week&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;monthly&lt;/td&gt;         &lt;td&gt;repeating every month&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;once&lt;/td&gt;    &lt;td&gt;scheduled order for a single occurrence&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional]
**end_condition** | **string** | The end condition of a recurring series | [optional]
**occurrences_limit** | **int** | The number of occurrences. presents when end condition is numberOfOccurrences | [optional]
**end_date** | **string** |  | [optional]
**weekdays** | [**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetailsWeekdaysInner[]**](OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetailsWeekdaysInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
