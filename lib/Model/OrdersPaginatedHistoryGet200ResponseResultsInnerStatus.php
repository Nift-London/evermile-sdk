<?php
/**
 * OrdersPaginatedHistoryGet200ResponseResultsInnerStatus
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
 * OrdersPaginatedHistoryGet200ResponseResultsInnerStatus Class Doc Comment
 *
 * @category Class
 * @description An order status with reporting information
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrdersPaginatedHistoryGet200ResponseResultsInnerStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_orders_paginatedHistory_get_200_response_results_inner_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_status' => 'string',
        'reporter' => 'string',
        'reporting_time' => '\DateTime',
        'manually_updated' => 'bool',
        'life_cycle_status' => 'string',
        'delayed_in_transit' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_status' => null,
        'reporter' => null,
        'reporting_time' => 'date-time',
        'manually_updated' => null,
        'life_cycle_status' => null,
        'delayed_in_transit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_status' => false,
        'reporter' => false,
        'reporting_time' => false,
        'manually_updated' => false,
        'life_cycle_status' => false,
        'delayed_in_transit' => false
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
        'order_status' => 'orderStatus',
        'reporter' => 'reporter',
        'reporting_time' => 'reporting_time',
        'manually_updated' => 'manuallyUpdated',
        'life_cycle_status' => 'lifeCycleStatus',
        'delayed_in_transit' => 'delayedInTransit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_status' => 'setOrderStatus',
        'reporter' => 'setReporter',
        'reporting_time' => 'setReportingTime',
        'manually_updated' => 'setManuallyUpdated',
        'life_cycle_status' => 'setLifeCycleStatus',
        'delayed_in_transit' => 'setDelayedInTransit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_status' => 'getOrderStatus',
        'reporter' => 'getReporter',
        'reporting_time' => 'getReportingTime',
        'manually_updated' => 'getManuallyUpdated',
        'life_cycle_status' => 'getLifeCycleStatus',
        'delayed_in_transit' => 'getDelayedInTransit'
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

    public const ORDER_STATUS_PENDING = 'Pending';
    public const ORDER_STATUS_READY = 'Ready';
    public const ORDER_STATUS_RECEIVED_AT_COLLECTION_POINT = 'ReceivedAtCollectionPoint';
    public const ORDER_STATUS_COLLECTED = 'Collected';
    public const ORDER_STATUS_IN_TRANSIT = 'InTransit';
    public const ORDER_STATUS_WAITING_IN_HUB = 'WaitingInHub';
    public const ORDER_STATUS_ON_WAY_TO_DROPOFF = 'OnWayToDropoff';
    public const ORDER_STATUS_DELIVERED_TO_COLLECTION_POINT = 'DeliveredToCollectionPoint';
    public const ORDER_STATUS_DELIVERED = 'Delivered';
    public const ORDER_STATUS_CANCELLED = 'Cancelled';
    public const ORDER_STATUS_CANNOT_FULFILL = 'CannotFulfill';
    public const ORDER_STATUS_FAILED = 'Failed';
    public const ORDER_STATUS_RETURNING_TO_SENDER = 'ReturningToSender';
    public const ORDER_STATUS_RETURNED_TO_SENDER = 'ReturnedToSender';
    public const ORDER_STATUS_READY_FOR_HANDOFF = 'ReadyForHandoff';
    public const ORDER_STATUS_WAITING_FOR_HANDOFF = 'WaitingForHandoff';
    public const ORDER_STATUS_PICKED_UP = 'PickedUp';
    public const LIFE_CYCLE_STATUS_PRE_COLLECTION = 'preCollection';
    public const LIFE_CYCLE_STATUS_TRACKING = 'tracking';
    public const LIFE_CYCLE_STATUS__FINAL = 'final';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_PENDING,
            self::ORDER_STATUS_READY,
            self::ORDER_STATUS_RECEIVED_AT_COLLECTION_POINT,
            self::ORDER_STATUS_COLLECTED,
            self::ORDER_STATUS_IN_TRANSIT,
            self::ORDER_STATUS_WAITING_IN_HUB,
            self::ORDER_STATUS_ON_WAY_TO_DROPOFF,
            self::ORDER_STATUS_DELIVERED_TO_COLLECTION_POINT,
            self::ORDER_STATUS_DELIVERED,
            self::ORDER_STATUS_CANCELLED,
            self::ORDER_STATUS_CANNOT_FULFILL,
            self::ORDER_STATUS_FAILED,
            self::ORDER_STATUS_RETURNING_TO_SENDER,
            self::ORDER_STATUS_RETURNED_TO_SENDER,
            self::ORDER_STATUS_READY_FOR_HANDOFF,
            self::ORDER_STATUS_WAITING_FOR_HANDOFF,
            self::ORDER_STATUS_PICKED_UP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLifeCycleStatusAllowableValues()
    {
        return [
            self::LIFE_CYCLE_STATUS_PRE_COLLECTION,
            self::LIFE_CYCLE_STATUS_TRACKING,
            self::LIFE_CYCLE_STATUS__FINAL,
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
        $this->setIfExists('order_status', $data ?? [], null);
        $this->setIfExists('reporter', $data ?? [], null);
        $this->setIfExists('reporting_time', $data ?? [], null);
        $this->setIfExists('manually_updated', $data ?? [], null);
        $this->setIfExists('life_cycle_status', $data ?? [], null);
        $this->setIfExists('delayed_in_transit', $data ?? [], null);
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

        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['order_status']) && !in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_status', must be one of '%s'",
                $this->container['order_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['reporter'] === null) {
            $invalidProperties[] = "'reporter' can't be null";
        }
        if ($this->container['reporting_time'] === null) {
            $invalidProperties[] = "'reporting_time' can't be null";
        }
        if ($this->container['manually_updated'] === null) {
            $invalidProperties[] = "'manually_updated' can't be null";
        }
        $allowedValues = $this->getLifeCycleStatusAllowableValues();
        if (!is_null($this->container['life_cycle_status']) && !in_array($this->container['life_cycle_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'life_cycle_status', must be one of '%s'",
                $this->container['life_cycle_status'],
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
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status The status of an order:               | Value                      | Description                                                        |   |-----------------------------|-----------------------------------------------------------------------|   | Pending                    | Order is new, prior to processing                                  |   | Ready                      | Order is ready for collection by courier                           |   | ReceivedAtCollectionPoint  | Order was received at the collection point awaiting courier pickup    |   | Collected                  | Order was collected                                                |   | InTransit                  | Order is in transit on the way to the hub                          |   | WaitingInHub               | Order is waiting in the hub                                        |   | OnWayToDropoff             | Order is on the way to the end destination                         |   | DeliveredToCollectionPoint  | Order awaiting at collection point for pickup by end customer         |   | Delivered                  | Order was delivered (final status)                                 |   | Cancelled                  | Order was cancelled (final status)                                 |   | CannotFulfill               | Order has issues that need handling                                |   | Failed                     | Order delivery failed                                              |   | ReturningToSender          | Delivery failed, item is being returned to sender                  |   | ReturnedToSender           | Item has been returned to sender (final status)                    |   | ReadyForHandoff            | Order is ready for handoff                                         |   | WaitingForHandoff          | Order is waiting to be received                                    |   | PickedUp                   | Order was picked up in store (final status)                           |
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        if (is_null($order_status)) {
            throw new \InvalidArgumentException('non-nullable order_status cannot be null');
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_status', must be one of '%s'",
                    $order_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets reporter
     *
     * @return string
     */
    public function getReporter()
    {
        return $this->container['reporter'];
    }

    /**
     * Sets reporter
     *
     * @param string $reporter Who reported this status
     *
     * @return self
     */
    public function setReporter($reporter)
    {
        if (is_null($reporter)) {
            throw new \InvalidArgumentException('non-nullable reporter cannot be null');
        }
        $this->container['reporter'] = $reporter;

        return $this;
    }

    /**
     * Gets reporting_time
     *
     * @return \DateTime
     */
    public function getReportingTime()
    {
        return $this->container['reporting_time'];
    }

    /**
     * Sets reporting_time
     *
     * @param \DateTime $reporting_time The reporting time in ISO8601 format
     *
     * @return self
     */
    public function setReportingTime($reporting_time)
    {
        if (is_null($reporting_time)) {
            throw new \InvalidArgumentException('non-nullable reporting_time cannot be null');
        }
        $this->container['reporting_time'] = $reporting_time;

        return $this;
    }

    /**
     * Gets manually_updated
     *
     * @return bool
     */
    public function getManuallyUpdated()
    {
        return $this->container['manually_updated'];
    }

    /**
     * Sets manually_updated
     *
     * @param bool $manually_updated True if the status was manually changed by the reporter
     *
     * @return self
     */
    public function setManuallyUpdated($manually_updated)
    {
        if (is_null($manually_updated)) {
            throw new \InvalidArgumentException('non-nullable manually_updated cannot be null');
        }
        $this->container['manually_updated'] = $manually_updated;

        return $this;
    }

    /**
     * Gets life_cycle_status
     *
     * @return string|null
     */
    public function getLifeCycleStatus()
    {
        return $this->container['life_cycle_status'];
    }

    /**
     * Sets life_cycle_status
     *
     * @param string|null $life_cycle_status <u>The order life cycle status</u>: <br>             <table>   <tr><td>preCollection</td>     <td>Order is before collection</td></tr>   <tr><td>tracking</td>              <td>Order is on the way</td></tr>   <tr><td>final</td>             <td>Order completed</td></tr> </table>
     *
     * @return self
     */
    public function setLifeCycleStatus($life_cycle_status)
    {
        if (is_null($life_cycle_status)) {
            throw new \InvalidArgumentException('non-nullable life_cycle_status cannot be null');
        }
        $allowedValues = $this->getLifeCycleStatusAllowableValues();
        if (!in_array($life_cycle_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'life_cycle_status', must be one of '%s'",
                    $life_cycle_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['life_cycle_status'] = $life_cycle_status;

        return $this;
    }

    /**
     * Gets delayed_in_transit
     *
     * @return bool|null
     */
    public function getDelayedInTransit()
    {
        return $this->container['delayed_in_transit'];
    }

    /**
     * Sets delayed_in_transit
     *
     * @param bool|null $delayed_in_transit delayed_in_transit
     *
     * @return self
     */
    public function setDelayedInTransit($delayed_in_transit)
    {
        if (is_null($delayed_in_transit)) {
            throw new \InvalidArgumentException('non-nullable delayed_in_transit cannot be null');
        }
        $this->container['delayed_in_transit'] = $delayed_in_transit;

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


