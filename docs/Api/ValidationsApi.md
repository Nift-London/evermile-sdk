# OpenAPI\Client\ValidationsApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addressValidateGet()**](ValidationsApi.md#addressValidateGet) | **GET** /address/validate | Validate address |
| [**emailValidateGet()**](ValidationsApi.md#emailValidateGet) | **GET** /email/validate | Validate email |
| [**phoneValidateGet()**](ValidationsApi.md#phoneValidateGet) | **GET** /phone/validate | Validate phone number |


## `addressValidateGet()`

```php
addressValidateGet($street, $city, $postcode, $x_evermile_trace_id, $x_evermile_merchant_id, $country, $coordinates, $allow_nationwide)
```

Validate address

Validate that an address is located in an area served by the Evermile delivery network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$street = Oxford Rd.; // string | The street for delivery
$city = London; // string | The city for delivery
$postcode = W1S 3PT; // string | The postal code for delivery
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$country = UK; // string | 2-letter code for the country for delivery
$coordinates = 51.528596197212174,-0.1199161745400151; // string | The (lat, lng) coordinates. Not required, but will be used if provided.
$allow_nationwide = True; // bool | Whether to allow nationwide search

try {
    $apiInstance->addressValidateGet($street, $city, $postcode, $x_evermile_trace_id, $x_evermile_merchant_id, $country, $coordinates, $allow_nationwide);
} catch (Exception $e) {
    echo 'Exception when calling ValidationsApi->addressValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **street** | **string**| The street for delivery | |
| **city** | **string**| The city for delivery | |
| **postcode** | **string**| The postal code for delivery | |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **country** | **string**| 2-letter code for the country for delivery | [optional] |
| **coordinates** | **string**| The (lat, lng) coordinates. Not required, but will be used if provided. | [optional] |
| **allow_nationwide** | **bool**| Whether to allow nationwide search | [optional] |

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

## `emailValidateGet()`

```php
emailValidateGet($email, $x_evermile_trace_id, $x_evermile_merchant_id)
```

Validate email

Validate that an email is valid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = customer@evermile.io; // string | The email to validate
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.

try {
    $apiInstance->emailValidateGet($email, $x_evermile_trace_id, $x_evermile_merchant_id);
} catch (Exception $e) {
    echo 'Exception when calling ValidationsApi->emailValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| The email to validate | |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |

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

## `phoneValidateGet()`

```php
phoneValidateGet($phone, $x_evermile_trace_id, $x_evermile_merchant_id)
```

Validate phone number

Validate that a phone number is valid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 441242240310; // string | The phone number to validate
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.

try {
    $apiInstance->phoneValidateGet($phone, $x_evermile_trace_id, $x_evermile_merchant_id);
} catch (Exception $e) {
    echo 'Exception when calling ValidationsApi->phoneValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| The phone number to validate | |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |

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
