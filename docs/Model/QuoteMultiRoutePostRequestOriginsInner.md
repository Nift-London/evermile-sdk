# # QuoteMultiRoutePostRequestOriginsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_id** | **string** | A required reference ID for the location. Must be unique within the context of a route. |
**location_id** | **string** | The location ID in the Evermile database | [optional]
**location** | [**\OpenAPI\Client\Model\QuotePostRequestDestinationLocationsInner**](QuotePostRequestDestinationLocationsInner.md) |  | [optional]
**parcel_reference_ids** | **string[]** | A list of parcel reference ids that should be picked up or dropped off at the current location. |
**location_constraints** | [**\OpenAPI\Client\Model\QuoteMultiRoutePostRequestOriginsInnerLocationConstraints**](QuoteMultiRoutePostRequestOriginsInnerLocationConstraints.md) |  | [optional]
**handling** | **string[]** | Handling instructions for the parcels | [optional]
**proof_requirement** | **string[]** | Proof of delivery requirements for a parcel | [optional]
**instructions** | **string** | Additional handling instructions for the packages | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
