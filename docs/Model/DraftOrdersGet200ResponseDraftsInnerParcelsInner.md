# # DraftOrdersGet200ResponseDraftsInnerParcelsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the parcel object in evermile db | [optional]
**dimensions** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerParcelsInnerDimensions**](DraftOrdersGet200ResponseDraftsInnerParcelsInnerDimensions.md) |  | [optional]
**weight_kg** | **float** | Weight of the package in Kilograms | [optional]
**parcel_type** | **string** | &lt;u&gt;The type of package&lt;/u&gt;: &lt;br&gt; &lt;table&gt;   &lt;tr&gt;&lt;td&gt;alcohol&lt;/td&gt;          &lt;td&gt;A parcel containing alcohol&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;cake&lt;/td&gt;             &lt;td&gt;A parcel containing a cake&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;flowers&lt;/td&gt;          &lt;td&gt;A parcel containing flowers&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;parcel&lt;/td&gt;           &lt;td&gt;A parcel containing miscellaneous items&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;perishable&lt;/td&gt;       &lt;td&gt;A parcel containing perishable items&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;custom&lt;/td&gt;           &lt;td&gt;A parcel with custom dimensions&lt;/td&gt;&lt;/tr&gt;         &lt;/table&gt; | [optional] [default to 'Package']
**template_name** | **string** |  | [optional]
**items_list** | [**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInnerParcelsInnerItemsListInner[]**](DraftOrdersGet200ResponseDraftsInnerParcelsInnerItemsListInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
