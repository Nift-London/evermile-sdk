<?php
/**
 * LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig
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
 * LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig Class Doc Comment
 *
 * @category Class
 * @description The store pickup configuration for the location
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LocationsGet200ResponseLocationsInnerAllOfDeliveryConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_locations_get_200_response_locations_inner_allOf_deliveryConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule' => '\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigSchedule',
        'preparation_config' => '\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfig',
        'blackout_dates' => '\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigBlackoutDatesInner[]',
        'allow_preparation_on_closed_days' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'schedule' => null,
        'preparation_config' => null,
        'blackout_dates' => null,
        'allow_preparation_on_closed_days' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'schedule' => false,
        'preparation_config' => false,
        'blackout_dates' => false,
        'allow_preparation_on_closed_days' => false
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
        'schedule' => 'schedule',
        'preparation_config' => 'preparationConfig',
        'blackout_dates' => 'blackoutDates',
        'allow_preparation_on_closed_days' => 'allowPreparationOnClosedDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule' => 'setSchedule',
        'preparation_config' => 'setPreparationConfig',
        'blackout_dates' => 'setBlackoutDates',
        'allow_preparation_on_closed_days' => 'setAllowPreparationOnClosedDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule' => 'getSchedule',
        'preparation_config' => 'getPreparationConfig',
        'blackout_dates' => 'getBlackoutDates',
        'allow_preparation_on_closed_days' => 'getAllowPreparationOnClosedDays'
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
        $this->setIfExists('schedule', $data ?? [], null);
        $this->setIfExists('preparation_config', $data ?? [], null);
        $this->setIfExists('blackout_dates', $data ?? [], null);
        $this->setIfExists('allow_preparation_on_closed_days', $data ?? [], null);
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

        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
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
     * Gets schedule
     *
     * @return \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigSchedule
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigSchedule $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        if (is_null($schedule)) {
            throw new \InvalidArgumentException('non-nullable schedule cannot be null');
        }
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets preparation_config
     *
     * @return \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfig|null
     */
    public function getPreparationConfig()
    {
        return $this->container['preparation_config'];
    }

    /**
     * Sets preparation_config
     *
     * @param \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigPreparationConfig|null $preparation_config preparation_config
     *
     * @return self
     */
    public function setPreparationConfig($preparation_config)
    {
        if (is_null($preparation_config)) {
            throw new \InvalidArgumentException('non-nullable preparation_config cannot be null');
        }
        $this->container['preparation_config'] = $preparation_config;

        return $this;
    }

    /**
     * Gets blackout_dates
     *
     * @return \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigBlackoutDatesInner[]|null
     */
    public function getBlackoutDates()
    {
        return $this->container['blackout_dates'];
    }

    /**
     * Sets blackout_dates
     *
     * @param \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerCollectionConfigBlackoutDatesInner[]|null $blackout_dates A list of blackout dates for the location
     *
     * @return self
     */
    public function setBlackoutDates($blackout_dates)
    {
        if (is_null($blackout_dates)) {
            throw new \InvalidArgumentException('non-nullable blackout_dates cannot be null');
        }
        $this->container['blackout_dates'] = $blackout_dates;

        return $this;
    }

    /**
     * Gets allow_preparation_on_closed_days
     *
     * @return bool|null
     */
    public function getAllowPreparationOnClosedDays()
    {
        return $this->container['allow_preparation_on_closed_days'];
    }

    /**
     * Sets allow_preparation_on_closed_days
     *
     * @param bool|null $allow_preparation_on_closed_days Whether to allow preparation on days the location is closed for collections
     *
     * @return self
     */
    public function setAllowPreparationOnClosedDays($allow_preparation_on_closed_days)
    {
        if (is_null($allow_preparation_on_closed_days)) {
            throw new \InvalidArgumentException('non-nullable allow_preparation_on_closed_days cannot be null');
        }
        $this->container['allow_preparation_on_closed_days'] = $allow_preparation_on_closed_days;

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


