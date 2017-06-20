<?php
/**
 * V1TimecardEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Square Connect API
 *
 * Client library for accessing the Square Connect APIs
 *
 * OpenAPI spec version: 2.0
 * Contact: developers@squareup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;

/**
 * V1TimecardEvent Class Doc Comment
 *
 * @category    Class
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1TimecardEvent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1TimecardEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'event_type' => 'string',
        'clockin_time' => 'string',
        'clockout_time' => 'string',
        'created_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'event_type' => null,
        'clockin_time' => null,
        'clockout_time' => null,
        'created_at' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'event_type' => 'event_type',
        'clockin_time' => 'clockin_time',
        'clockout_time' => 'clockout_time',
        'created_at' => 'created_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'event_type' => 'setEventType',
        'clockin_time' => 'setClockinTime',
        'clockout_time' => 'setClockoutTime',
        'created_at' => 'setCreatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'event_type' => 'getEventType',
        'clockin_time' => 'getClockinTime',
        'clockout_time' => 'getClockoutTime',
        'created_at' => 'getCreatedAt'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const EVENT_TYPE_API_CREATE = 'API_CREATE';
    const EVENT_TYPE_API_EDIT = 'API_EDIT';
    const EVENT_TYPE_API_DELETE = 'API_DELETE';
    const EVENT_TYPE_REGISTER_CLOCKIN = 'REGISTER_CLOCKIN';
    const EVENT_TYPE_REGISTER_CLOCKOUT = 'REGISTER_CLOCKOUT';
    const EVENT_TYPE_DASHBOARD_SUPERVISOR_CLOSE = 'DASHBOARD_SUPERVISOR_CLOSE';
    const EVENT_TYPE_DASHBOARD_EDIT = 'DASHBOARD_EDIT';
    const EVENT_TYPE_DASHBOARD_DELETE = 'DASHBOARD_DELETE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_API_CREATE,
            self::EVENT_TYPE_API_EDIT,
            self::EVENT_TYPE_API_DELETE,
            self::EVENT_TYPE_REGISTER_CLOCKIN,
            self::EVENT_TYPE_REGISTER_CLOCKOUT,
            self::EVENT_TYPE_DASHBOARD_SUPERVISOR_CLOSE,
            self::EVENT_TYPE_DASHBOARD_EDIT,
            self::EVENT_TYPE_DASHBOARD_DELETE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['clockin_time'] = isset($data['clockin_time']) ? $data['clockin_time'] : null;
        $this->container['clockout_time'] = isset($data['clockout_time']) ? $data['clockout_time'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getEventTypeAllowableValues();
        if (!in_array($this->container['event_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getEventTypeAllowableValues();
        if (!in_array($this->container['event_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The event's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     * @param string $event_type The ID of the timecard to list events for.
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowed_values = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets clockin_time
     * @return string
     */
    public function getClockinTime()
    {
        return $this->container['clockin_time'];
    }

    /**
     * Sets clockin_time
     * @param string $clockin_time The time the employee clocked in, in ISO 8601 format.
     * @return $this
     */
    public function setClockinTime($clockin_time)
    {
        $this->container['clockin_time'] = $clockin_time;

        return $this;
    }

    /**
     * Gets clockout_time
     * @return string
     */
    public function getClockoutTime()
    {
        return $this->container['clockout_time'];
    }

    /**
     * Sets clockout_time
     * @param string $clockout_time The time the employee clocked out, in ISO 8601 format.
     * @return $this
     */
    public function setClockoutTime($clockout_time)
    {
        $this->container['clockout_time'] = $clockout_time;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at The time when the event was created, in ISO 8601 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
    }
}


