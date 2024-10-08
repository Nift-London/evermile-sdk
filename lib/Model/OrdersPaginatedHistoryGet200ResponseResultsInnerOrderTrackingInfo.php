<?php
/**
 * OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Evermile Commercial Quotes and Booking API
 *
 * This is Evermile's commercial API for handling delivery quotes and orders
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@evermile.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo Class Doc Comment
 *
 * @category Class
 * @description Live tracking info for an order
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrdersPaginatedHistoryGet200ResponseResultsInnerOrderTrackingInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_orders_paginatedHistory_get_200_response_results_inner_orderTrackingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_url' => 'string',
        'carrier_tracking_url' => 'string',
        'carrier_delivery_url' => 'string',
        'courier_location' => '\OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation',
        'dropoff_eta' => '\DateTime',
        'pickup_eta' => '\DateTime',
        'courier_name' => 'string',
        'courier_phone' => 'string',
        'dropoff_window_start' => '\DateTime',
        'dropoff_window_end' => '\DateTime',
        'dropoff_window_type' => 'string',
        'pickup_window_start' => '\DateTime',
        'pickup_window_end' => '\DateTime',
        'is_courier_assigned' => 'bool',
        'is_on_way_to_pickup' => 'bool',
        'vehicle_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_url' => 'url',
        'carrier_tracking_url' => null,
        'carrier_delivery_url' => 'url',
        'courier_location' => null,
        'dropoff_eta' => 'date-time',
        'pickup_eta' => 'date-time',
        'courier_name' => null,
        'courier_phone' => null,
        'dropoff_window_start' => 'date-time',
        'dropoff_window_end' => 'date-time',
        'dropoff_window_type' => null,
        'pickup_window_start' => 'date-time',
        'pickup_window_end' => 'date-time',
        'is_courier_assigned' => null,
        'is_on_way_to_pickup' => null,
        'vehicle_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label_url' => false,
        'carrier_tracking_url' => false,
        'carrier_delivery_url' => false,
        'courier_location' => false,
        'dropoff_eta' => false,
        'pickup_eta' => false,
        'courier_name' => false,
        'courier_phone' => false,
        'dropoff_window_start' => false,
        'dropoff_window_end' => false,
        'dropoff_window_type' => false,
        'pickup_window_start' => false,
        'pickup_window_end' => false,
        'is_courier_assigned' => false,
        'is_on_way_to_pickup' => false,
        'vehicle_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label_url' => 'labelUrl',
        'carrier_tracking_url' => 'carrierTrackingUrl',
        'carrier_delivery_url' => 'carrierDeliveryUrl',
        'courier_location' => 'courierLocation',
        'dropoff_eta' => 'dropoffEta',
        'pickup_eta' => 'pickupEta',
        'courier_name' => 'courierName',
        'courier_phone' => 'courierPhone',
        'dropoff_window_start' => 'dropoffWindowStart',
        'dropoff_window_end' => 'dropoffWindowEnd',
        'dropoff_window_type' => 'dropoffWindowType',
        'pickup_window_start' => 'pickupWindowStart',
        'pickup_window_end' => 'pickupWindowEnd',
        'is_courier_assigned' => 'isCourierAssigned',
        'is_on_way_to_pickup' => 'isOnWayToPickup',
        'vehicle_type' => 'vehicleType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_url' => 'setLabelUrl',
        'carrier_tracking_url' => 'setCarrierTrackingUrl',
        'carrier_delivery_url' => 'setCarrierDeliveryUrl',
        'courier_location' => 'setCourierLocation',
        'dropoff_eta' => 'setDropoffEta',
        'pickup_eta' => 'setPickupEta',
        'courier_name' => 'setCourierName',
        'courier_phone' => 'setCourierPhone',
        'dropoff_window_start' => 'setDropoffWindowStart',
        'dropoff_window_end' => 'setDropoffWindowEnd',
        'dropoff_window_type' => 'setDropoffWindowType',
        'pickup_window_start' => 'setPickupWindowStart',
        'pickup_window_end' => 'setPickupWindowEnd',
        'is_courier_assigned' => 'setIsCourierAssigned',
        'is_on_way_to_pickup' => 'setIsOnWayToPickup',
        'vehicle_type' => 'setVehicleType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_url' => 'getLabelUrl',
        'carrier_tracking_url' => 'getCarrierTrackingUrl',
        'carrier_delivery_url' => 'getCarrierDeliveryUrl',
        'courier_location' => 'getCourierLocation',
        'dropoff_eta' => 'getDropoffEta',
        'pickup_eta' => 'getPickupEta',
        'courier_name' => 'getCourierName',
        'courier_phone' => 'getCourierPhone',
        'dropoff_window_start' => 'getDropoffWindowStart',
        'dropoff_window_end' => 'getDropoffWindowEnd',
        'dropoff_window_type' => 'getDropoffWindowType',
        'pickup_window_start' => 'getPickupWindowStart',
        'pickup_window_end' => 'getPickupWindowEnd',
        'is_courier_assigned' => 'getIsCourierAssigned',
        'is_on_way_to_pickup' => 'getIsOnWayToPickup',
        'vehicle_type' => 'getVehicleType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const DROPOFF_WINDOW_TYPE_COMMITTED = 'committed';
    public const DROPOFF_WINDOW_TYPE_ESTIMATED = 'estimated';
    public const DROPOFF_WINDOW_TYPE_EXPRESS = 'express';
    public const VEHICLE_TYPE_PUSHBIKE = 'pushbike';
    public const VEHICLE_TYPE_MOTORBIKE = 'motorbike';
    public const VEHICLE_TYPE_CARGO_BIKE = 'cargo_bike';
    public const VEHICLE_TYPE_CAR = 'car';
    public const VEHICLE_TYPE_SMALL_VAN = 'small_van';
    public const VEHICLE_TYPE_MEDIUM_VAN = 'medium_van';
    public const VEHICLE_TYPE_LARGE_VAN = 'large_van';
    public const VEHICLE_TYPE_XLARGE_VAN = 'xlarge_van';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDropoffWindowTypeAllowableValues()
    {
        return [
            self::DROPOFF_WINDOW_TYPE_COMMITTED,
            self::DROPOFF_WINDOW_TYPE_ESTIMATED,
            self::DROPOFF_WINDOW_TYPE_EXPRESS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVehicleTypeAllowableValues()
    {
        return [
            self::VEHICLE_TYPE_PUSHBIKE,
            self::VEHICLE_TYPE_MOTORBIKE,
            self::VEHICLE_TYPE_CARGO_BIKE,
            self::VEHICLE_TYPE_CAR,
            self::VEHICLE_TYPE_SMALL_VAN,
            self::VEHICLE_TYPE_MEDIUM_VAN,
            self::VEHICLE_TYPE_LARGE_VAN,
            self::VEHICLE_TYPE_XLARGE_VAN,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('label_url', $data ?? [], null);
        $this->setIfExists('carrier_tracking_url', $data ?? [], null);
        $this->setIfExists('carrier_delivery_url', $data ?? [], null);
        $this->setIfExists('courier_location', $data ?? [], null);
        $this->setIfExists('dropoff_eta', $data ?? [], null);
        $this->setIfExists('pickup_eta', $data ?? [], null);
        $this->setIfExists('courier_name', $data ?? [], null);
        $this->setIfExists('courier_phone', $data ?? [], null);
        $this->setIfExists('dropoff_window_start', $data ?? [], null);
        $this->setIfExists('dropoff_window_end', $data ?? [], null);
        $this->setIfExists('dropoff_window_type', $data ?? [], null);
        $this->setIfExists('pickup_window_start', $data ?? [], null);
        $this->setIfExists('pickup_window_end', $data ?? [], null);
        $this->setIfExists('is_courier_assigned', $data ?? [], null);
        $this->setIfExists('is_on_way_to_pickup', $data ?? [], null);
        $this->setIfExists('vehicle_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDropoffWindowTypeAllowableValues();
        if (!is_null($this->container['dropoff_window_type']) && !in_array($this->container['dropoff_window_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dropoff_window_type', must be one of '%s'",
                $this->container['dropoff_window_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['is_courier_assigned'] === null) {
            $invalidProperties[] = "'is_courier_assigned' can't be null";
        }
        $allowedValues = $this->getVehicleTypeAllowableValues();
        if (!is_null($this->container['vehicle_type']) && !in_array($this->container['vehicle_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vehicle_type', must be one of '%s'",
                $this->container['vehicle_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets label_url
     *
     * @return string|null
     */
    public function getLabelUrl()
    {
        return $this->container['label_url'];
    }

    /**
     * Sets label_url
     *
     * @param string|null $label_url The URL to download the label (if exists)
     *
     * @return self
     */
    public function setLabelUrl($label_url)
    {
        if (is_null($label_url)) {
            throw new \InvalidArgumentException('non-nullable label_url cannot be null');
        }
        $this->container['label_url'] = $label_url;

        return $this;
    }

    /**
     * Gets carrier_tracking_url
     *
     * @return string|null
     */
    public function getCarrierTrackingUrl()
    {
        return $this->container['carrier_tracking_url'];
    }

    /**
     * Sets carrier_tracking_url
     *
     * @param string|null $carrier_tracking_url The carrier tracking URL for this order (if exists)
     *
     * @return self
     */
    public function setCarrierTrackingUrl($carrier_tracking_url)
    {
        if (is_null($carrier_tracking_url)) {
            throw new \InvalidArgumentException('non-nullable carrier_tracking_url cannot be null');
        }
        $this->container['carrier_tracking_url'] = $carrier_tracking_url;

        return $this;
    }

    /**
     * Gets carrier_delivery_url
     *
     * @return string|null
     */
    public function getCarrierDeliveryUrl()
    {
        return $this->container['carrier_delivery_url'];
    }

    /**
     * Sets carrier_delivery_url
     *
     * @param string|null $carrier_delivery_url The URL to find the delivery in the carrier (if exists)
     *
     * @return self
     */
    public function setCarrierDeliveryUrl($carrier_delivery_url)
    {
        if (is_null($carrier_delivery_url)) {
            throw new \InvalidArgumentException('non-nullable carrier_delivery_url cannot be null');
        }
        $this->container['carrier_delivery_url'] = $carrier_delivery_url;

        return $this;
    }

    /**
     * Gets courier_location
     *
     * @return \OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation|null
     */
    public function getCourierLocation()
    {
        return $this->container['courier_location'];
    }

    /**
     * Sets courier_location
     *
     * @param \OpenAPI\Client\Model\QuotePostRequestPickupInfoOneOf1InnerAddressGeoLocation|null $courier_location courier_location
     *
     * @return self
     */
    public function setCourierLocation($courier_location)
    {
        if (is_null($courier_location)) {
            throw new \InvalidArgumentException('non-nullable courier_location cannot be null');
        }
        $this->container['courier_location'] = $courier_location;

        return $this;
    }

    /**
     * Gets dropoff_eta
     *
     * @return \DateTime|null
     */
    public function getDropoffEta()
    {
        return $this->container['dropoff_eta'];
    }

    /**
     * Sets dropoff_eta
     *
     * @param \DateTime|null $dropoff_eta The dropoff ETA in ISO8601 format
     *
     * @return self
     */
    public function setDropoffEta($dropoff_eta)
    {
        if (is_null($dropoff_eta)) {
            throw new \InvalidArgumentException('non-nullable dropoff_eta cannot be null');
        }
        $this->container['dropoff_eta'] = $dropoff_eta;

        return $this;
    }

    /**
     * Gets pickup_eta
     *
     * @return \DateTime|null
     */
    public function getPickupEta()
    {
        return $this->container['pickup_eta'];
    }

    /**
     * Sets pickup_eta
     *
     * @param \DateTime|null $pickup_eta The pickup ETA in ISO8601 format
     *
     * @return self
     */
    public function setPickupEta($pickup_eta)
    {
        if (is_null($pickup_eta)) {
            throw new \InvalidArgumentException('non-nullable pickup_eta cannot be null');
        }
        $this->container['pickup_eta'] = $pickup_eta;

        return $this;
    }

    /**
     * Gets courier_name
     *
     * @return string|null
     */
    public function getCourierName()
    {
        return $this->container['courier_name'];
    }

    /**
     * Sets courier_name
     *
     * @param string|null $courier_name The courier full name
     *
     * @return self
     */
    public function setCourierName($courier_name)
    {
        if (is_null($courier_name)) {
            throw new \InvalidArgumentException('non-nullable courier_name cannot be null');
        }
        $this->container['courier_name'] = $courier_name;

        return $this;
    }

    /**
     * Gets courier_phone
     *
     * @return string|null
     */
    public function getCourierPhone()
    {
        return $this->container['courier_phone'];
    }

    /**
     * Sets courier_phone
     *
     * @param string|null $courier_phone The courier phone number
     *
     * @return self
     */
    public function setCourierPhone($courier_phone)
    {
        if (is_null($courier_phone)) {
            throw new \InvalidArgumentException('non-nullable courier_phone cannot be null');
        }
        $this->container['courier_phone'] = $courier_phone;

        return $this;
    }

    /**
     * Gets dropoff_window_start
     *
     * @return \DateTime|null
     */
    public function getDropoffWindowStart()
    {
        return $this->container['dropoff_window_start'];
    }

    /**
     * Sets dropoff_window_start
     *
     * @param \DateTime|null $dropoff_window_start The updated dropoff widnow start in ISO8601 format
     *
     * @return self
     */
    public function setDropoffWindowStart($dropoff_window_start)
    {
        if (is_null($dropoff_window_start)) {
            throw new \InvalidArgumentException('non-nullable dropoff_window_start cannot be null');
        }
        $this->container['dropoff_window_start'] = $dropoff_window_start;

        return $this;
    }

    /**
     * Gets dropoff_window_end
     *
     * @return \DateTime|null
     */
    public function getDropoffWindowEnd()
    {
        return $this->container['dropoff_window_end'];
    }

    /**
     * Sets dropoff_window_end
     *
     * @param \DateTime|null $dropoff_window_end The updated dropoff window end in ISO8601 format
     *
     * @return self
     */
    public function setDropoffWindowEnd($dropoff_window_end)
    {
        if (is_null($dropoff_window_end)) {
            throw new \InvalidArgumentException('non-nullable dropoff_window_end cannot be null');
        }
        $this->container['dropoff_window_end'] = $dropoff_window_end;

        return $this;
    }

    /**
     * Gets dropoff_window_type
     *
     * @return string|null
     */
    public function getDropoffWindowType()
    {
        return $this->container['dropoff_window_type'];
    }

    /**
     * Sets dropoff_window_type
     *
     * @param string|null $dropoff_window_type dropoff_window_type
     *
     * @return self
     */
    public function setDropoffWindowType($dropoff_window_type)
    {
        if (is_null($dropoff_window_type)) {
            throw new \InvalidArgumentException('non-nullable dropoff_window_type cannot be null');
        }
        $allowedValues = $this->getDropoffWindowTypeAllowableValues();
        if (!in_array($dropoff_window_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dropoff_window_type', must be one of '%s'",
                    $dropoff_window_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dropoff_window_type'] = $dropoff_window_type;

        return $this;
    }

    /**
     * Gets pickup_window_start
     *
     * @return \DateTime|null
     */
    public function getPickupWindowStart()
    {
        return $this->container['pickup_window_start'];
    }

    /**
     * Sets pickup_window_start
     *
     * @param \DateTime|null $pickup_window_start The updated pickup widnow start in ISO8601 format
     *
     * @return self
     */
    public function setPickupWindowStart($pickup_window_start)
    {
        if (is_null($pickup_window_start)) {
            throw new \InvalidArgumentException('non-nullable pickup_window_start cannot be null');
        }
        $this->container['pickup_window_start'] = $pickup_window_start;

        return $this;
    }

    /**
     * Gets pickup_window_end
     *
     * @return \DateTime|null
     */
    public function getPickupWindowEnd()
    {
        return $this->container['pickup_window_end'];
    }

    /**
     * Sets pickup_window_end
     *
     * @param \DateTime|null $pickup_window_end The updated pickup window end in ISO8601 format
     *
     * @return self
     */
    public function setPickupWindowEnd($pickup_window_end)
    {
        if (is_null($pickup_window_end)) {
            throw new \InvalidArgumentException('non-nullable pickup_window_end cannot be null');
        }
        $this->container['pickup_window_end'] = $pickup_window_end;

        return $this;
    }

    /**
     * Gets is_courier_assigned
     *
     * @return bool
     */
    public function getIsCourierAssigned()
    {
        return $this->container['is_courier_assigned'];
    }

    /**
     * Sets is_courier_assigned
     *
     * @param bool $is_courier_assigned Indicate whether a courier is assigned for this order
     *
     * @return self
     */
    public function setIsCourierAssigned($is_courier_assigned)
    {
        if (is_null($is_courier_assigned)) {
            throw new \InvalidArgumentException('non-nullable is_courier_assigned cannot be null');
        }
        $this->container['is_courier_assigned'] = $is_courier_assigned;

        return $this;
    }

    /**
     * Gets is_on_way_to_pickup
     *
     * @return bool|null
     */
    public function getIsOnWayToPickup()
    {
        return $this->container['is_on_way_to_pickup'];
    }

    /**
     * Sets is_on_way_to_pickup
     *
     * @param bool|null $is_on_way_to_pickup Indicate whether a courier is on the way to pick up this order
     *
     * @return self
     */
    public function setIsOnWayToPickup($is_on_way_to_pickup)
    {
        if (is_null($is_on_way_to_pickup)) {
            throw new \InvalidArgumentException('non-nullable is_on_way_to_pickup cannot be null');
        }
        $this->container['is_on_way_to_pickup'] = $is_on_way_to_pickup;

        return $this;
    }

    /**
     * Gets vehicle_type
     *
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->container['vehicle_type'];
    }

    /**
     * Sets vehicle_type
     *
     * @param string|null $vehicle_type vehicle_type
     *
     * @return self
     */
    public function setVehicleType($vehicle_type)
    {
        if (is_null($vehicle_type)) {
            throw new \InvalidArgumentException('non-nullable vehicle_type cannot be null');
        }
        $allowedValues = $this->getVehicleTypeAllowableValues();
        if (!in_array($vehicle_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vehicle_type', must be one of '%s'",
                    $vehicle_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vehicle_type'] = $vehicle_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


