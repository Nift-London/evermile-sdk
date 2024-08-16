# OpenAPIClient-php

This is Evermile's commercial API for handling delivery quotes and orders

For more information, please visit [https://www.evermile.io](https://www.evermile.io).

## Installation & Usage

## Generating new version

```
openapi-generator generate -i oapi.yaml -g php -o ./
```

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.prod.evermile.io/v1/commercial*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GDPRApi* | [**gdprCustomerPost**](docs/Api/GDPRApi.md#gdprcustomerpost) | **POST** /gdpr/customer | Customer data request
*GDPRApi* | [**gdprMerchantPost**](docs/Api/GDPRApi.md#gdprmerchantpost) | **POST** /gdpr/merchant | Merchant data request
*LocationsApi* | [**senderInfoPut**](docs/Api/LocationsApi.md#senderinfoput) | **PUT** /sender_info | Create or update a delivery location.
*LocationsApi* | [**senderInfoSenderInfoIdDelete**](docs/Api/LocationsApi.md#senderinfosenderinfoiddelete) | **DELETE** /sender_info/{senderInfoId} | Delete a delivery location.
*LocationsApi* | [**senderInfosGet**](docs/Api/LocationsApi.md#senderinfosget) | **GET** /sender_infos | Get sender and location infos
*OrdersApi* | [**orderMultiRoutePost**](docs/Api/OrdersApi.md#ordermultiroutepost) | **POST** /order/multiRoute | Order a route with multiple orders
*OrdersApi* | [**orderOrderIdDelete**](docs/Api/OrdersApi.md#orderorderiddelete) | **DELETE** /order/{orderId} | Cancel an order
*OrdersApi* | [**orderOrderIdGet**](docs/Api/OrdersApi.md#orderorderidget) | **GET** /order/{orderId} | Fetch order details
*OrdersApi* | [**orderOrderIdLabelGet**](docs/Api/OrdersApi.md#orderorderidlabelget) | **GET** /order/{orderId}/label | Create a label for an order
*OrdersApi* | [**orderOrderIdLiveTrackingGet**](docs/Api/OrdersApi.md#orderorderidlivetrackingget) | **GET** /order/{orderId}/liveTracking | Fetch live order tracking
*OrdersApi* | [**orderOrderIdPatch**](docs/Api/OrdersApi.md#orderorderidpatch) | **PATCH** /order/{orderId} | Update order details
*OrdersApi* | [**orderPost**](docs/Api/OrdersApi.md#orderpost) | **POST** /order | Order a delivery
*OrdersApi* | [**ordersGet**](docs/Api/OrdersApi.md#ordersget) | **GET** /orders | Get orders
*OrdersApi* | [**ordersPaginatedHistoryGet**](docs/Api/OrdersApi.md#orderspaginatedhistoryget) | **GET** /orders/paginatedHistory | Get orders history with pagination
*PickupLocationsApi* | [**locationPut**](docs/Api/PickupLocationsApi.md#locationput) | **PUT** /location | Create or update a delivery location
*PickupLocationsApi* | [**locationsGet**](docs/Api/PickupLocationsApi.md#locationsget) | **GET** /locations | Get pickup locations
*PickupLocationsApi* | [**locationsLocationIdDelete**](docs/Api/PickupLocationsApi.md#locationslocationiddelete) | **DELETE** /locations/{locationId} | Delete a pickup location
*QuotesApi* | [**proposalProposalIdGet**](docs/Api/QuotesApi.md#proposalproposalidget) | **GET** /proposal/{proposalId} | Retrieve a proposal
*QuotesApi* | [**quoteMultiRoutePost**](docs/Api/QuotesApi.md#quotemultiroutepost) | **POST** /quote/multiRoute | Get a quote for a route
*QuotesApi* | [**quotePost**](docs/Api/QuotesApi.md#quotepost) | **POST** /quote | Get a quote
*SchemaApi* | [**schemaGet**](docs/Api/SchemaApi.md#schemaget) | **GET** /schema | API schema
*ValidationsApi* | [**addressValidateGet**](docs/Api/ValidationsApi.md#addressvalidateget) | **GET** /address/validate | Validate address
*ValidationsApi* | [**emailValidateGet**](docs/Api/ValidationsApi.md#emailvalidateget) | **GET** /email/validate | Validate email
*ValidationsApi* | [**phoneValidateGet**](docs/Api/ValidationsApi.md#phonevalidateget) | **GET** /phone/validate | Validate phone number

## Models

- [GdprCustomerPostRequest](docs/Model/GdprCustomerPostRequest.md)
- [LocationPut200Response](docs/Model/LocationPut200Response.md)
- [LocationPutRequest](docs/Model/LocationPutRequest.md)
- [LocationPutRequestLocation](docs/Model/LocationPutRequestLocation.md)
- [LocationsGet200Response](docs/Model/LocationsGet200Response.md)
- [LocationsGet200ResponseLocationsInner](docs/Model/LocationsGet200ResponseLocationsInner.md)
- [LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig](docs/Model/LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig.md)
- [LocationsGet200ResponseLocationsInnerAllOfSchedule](docs/Model/LocationsGet200ResponseLocationsInnerAllOfSchedule.md)
- [LocationsGet200ResponseLocationsInnerAllOfScheduleMonday](docs/Model/LocationsGet200ResponseLocationsInnerAllOfScheduleMonday.md)
- [OrderMultiRoutePost201Response](docs/Model/OrderMultiRoutePost201Response.md)
- [OrderMultiRoutePost201ResponseRoutesInner](docs/Model/OrderMultiRoutePost201ResponseRoutesInner.md)
- [OrderMultiRoutePostRequest](docs/Model/OrderMultiRoutePostRequest.md)
- [OrderMultiRoutePostRequestAdditionalDropoffInfoInner](docs/Model/OrderMultiRoutePostRequestAdditionalDropoffInfoInner.md)
- [OrderOrderIdDelete402Response](docs/Model/OrderOrderIdDelete402Response.md)
- [OrderOrderIdPatchRequest](docs/Model/OrderOrderIdPatchRequest.md)
- [OrderPost201Response](docs/Model/OrderPost201Response.md)
- [OrderPost201ResponseCostBreakdownInner](docs/Model/OrderPost201ResponseCostBreakdownInner.md)
- [OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo](docs/Model/OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo.md)
- [OrderPost201ResponseCostBreakdownInnerLiabilityInfo](docs/Model/OrderPost201ResponseCostBreakdownInnerLiabilityInfo.md)
- [OrderPost201ResponseCostBreakdownInnerWaiverDetails](docs/Model/OrderPost201ResponseCostBreakdownInnerWaiverDetails.md)
- [OrderPost201ResponseCourierLocation](docs/Model/OrderPost201ResponseCourierLocation.md)
- [OrderPost201ResponseHappiness](docs/Model/OrderPost201ResponseHappiness.md)
- [OrderPost201ResponseParcelsInner](docs/Model/OrderPost201ResponseParcelsInner.md)
- [OrderPostRequest](docs/Model/OrderPostRequest.md)
- [OrderPostRequestDropoffContactDetails](docs/Model/OrderPostRequestDropoffContactDetails.md)
- [OrderPostRequestPickupContactDetails](docs/Model/OrderPostRequestPickupContactDetails.md)
- [OrdersPaginatedHistoryGet200Response](docs/Model/OrdersPaginatedHistoryGet200Response.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInner](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInner.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerCustomer](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerCustomer.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerDropoffGeoLocation](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerDropoffGeoLocation.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerEditInfo](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerEditInfo.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerPickupWindow](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerPickupWindow.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerProofOfCollectionInner](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerProofOfCollectionInner.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerRouteInfo](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerRouteInfo.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfo](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfo.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetails](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetails.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetailsWeekdaysInner](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerScheduleInfoScheduleDetailsWeekdaysInner.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerSenderContactDetails.md)
- [OrdersPaginatedHistoryGet200ResponseResultsInnerStatus](docs/Model/OrdersPaginatedHistoryGet200ResponseResultsInnerStatus.md)
- [ProposalProposalIdGet200Response](docs/Model/ProposalProposalIdGet200Response.md)
- [QuoteMultiRoutePost200Response](docs/Model/QuoteMultiRoutePost200Response.md)
- [QuoteMultiRoutePost200ResponseProposalsInner](docs/Model/QuoteMultiRoutePost200ResponseProposalsInner.md)
- [QuoteMultiRoutePost200ResponseProposalsInnerPrice](docs/Model/QuoteMultiRoutePost200ResponseProposalsInnerPrice.md)
- [QuoteMultiRoutePost200ResponseProposalsInnerPricePerDrop](docs/Model/QuoteMultiRoutePost200ResponseProposalsInnerPricePerDrop.md)
- [QuoteMultiRoutePost200ResponseProposalsInnerPriceVat](docs/Model/QuoteMultiRoutePost200ResponseProposalsInnerPriceVat.md)
- [QuoteMultiRoutePost200ResponseProposalsInnerRoutesInner](docs/Model/QuoteMultiRoutePost200ResponseProposalsInnerRoutesInner.md)
- [QuoteMultiRoutePost200ResponseProposalsInnerRoutesInnerPickupTasksInner](docs/Model/QuoteMultiRoutePost200ResponseProposalsInnerRoutesInnerPickupTasksInner.md)
- [QuoteMultiRoutePostRequest](docs/Model/QuoteMultiRoutePostRequest.md)
- [QuoteMultiRoutePostRequestOriginsInner](docs/Model/QuoteMultiRoutePostRequestOriginsInner.md)
- [QuoteMultiRoutePostRequestOriginsInnerLocationConstraints](docs/Model/QuoteMultiRoutePostRequestOriginsInnerLocationConstraints.md)
- [QuoteMultiRoutePostRequestOriginsInnerLocationConstraintsTimeWindow](docs/Model/QuoteMultiRoutePostRequestOriginsInnerLocationConstraintsTimeWindow.md)
- [QuoteMultiRoutePostRequestParams](docs/Model/QuoteMultiRoutePostRequestParams.md)
- [QuoteMultiRoutePostRequestParamsOptimizationParamsInner](docs/Model/QuoteMultiRoutePostRequestParamsOptimizationParamsInner.md)
- [QuoteMultiRoutePostRequestParamsOptimizationParamsInnerDriversScheduleInner](docs/Model/QuoteMultiRoutePostRequestParamsOptimizationParamsInnerDriversScheduleInner.md)
- [QuoteMultiRoutePostRequestParamsOptimizationParamsInnerDriversScheduleInnerMonday](docs/Model/QuoteMultiRoutePostRequestParamsOptimizationParamsInnerDriversScheduleInnerMonday.md)
- [QuotePost200Response](docs/Model/QuotePost200Response.md)
- [QuotePost200ResponseCancellationFee](docs/Model/QuotePost200ResponseCancellationFee.md)
- [QuotePost200ResponseCurrentPrice](docs/Model/QuotePost200ResponseCurrentPrice.md)
- [QuotePost200ResponseDateProposalsInner](docs/Model/QuotePost200ResponseDateProposalsInner.md)
- [QuotePost200ResponseDateProposalsInnerErrorReason](docs/Model/QuotePost200ResponseDateProposalsInnerErrorReason.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInner](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInner.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposal](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposal.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfo](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfo.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfoContactInfo](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfoContactInfo.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfoContactInfoAddress](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfoContactInfoAddress.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfoHandoffTime](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalHandoffInfoHandoffTime.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalOrigin](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalOrigin.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalOriginGeoLocation](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalOriginGeoLocation.md)
- [QuotePost200ResponseDateProposalsInnerProposalsInnerProposalSpecificLiabilityCoverage](docs/Model/QuotePost200ResponseDateProposalsInnerProposalsInnerProposalSpecificLiabilityCoverage.md)
- [QuotePost200ResponseOverrideDisplayHours](docs/Model/QuotePost200ResponseOverrideDisplayHours.md)
- [QuotePostRequest](docs/Model/QuotePostRequest.md)
- [QuotePostRequestDestinationLocationsInner](docs/Model/QuotePostRequestDestinationLocationsInner.md)
- [QuotePostRequestDestinationLocationsInnerDeliverySlot](docs/Model/QuotePostRequestDestinationLocationsInnerDeliverySlot.md)
- [QuotePostRequestParcelsInner](docs/Model/QuotePostRequestParcelsInner.md)
- [QuotePostRequestParcelsInnerDimensions](docs/Model/QuotePostRequestParcelsInnerDimensions.md)
- [QuotePostRequestParcelsInnerItemsListInner](docs/Model/QuotePostRequestParcelsInnerItemsListInner.md)
- [QuotePostRequestParcelsInnerItemsListInnerCollectionConfig](docs/Model/QuotePostRequestParcelsInnerItemsListInnerCollectionConfig.md)
- [QuotePostRequestParcelsInnerItemsListInnerCollectionConfigBlackoutDatesInner](docs/Model/QuotePostRequestParcelsInnerItemsListInnerCollectionConfigBlackoutDatesInner.md)
- [QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfig](docs/Model/QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfig.md)
- [QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfigPreparationTime](docs/Model/QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfigPreparationTime.md)
- [QuotePostRequestParcelsInnerItemsListInnerCollectionConfigSchedule](docs/Model/QuotePostRequestParcelsInnerItemsListInnerCollectionConfigSchedule.md)
- [QuotePostRequestParcelsInnerItemsListInnerCollectionConfigScheduleMonday](docs/Model/QuotePostRequestParcelsInnerItemsListInnerCollectionConfigScheduleMonday.md)
- [QuotePostRequestParcelsInnerItemsListInnerValue](docs/Model/QuotePostRequestParcelsInnerItemsListInnerValue.md)
- [QuotePostRequestParcelsInnerItemsListInnerValueDiscount](docs/Model/QuotePostRequestParcelsInnerItemsListInnerValueDiscount.md)
- [QuotePostRequestPickupInfo](docs/Model/QuotePostRequestPickupInfo.md)
- [QuotePostRequestPickupInfoOneOf](docs/Model/QuotePostRequestPickupInfoOneOf.md)
- [QuotePostRequestPickupInfoOneOf1](docs/Model/QuotePostRequestPickupInfoOneOf1.md)
- [QuotePostRequestPickupInfoOneOf1Inner](docs/Model/QuotePostRequestPickupInfoOneOf1Inner.md)
- [QuotePostRequestPickupInfoOneOf1InnerAddress](docs/Model/QuotePostRequestPickupInfoOneOf1InnerAddress.md)
- [QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation](docs/Model/QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation.md)
- [QuotePostRequestPickupInfoOneOf1InnerDateRange](docs/Model/QuotePostRequestPickupInfoOneOf1InnerDateRange.md)
- [QuotePostRequestPickupInfoOneOfPickupLocationsInner](docs/Model/QuotePostRequestPickupInfoOneOfPickupLocationsInner.md)
- [QuotePostRequestPickupInfoOneOfPickupLocationsInnerDateRange](docs/Model/QuotePostRequestPickupInfoOneOfPickupLocationsInnerDateRange.md)
- [QuotePostRequestPickupWindow](docs/Model/QuotePostRequestPickupWindow.md)

## Authorization

Authentication schemes defined for the API:
### Sandbox

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **order**: Order deliveries
    - **read**: Get quotes and read information about deliveries

### Prod

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **order**: Order deliveries
    - **read**: Get quotes and read information about deliveries

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@evermile.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
