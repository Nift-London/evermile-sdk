# OpenAPI\Client\QuotesApi

All URIs are relative to https://api.prod.evermile.io/v1/commercial, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**proposalProposalIdGet()**](QuotesApi.md#proposalProposalIdGet) | **GET** /proposal/{proposalId} | Retrieve a proposal |
| [**quoteMultiRoutePost()**](QuotesApi.md#quoteMultiRoutePost) | **POST** /quote/multiRoute | Get a quote for a route |
| [**quotePost()**](QuotesApi.md#quotePost) | **POST** /quote | Get a quote |


## `proposalProposalIdGet()`

```php
proposalProposalIdGet($proposal_id, $x_evermile_merchant_id, $x_evermile_trace_id): \OpenAPI\Client\Model\ProposalProposalIdGet200Response
```

Retrieve a proposal

Retrieve a proposal that was previously returned for a quote by its proposal ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proposal_id = 'proposal_id_example'; // string | The ID of the proposal
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform

try {
    $result = $apiInstance->proposalProposalIdGet($proposal_id, $x_evermile_merchant_id, $x_evermile_trace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->proposalProposalIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proposal_id** | **string**| The ID of the proposal | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProposalProposalIdGet200Response**](../Model/ProposalProposalIdGet200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quoteMultiRoutePost()`

```php
quoteMultiRoutePost($quote_multi_route_post_request, $x_evermile_merchant_id): \OpenAPI\Client\Model\QuoteMultiRoutePost200Response
```

Get a quote for a route

Get a set of proposals for a route with multiple dropoffs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_multi_route_post_request = new \OpenAPI\Client\Model\QuoteMultiRoutePostRequest(); // \OpenAPI\Client\Model\QuoteMultiRoutePostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.

try {
    $result = $apiInstance->quoteMultiRoutePost($quote_multi_route_post_request, $x_evermile_merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quoteMultiRoutePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quote_multi_route_post_request** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequest**](../Model/QuoteMultiRoutePostRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |

### Return type

[**\OpenAPI\Client\Model\QuoteMultiRoutePost200Response**](../Model/QuoteMultiRoutePost200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotePost()`

```php
quotePost($quote_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id): \OpenAPI\Client\Model\QuotePost200Response
```

Get a quote

Get proposals for a quote on a delivery order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Prod
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: Sandbox
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_post_request = new \OpenAPI\Client\Model\QuotePostRequest(); // \OpenAPI\Client\Model\QuotePostRequest
$x_evermile_merchant_id = 'x_evermile_merchant_id_example'; // string | The merchant ID, if using a client credentials token. Will be ignored with a regular user token.
$x_evermile_trace_id = 'x_evermile_trace_id_example'; // string | A trace ID for tracing the request through the Evermile platform
$x_evermile_store_id = 'x_evermile_store_id_example'; // string | A store ID for an order's store platform context

try {
    $result = $apiInstance->quotePost($quote_post_request, $x_evermile_merchant_id, $x_evermile_trace_id, $x_evermile_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quote_post_request** | [**\OpenAPI\Client\Model\QuotePostRequest**](../Model/QuotePostRequest.md)|  | |
| **x_evermile_merchant_id** | **string**| The merchant ID, if using a client credentials token. Will be ignored with a regular user token. | [optional] |
| **x_evermile_trace_id** | **string**| A trace ID for tracing the request through the Evermile platform | [optional] |
| **x_evermile_store_id** | **string**| A store ID for an order&#39;s store platform context | [optional] |

### Return type

[**\OpenAPI\Client\Model\QuotePost200Response**](../Model/QuotePost200Response.md)

### Authorization

[Prod](../../README.md#Prod), [Sandbox](../../README.md#Sandbox)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
