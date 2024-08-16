# # QuotePostRequestPickupInfoOneOf1InnerAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | Street and house number for the address |
**address_line2** | **string** | Additional address details such as flat number | [optional]
**city** | **string** | The city for the address |
**postal_code** | **string** | The postal code for the address |
**geo_location** | [**\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation**](QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation.md) |  | [optional]
**type** | **string** | &lt;u&gt;The type of address&lt;/u&gt;: &lt;br&gt; &lt;table&gt;   &lt;tr&gt;&lt;td&gt;office&lt;/td&gt;       &lt;td&gt;An office building&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;pudo&lt;/td&gt;         &lt;td&gt;A Pickup/Dropoff depot&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;residential&lt;/td&gt;  &lt;td&gt;A residential building&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;store&lt;/td&gt;        &lt;td&gt;A store&lt;/td&gt;&lt;/tr&gt;   &lt;tr&gt;&lt;td&gt;warehouse&lt;/td&gt;    &lt;td&gt;A warehouse / micro-fulfillment center&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [default to 'store']
**name** | **string** | The name of the store or the pickup location | [optional]
**external** | **bool** | True if this is an external location for pickup or dropoff like a customer&#39;s home address (and not the merchant&#39;s warehouse or store) | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
