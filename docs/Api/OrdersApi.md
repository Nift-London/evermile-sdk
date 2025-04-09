# OpenAPI\Client\OrdersApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderMultiRoutePost()**](OrdersApi.md#orderMultiRoutePost) | **POST** /order/multiRoute | Order a route with multiple orders |
| [**orderOrderIdDelete()**](OrdersApi.md#orderOrderIdDelete) | **DELETE** /order/{orderId} | Cancel an order |
| [**orderOrderIdGet()**](OrdersApi.md#orderOrderIdGet) | **GET** /order/{orderId} | Fetch order details |
| [**orderOrderIdLabelGet()**](OrdersApi.md#orderOrderIdLabelGet) | **GET** /order/{orderId}/label | Create a label for an order |
| [**orderOrderIdLiveTrackingGet()**](OrdersApi.md#orderOrderIdLiveTrackingGet) | **GET** /order/{orderId}/liveTracking | Fetch live order tracking |
| [**orderOrderIdPatch()**](OrdersApi.md#orderOrderIdPatch) | **PATCH** /order/{orderId} | Update order details |
| [**orderPost()**](OrdersApi.md#orderPost) | **POST** /order | Order a delivery |
| [**ordersGet()**](OrdersApi.md#ordersGet) | **GET** /orders | Get orders |
| [**ordersPaginatedHistoryGet()**](OrdersApi.md#ordersPaginatedHistoryGet) | **GET** /orders/paginatedHistory | Get orders history with pagination |


## `orderMultiRoutePost()`

```php
orderMultiRoutePost($order_multi_route_post_request, $x_evermile_merchant_id): \OpenAPI\Client\Model\OrderMultiRoutePost201Response
```

Order a route with multiple orders

Order a route delivery with multiple orders based on a multi-route proposal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_multi_route_post_request = new \OpenAPI\Client\Model\OrderMultiRoutePostRequest(); // \OpenAPI\Client\Model\OrderMultiRoutePostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.

try {
    $result = $apiInstance->orderMultiRoutePost($order_multi_route_post_request, $x_evermile_merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderMultiRoutePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_multi_route_post_request** | [**\OpenAPI\Client\Model\OrderMultiRoutePostRequest**](../Model/OrderMultiRoutePostRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderMultiRoutePost201Response**](../Model/OrderMultiRoutePost201Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderOrderIdDelete()`

```php
orderOrderIdDelete($order_id, $x_evermile_merchant_id, $x_evermile_trace_id, $no_confirm_if_no_fee, $cancel_all_route, $keep_drafts, $x_evermile_token, $move_to_planning)
```

Cancel an order

Cancel the order with the given ID.  This is an asynchronous call. Updates will be sent via the status update API and can be requested by the order details API.  ## Cancellation Confirmation Flow When cancelling an order that incurs a cancellation fee, the API will return a 402 (Payment Required) response with a token. To complete the cancellation:  1. The first API call may return a 402 error with a token if a cancellation fee applies 2. You must make a second API call with the returned token in the `x-evermile-token` header to confirm the cancellation and accept any fee 3. If you set `noConfirmIfNoFee=true` and there is no cancellation fee, the order will be automatically cancelled without requiring confirmation  Without confirmation via the second call with the token, the cancellation will not be processed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The ID of the order
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$no_confirm_if_no_fee = true; // bool | If set to true, the order will be cancelled immediately when there is no cancellation fee. If false, confirmation is always required. Default is false.
$cancel_all_route = true; // bool | Should all the route orders be cancelled immediately if there is no cancellation fee. Default is false.
$keep_drafts = true; // bool | Should keep as draft orders if draft exists.
$x_evermile_token = 'x_evermile_token_example'; // string | A token returned from a previous 402 response to confirm cancellation and accept any cancellation fee
$move_to_planning = true; // bool | Should create a new draft and move to planning screen.

try {
    $apiInstance->orderOrderIdDelete($order_id, $x_evermile_merchant_id, $x_evermile_trace_id, $no_confirm_if_no_fee, $cancel_all_route, $keep_drafts, $x_evermile_token, $move_to_planning);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The ID of the order | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **no_confirm_if_no_fee** | **bool**| If set to true, the order will be cancelled immediately when there is no cancellation fee. If false, confirmation is always required. Default is false. | [optional] |
| **cancel_all_route** | **bool**| Should all the route orders be cancelled immediately if there is no cancellation fee. Default is false. | [optional] |
| **keep_drafts** | **bool**| Should keep as draft orders if draft exists. | [optional] |
| **x_evermile_token** | **string**| A token returned from a previous 402 response to confirm cancellation and accept any cancellation fee | [optional] |
| **move_to_planning** | **bool**| Should create a new draft and move to planning screen. | [optional] |

### Return type

void (empty response body)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderOrderIdGet()`

```php
orderOrderIdGet($order_id, $x_evermile_merchant_id, $x_evermile_trace_id, $include_tracking_info): \OpenAPI\Client\Model\OrderPost201Response
```

Fetch order details

Get details for the order with the given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The ID of the order
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$include_tracking_info = true; // bool | Should include live tracking info with this order. Default is false.

try {
    $result = $apiInstance->orderOrderIdGet($order_id, $x_evermile_merchant_id, $x_evermile_trace_id, $include_tracking_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The ID of the order | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **include_tracking_info** | **bool**| Should include live tracking info with this order. Default is false. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderPost201Response**](../Model/OrderPost201Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderOrderIdLabelGet()`

```php
orderOrderIdLabelGet($order_id, $x_evermile_merchant_id, $x_evermile_trace_id): \SplFileObject
```

Create a label for an order

Creates a shipping label for an order. The response format is determined by the `Accept` header in the request:   `Accept: application/pdf` - Returns the label as PDF binary content `Accept: text/html` - Returns the label as HTML content `Accept: text/url` - Returns a URL to download the label If no Accept header is specified, the default response is `application/pdf`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The ID of the order
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $result = $apiInstance->orderOrderIdLabelGet($order_id, $x_evermile_merchant_id, $x_evermile_trace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderOrderIdLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The ID of the order | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `text/html`, `text/url`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderOrderIdLiveTrackingGet()`

```php
orderOrderIdLiveTrackingGet($order_id, $x_evermile_merchant_id, $x_evermile_trace_id): \OpenAPI\Client\Model\OrderPost201ResponseOrderTrackingInfo
```

Fetch live order tracking

Get live order tracking details for the order with the given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The ID of the order
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $result = $apiInstance->orderOrderIdLiveTrackingGet($order_id, $x_evermile_merchant_id, $x_evermile_trace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderOrderIdLiveTrackingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The ID of the order | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderPost201ResponseOrderTrackingInfo**](../Model/OrderPost201ResponseOrderTrackingInfo.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderOrderIdPatch()`

```php
orderOrderIdPatch($order_id, $order_order_id_patch_request, $x_evermile_merchant_id, $x_evermile_trace_id)
```

Update order details

Update details for the order with the given ID. This sets the order to \"manually updated\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The ID of the order
$order_order_id_patch_request = new \OpenAPI\Client\Model\OrderOrderIdPatchRequest(); // \OpenAPI\Client\Model\OrderOrderIdPatchRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $apiInstance->orderOrderIdPatch($order_id, $order_order_id_patch_request, $x_evermile_merchant_id, $x_evermile_trace_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderOrderIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The ID of the order | |
| **order_order_id_patch_request** | [**\OpenAPI\Client\Model\OrderOrderIdPatchRequest**](../Model/OrderOrderIdPatchRequest.md)|  | |
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

## `orderPost()`

```php
orderPost($order_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $x_evermile_token): \OpenAPI\Client\Model\OrderPost201Response
```

Order a delivery

Order a delivery based on a quote.<br>***If there already exists an order with the given proposal ID, that order will be returned (and a new one will NOT be created)***

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_post_request = new \OpenAPI\Client\Model\OrderPostRequest(); // \OpenAPI\Client\Model\OrderPostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context
$x_evermile_token = 'x_evermile_token_example'; // string | A token to confirm cancellation after receiving 402 code

try {
    $result = $apiInstance->orderPost($order_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $x_evermile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_post_request** | [**\OpenAPI\Client\Model\OrderPostRequest**](../Model/OrderPostRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |
| **x_evermile_token** | **string**| A token to confirm cancellation after receiving 402 code | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderPost201Response**](../Model/OrderPost201Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersGet()`

```php
ordersGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $from, $to, $statuses, $scheduled): \OpenAPI\Client\Model\OrdersGet200ResponseInner[]
```

Get orders

Get the list of orders for a timeframe

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
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
$statuses = Failed,ReturnedToSender; // string[] | A list of all the required statuses
$scheduled = false; // bool | Whether to include scheduled (future) orders

try {
    $result = $apiInstance->ordersGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $from, $to, $statuses, $scheduled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
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
| **statuses** | [**string[]**](../Model/string.md)| A list of all the required statuses | [optional] |
| **scheduled** | **bool**| Whether to include scheduled (future) orders | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersGet200ResponseInner[]**](../Model/OrdersGet200ResponseInner.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersPaginatedHistoryGet()`

```php
ordersPaginatedHistoryGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $page_size, $last_timestamp, $last_id, $from, $to): \OpenAPI\Client\Model\OrdersPaginatedHistoryGet200Response
```

Get orders history with pagination

Get the history list of orders for a timeframe paginated by reporting time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context
$page_size = 50; // int | The number of elements in a page.
$last_timestamp = 2022-12-05T10:22:28Z; // \DateTime | The last timestamp for the pagination.
$last_id = 'last_id_example'; // string | The last id for the pagination.
$from = 2022-03-20T00:00:00.000Z; // \DateTime | The start date to query (YYYY-MM-DD). Default is today.
$to = 2022-03-21T00:00:00.000Z; // \DateTime | The end date to query (YYYY-MM-DD). Default is today.

try {
    $result = $apiInstance->ordersPaginatedHistoryGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $page_size, $last_timestamp, $last_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPaginatedHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |
| **page_size** | **int**| The number of elements in a page. | [optional] |
| **last_timestamp** | **\DateTime**| The last timestamp for the pagination. | [optional] |
| **last_id** | **string**| The last id for the pagination. | [optional] |
| **from** | **\DateTime**| The start date to query (YYYY-MM-DD). Default is today. | [optional] |
| **to** | **\DateTime**| The end date to query (YYYY-MM-DD). Default is today. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersPaginatedHistoryGet200Response**](../Model/OrdersPaginatedHistoryGet200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
