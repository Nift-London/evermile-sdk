# OpenAPI\Client\PickupLocationsApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**locationPut()**](PickupLocationsApi.md#locationPut) | **PUT** /location | Create or update a delivery location |
| [**locationsGet()**](PickupLocationsApi.md#locationsGet) | **GET** /locations | Get pickup locations |
| [**locationsLocationIdDelete()**](PickupLocationsApi.md#locationsLocationIdDelete) | **DELETE** /locations/{locationId} | Delete a pickup location |


## `locationPut()`

```php
locationPut($location_put_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\LocationPut200Response
```

Create or update a delivery location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PickupLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_put_request = new \OpenAPI\Client\Model\LocationPutRequest(); // \OpenAPI\Client\Model\LocationPutRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->locationPut($location_put_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickupLocationsApi->locationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_put_request** | [**\OpenAPI\Client\Model\LocationPutRequest**](../Model/LocationPutRequest.md)|  | |
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

## `locationsGet()`

```php
locationsGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $delivery_method): \OpenAPI\Client\Model\LocationsGet200Response
```

Get pickup locations

Get all pickup locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PickupLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context
$delivery_method = delivery; // string

try {
    $result = $apiInstance->locationsGet($x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id, $delivery_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickupLocationsApi->locationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |
| **delivery_method** | **string**|  | [optional] |

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

## `locationsLocationIdDelete()`

```php
locationsLocationIdDelete($location_id, $x_evermile_merchant_id, $x_evermile_trace_id)
```

Delete a pickup location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PickupLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | The locationId ID
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $apiInstance->locationsLocationIdDelete($location_id, $x_evermile_merchant_id, $x_evermile_trace_id);
} catch (Exception $e) {
    echo 'Exception when calling PickupLocationsApi->locationsLocationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_id** | **string**| The locationId ID | |
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
