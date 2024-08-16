# OpenAPI\Client\LocationsApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**senderInfoPut()**](LocationsApi.md#senderInfoPut) | **PUT** /sender_info | Create or update a delivery location. |
| [**senderInfoSenderInfoIdDelete()**](LocationsApi.md#senderInfoSenderInfoIdDelete) | **DELETE** /sender_info/{senderInfoId} | Delete a delivery location. |
| [**senderInfosGet()**](LocationsApi.md#senderInfosGet) | **GET** /sender_infos | Get sender and location infos |


## `senderInfoPut()`

```php
senderInfoPut($type, $location_put_request_location, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\LocationPut200Response
```

Create or update a delivery location.

DEPRECATED - use the new \"locations\" endpoints instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = pickup; // string | Whether this action refers to pickup or sender info (pickup/info)
$location_put_request_location = new \OpenAPI\Client\Model\LocationPutRequestLocation(); // \OpenAPI\Client\Model\LocationPutRequestLocation
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->senderInfoPut($type, $location_put_request_location, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->senderInfoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Whether this action refers to pickup or sender info (pickup/info) | [default to &#39;pickup&#39;] |
| **location_put_request_location** | [**\OpenAPI\Client\Model\LocationPutRequestLocation**](../Model/LocationPutRequestLocation.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |

### Return type

[**\OpenAPI\Client\Model\LocationPut200Response**](../Model/LocationPut200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `senderInfoSenderInfoIdDelete()`

```php
senderInfoSenderInfoIdDelete($sender_info_id, $x_evermile_merchant_id, $x_evermile_trace_id)
```

Delete a delivery location.

DEPRECATED - use the new \"locations\" endpoints instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_info_id = 'sender_info_id_example'; // string | The sender info ID
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $apiInstance->senderInfoSenderInfoIdDelete($sender_info_id, $x_evermile_merchant_id, $x_evermile_trace_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->senderInfoSenderInfoIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_info_id** | **string**| The sender info ID | |
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

## `senderInfosGet()`

```php
senderInfosGet($type, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\LocationsGet200Response
```

Get sender and location infos

DEPRECATED - use the new \"locations\" endpoints instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = pickup; // string | Whether this action refers to pickup or sender info (pickup/info)
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->senderInfosGet($type, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->senderInfosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Whether this action refers to pickup or sender info (pickup/info) | [default to &#39;pickup&#39;] |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |

### Return type

[**\OpenAPI\Client\Model\LocationsGet200Response**](../Model/LocationsGet200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
