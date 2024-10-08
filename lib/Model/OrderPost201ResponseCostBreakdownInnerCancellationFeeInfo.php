<?php
/**
 * OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo
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
 * OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderPost201ResponseCostBreakdownInnerCancellationFeeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_order_post_201_response_costBreakdown_inner_cancellationFeeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancellation_fee_type' => 'string',
        'percent' => 'int',
        'original_cost' => '\OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cancellation_fee_type' => null,
        'percent' => 'int64',
        'original_cost' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cancellation_fee_type' => false,
        'percent' => false,
        'original_cost' => false
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
        'cancellation_fee_type' => 'cancellationFeeType',
        'percent' => 'percent',
        'original_cost' => 'originalCost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancellation_fee_type' => 'setCancellationFeeType',
        'percent' => 'setPercent',
        'original_cost' => 'setOriginalCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancellation_fee_type' => 'getCancellationFeeType',
        'percent' => 'getPercent',
        'original_cost' => 'getOriginalCost'
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

    public const CANCELLATION_FEE_TYPE_FREE_CANCELLATION = 'freeCancellation';
    public const CANCELLATION_FEE_TYPE_REGULAR_CANCELLATION_FEE = 'regularCancellationFee';
    public const CANCELLATION_FEE_TYPE_LATE_CANCELLATION_FEE = 'lateCancellationFee';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCancellationFeeTypeAllowableValues()
    {
        return [
            self::CANCELLATION_FEE_TYPE_FREE_CANCELLATION,
            self::CANCELLATION_FEE_TYPE_REGULAR_CANCELLATION_FEE,
            self::CANCELLATION_FEE_TYPE_LATE_CANCELLATION_FEE,
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
        $this->setIfExists('cancellation_fee_type', $data ?? [], null);
        $this->setIfExists('percent', $data ?? [], null);
        $this->setIfExists('original_cost', $data ?? [], null);
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

        if ($this->container['cancellation_fee_type'] === null) {
            $invalidProperties[] = "'cancellation_fee_type' can't be null";
        }
        $allowedValues = $this->getCancellationFeeTypeAllowableValues();
        if (!is_null($this->container['cancellation_fee_type']) && !in_array($this->container['cancellation_fee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cancellation_fee_type', must be one of '%s'",
                $this->container['cancellation_fee_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['percent'] === null) {
            $invalidProperties[] = "'percent' can't be null";
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
     * Gets cancellation_fee_type
     *
     * @return string
     */
    public function getCancellationFeeType()
    {
        return $this->container['cancellation_fee_type'];
    }

    /**
     * Sets cancellation_fee_type
     *
     * @param string $cancellation_fee_type <u>The type of the cancellation fee</u>: <br>             <table>   <tr><td>regularCancellationFee</td>          <td>fee for cancellation</td></tr>   <tr><td>lateCancellationFee</td>      <td>fee for late cancellation</td></tr>   <tr><td>freeCancellation</td>      <td>no cancellation fee</td></tr> </table>
     *
     * @return self
     */
    public function setCancellationFeeType($cancellation_fee_type)
    {
        if (is_null($cancellation_fee_type)) {
            throw new \InvalidArgumentException('non-nullable cancellation_fee_type cannot be null');
        }
        $allowedValues = $this->getCancellationFeeTypeAllowableValues();
        if (!in_array($cancellation_fee_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cancellation_fee_type', must be one of '%s'",
                    $cancellation_fee_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cancellation_fee_type'] = $cancellation_fee_type;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return int
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param int $percent The fee percentage of the original cost
     *
     * @return self
     */
    public function setPercent($percent)
    {
        if (is_null($percent)) {
            throw new \InvalidArgumentException('non-nullable percent cannot be null');
        }
        $this->container['percent'] = $percent;

        return $this;
    }

    /**
     * Gets original_cost
     *
     * @return \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue|null
     */
    public function getOriginalCost()
    {
        return $this->container['original_cost'];
    }

    /**
     * Sets original_cost
     *
     * @param \OpenAPI\Client\Model\QuotePostRequestParcelsInnerItemsListInnerValue|null $original_cost original_cost
     *
     * @return self
     */
    public function setOriginalCost($original_cost)
    {
        if (is_null($original_cost)) {
            throw new \InvalidArgumentException('non-nullable original_cost cannot be null');
        }
        $this->container['original_cost'] = $original_cost;

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


