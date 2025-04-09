# OpenAPI\Client\DraftsApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**draftOrdersDelete()**](DraftsApi.md#draftOrdersDelete) | **DELETE** /draft_orders | Delete a list of draft orders |
| [**draftOrdersDraftOrderIdGet()**](DraftsApi.md#draftOrdersDraftOrderIdGet) | **GET** /draft_orders/{draftOrderId} | Retrieve a draft order |
| [**draftOrdersGet()**](DraftsApi.md#draftOrdersGet) | **GET** /draft_orders | Retrieve all draft orders |
| [**draftOrdersPost()**](DraftsApi.md#draftOrdersPost) | **POST** /draft_orders | Save a draft order |


## `draftOrdersDelete()`

```php
draftOrdersDelete($draft_orders_delete_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id)
```

Delete a list of draft orders

Delete draft orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$draft_orders_delete_request = new \OpenAPI\Client\Model\DraftOrdersDeleteRequest(); // \OpenAPI\Client\Model\DraftOrdersDeleteRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $apiInstance->draftOrdersDelete($draft_orders_delete_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
} catch (Exception $e) {
    echo 'Exception when calling DraftsApi->draftOrdersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_orders_delete_request** | [**\OpenAPI\Client\Model\DraftOrdersDeleteRequest**](../Model/DraftOrdersDeleteRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |

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

## `draftOrdersDraftOrderIdGet()`

```php
draftOrdersDraftOrderIdGet($draft_order_id, $x_evermile_merchant_id, $x_evermile_trace_id): \OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInner
```

Retrieve a draft order

Retrieve a draft order by draft ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$draft_order_id = 'draft_order_id_example'; // string | The ID of the draft order
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $result = $apiInstance->draftOrdersDraftOrderIdGet($draft_order_id, $x_evermile_merchant_id, $x_evermile_trace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DraftsApi->draftOrdersDraftOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_order_id** | **string**| The ID of the draft order | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |

### Return type

[**\OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInner**](../Model/DraftOrdersGet200ResponseDraftsInner.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `draftOrdersGet()`

```php
draftOrdersGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\DraftOrdersGet200Response
```

Retrieve all draft orders

Retrieve all drafts for a merchant by merchant ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->draftOrdersGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DraftsApi->draftOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |

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

## `draftOrdersPost()`

```php
draftOrdersPost($draft_orders_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\DraftOrdersGet200ResponseDraftsInner
```

Save a draft order

Create or update a draft order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$draft_orders_post_request = new \OpenAPI\Client\Model\DraftOrdersPostRequest(); // \OpenAPI\Client\Model\DraftOrdersPostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->draftOrdersPost($draft_orders_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DraftsApi->draftOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **draft_orders_post_request** | [**\OpenAPI\Client\Model\DraftOrdersPostRequest**](../Model/DraftOrdersPostRequest.md)|  | |
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
