# OpenAPI\Client\MyDriversApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**myDriversDraftsGet()**](MyDriversApi.md#myDriversDraftsGet) | **GET** /myDrivers/drafts | Retrieve all My Drivers draft orders |
| [**myDriversDraftsPost()**](MyDriversApi.md#myDriversDraftsPost) | **POST** /myDrivers/drafts | Save a My Drivers draft order |


## `myDriversDraftsGet()`

```php
myDriversDraftsGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $from, $to): \OpenAPI\Client\Model\DraftOrdersGet200Response
```

Retrieve all My Drivers draft orders

Retrieve all My Drivers drafts for a merchant by merchant ID and time range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MyDriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context
$from = 2022-03-20T00:00:00.000Z; // \DateTime | The start date to query (YYYY-MM-DD). Default is today.
$to = 2022-03-21T00:00:00.000Z; // \DateTime | The end date to query (YYYY-MM-DD). Default is today.

try {
    $result = $apiInstance->myDriversDraftsGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyDriversApi->myDriversDraftsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |
| **from** | **\DateTime**| The start date to query (YYYY-MM-DD). Default is today. | [optional] |
| **to** | **\DateTime**| The end date to query (YYYY-MM-DD). Default is today. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DraftOrdersGet200Response**](../Model/DraftOrdersGet200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `myDriversDraftsPost()`

```php
myDriversDraftsPost($my_drivers_drafts_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInner
```

Save a My Drivers draft order

Create or update an My Drivers draft order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MyDriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$my_drivers_drafts_post_request = new \OpenAPI\Client\Model\MyDriversDraftsPostRequest(); // \OpenAPI\Client\Model\MyDriversDraftsPostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->myDriversDraftsPost($my_drivers_drafts_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyDriversApi->myDriversDraftsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **my_drivers_drafts_post_request** | [**\OpenAPI\Client\Model\MyDriversDraftsPostRequest**](../Model/MyDriversDraftsPostRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |

### Return type

[**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInner**](../Model/DraftOrdersGet200ResponseDraftsInner.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
