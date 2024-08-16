# OpenAPI\Client\GDPRApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gdprCustomerPost()**](GDPRApi.md#gdprCustomerPost) | **POST** /gdpr/customer | Customer data request |
| [**gdprMerchantPost()**](GDPRApi.md#gdprMerchantPost) | **POST** /gdpr/merchant | Merchant data request |


## `gdprCustomerPost()`

```php
gdprCustomerPost($type, $gdpr_customer_post_request, $x_evermile_merchant_id, $x_evermile_trace_id)
```

Customer data request

Initiate a GDPR data deletion or data review request for customer data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GDPRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$gdpr_customer_post_request = new \OpenAPI\Client\Model\GdprCustomerPostRequest(); // \OpenAPI\Client\Model\GdprCustomerPostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $apiInstance->gdprCustomerPost($type, $gdpr_customer_post_request, $x_evermile_merchant_id, $x_evermile_trace_id);
} catch (Exception $e) {
    echo 'Exception when calling GDPRApi->gdprCustomerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **gdpr_customer_post_request** | [**\OpenAPI\Client\Model\GdprCustomerPostRequest**](../Model/GdprCustomerPostRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |

### Return type

void (empty response body)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gdprMerchantPost()`

```php
gdprMerchantPost($type, $x_evermile_merchant_id, $x_evermile_trace_id)
```

Merchant data request

Initiate a GDPR data deletion or data review request for merchant data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GDPRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $apiInstance->gdprMerchantPost($type, $x_evermile_merchant_id, $x_evermile_trace_id);
} catch (Exception $e) {
    echo 'Exception when calling GDPRApi->gdprMerchantPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |

### Return type

void (empty response body)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
