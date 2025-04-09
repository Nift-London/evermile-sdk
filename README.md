# OpenAPIClient-php

This is Evermile's commercial API for handling delivery quotes and orders

For more information, please visit [https://www.evermile.io](https://www.evermile.io).

## Installation & Usage

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

## API Endpoints

All URIs are relative to *https://api.prod.evermile.io/v1/commercial*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DraftsApi* | [**draftOrdersDelete**](docs/Api/DraftsApi.md#draftordersdelete) | **DELETE** /draft_orders | Delete a list of draft orders
*DraftsApi* | [**draftOrdersDraftOrderIdGet**](docs/Api/DraftsApi.md#draftordersdraftorderidget) | **GET** /draft_orders/{draftOrderId} | Retrieve a draft order
*DraftsApi* | [**draftOrdersGet**](docs/Api/DraftsApi.md#draftordersget) | **GET** /draft_orders | Retrieve all draft orders
*DraftsApi* | [**draftOrdersPost**](docs/Api/DraftsApi.md#draftorderspost) | **POST** /draft_orders | Save a draft order
*GDPRApi* | [**gdprCustomerPost**](docs/Api/GDPRApi.md#gdprcustomerpost) | **POST** /gdpr/customer | Customer data request
*GDPRApi* | [**gdprMerchantPost**](docs/Api/GDPRApi.md#gdprmerchantpost) | **POST** /gdpr/merchant | Merchant data request
*MyDriversApi* | [**myDriversDraftsGet**](docs/Api/MyDriversApi.md#mydriversdraftsget) | **GET** /myDrivers/drafts | Retrieve all My Drivers draft orders
*MyDriversApi* | [**myDriversDraftsPost**](docs/Api/MyDriversApi.md#mydriversdraftspost) | **POST** /myDrivers/drafts | Save a My Drivers draft order
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

- [DraftOrdersDeleteRequest](docs/Model/DraftOrdersDeleteRequest.md)
- [DraftOrdersGet200Response](docs/Model/DraftOrdersGet200Response.md)
- [DraftOrdersGet200ResponseDraftsInner](docs/Model/DraftOrdersGet200ResponseDraftsInner.md)
- [DraftOrdersGet200ResponseDraftsInnerDestinationLocationsInner](docs/Model/DraftOrdersGet200ResponseDraftsInnerDestinationLocationsInner.md)
- [DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails](docs/Model/DraftOrdersGet200ResponseDraftsInnerDropoffContactDetails.md)
- [DraftOrdersGet200ResponseDraftsInnerParcelsInner](docs/Model/DraftOrdersGet200ResponseDraftsInnerParcelsInner.md)
- [DraftOrdersGet200ResponseDraftsInnerParcelsInnerDimensions](docs/Model/DraftOrdersGet200ResponseDraftsInnerParcelsInnerDimensions.md)
- [DraftOrdersGet200ResponseDraftsInnerParcelsInnerItemsListInner](docs/Model/DraftOrdersGet200ResponseDraftsInnerParcelsInnerItemsListInner.md)
- [DraftOrdersGet200ResponseDraftsInnerPickupContactDetails](docs/Model/DraftOrdersGet200ResponseDraftsInnerPickupContactDetails.md)
- [DraftOrdersPostRequest](docs/Model/DraftOrdersPostRequest.md)
- [GdprCustomerPostRequest](docs/Model/GdprCustomerPostRequest.md)
- [LocationPut200Response](docs/Model/LocationPut200Response.md)
- [LocationPutRequest](docs/Model/LocationPutRequest.md)
- [LocationPutRequestLocation](docs/Model/LocationPutRequestLocation.md)
- [LocationsGet200Response](docs/Model/LocationsGet200Response.md)
- [LocationsGet200ResponseLocationsInner](docs/Model/LocationsGet200ResponseLocationsInner.md)
- [LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig](docs/Model/LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig.md)
- [LocationsGet200ResponseLocationsInnerAllOfSchedule](docs/Model/LocationsGet200ResponseLocationsInnerAllOfSchedule.md)
- [LocationsGet200ResponseLocationsInnerAllOfScheduleMonday](docs/Model/LocationsGet200ResponseLocationsInnerAllOfScheduleMonday.md)
- [MyDriversDraftsPostRequest](docs/Model/MyDriversDraftsPostRequest.md)
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
- [OrderPost201ResponseCustomer](docs/Model/OrderPost201ResponseCustomer.md)
- [OrderPost201ResponseEditInfo](docs/Model/OrderPost201ResponseEditInfo.md)
- [OrderPost201ResponseHappiness](docs/Model/OrderPost201ResponseHappiness.md)
- [OrderPost201ResponseOrderTrackingInfo](docs/Model/OrderPost201ResponseOrderTrackingInfo.md)
- [OrderPost201ResponseOrderTrackingInfoAllOfCollectionBarcodesInfo](docs/Model/OrderPost201ResponseOrderTrackingInfoAllOfCollectionBarcodesInfo.md)
- [OrderPost201ResponseOrderTrackingInfoAllOfCollectionBarcodesInfoRequiredBarcodesInner](docs/Model/OrderPost201ResponseOrderTrackingInfoAllOfCollectionBarcodesInfoRequiredBarcodesInner.md)
- [OrderPost201ResponseParcelsInner](docs/Model/OrderPost201ResponseParcelsInner.md)
- [OrderPost201ResponseProofOfCollectionInner](docs/Model/OrderPost201ResponseProofOfCollectionInner.md)
- [OrderPost201ResponseProperties](docs/Model/OrderPost201ResponseProperties.md)
- [OrderPost201ResponseRouteInfo](docs/Model/OrderPost201ResponseRouteInfo.md)
- [OrderPost201ResponseScheduleInfo](docs/Model/OrderPost201ResponseScheduleInfo.md)
- [OrderPost201ResponseScheduleInfoScheduleDetails](docs/Model/OrderPost201ResponseScheduleInfoScheduleDetails.md)
- [OrderPost201ResponseScheduleInfoScheduleDetailsWeekdaysInner](docs/Model/OrderPost201ResponseScheduleInfoScheduleDetailsWeekdaysInner.md)
- [OrderPost201ResponseStatus](docs/Model/OrderPost201ResponseStatus.md)
- [OrderPostRequest](docs/Model/OrderPostRequest.md)
- [OrderPostRequestDropoffContactDetails](docs/Model/OrderPostRequestDropoffContactDetails.md)
- [OrderPostRequestExternalData](docs/Model/OrderPostRequestExternalData.md)
- [OrderPostRequestPickupContactDetails](docs/Model/OrderPostRequestPickupContactDetails.md)
- [OrderPostRequestSenderContactDetails](docs/Model/OrderPostRequestSenderContactDetails.md)
- [OrdersGet200ResponseInner](docs/Model/OrdersGet200ResponseInner.md)
- [OrdersGet200ResponseInnerDropoffGeoLocation](docs/Model/OrdersGet200ResponseInnerDropoffGeoLocation.md)
- [OrdersGet200ResponseInnerPickupWindow](docs/Model/OrdersGet200ResponseInnerPickupWindow.md)
- [OrdersPaginatedHistoryGet200Response](docs/Model/OrdersPaginatedHistoryGet200Response.md)
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
- [QuotePostRequestParcelsInnerItemsListInnerExternalData](docs/Model/QuotePostRequestParcelsInnerItemsListInnerExternalData.md)
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
