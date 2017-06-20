<?php
/**
 * BatchRetrieveCatalogObjectsRequest
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
 * BatchRetrieveCatalogObjectsRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BatchRetrieveCatalogObjectsRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BatchRetrieveCatalogObjectsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object_ids' => 'string[]',
        'include_related_objects' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object_ids' => null,
        'include_related_objects' => null
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
        'object_ids' => 'object_ids',
        'include_related_objects' => 'include_related_objects'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object_ids' => 'setObjectIds',
        'include_related_objects' => 'setIncludeRelatedObjects'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object_ids' => 'getObjectIds',
        'include_related_objects' => 'getIncludeRelatedObjects'
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
        $this->container['object_ids'] = isset($data['object_ids']) ? $data['object_ids'] : null;
        $this->container['include_related_objects'] = isset($data['include_related_objects']) ? $data['include_related_objects'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['object_ids'] === null) {
            $invalid_properties[] = "'object_ids' can't be null";
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

        if ($this->container['object_ids'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets object_ids
     * @return string[]
     */
    public function getObjectIds()
    {
        return $this->container['object_ids'];
    }

    /**
     * Sets object_ids
     * @param string[] $object_ids The IDs of the [CatalogObject](#type-catalogobject)s to be retrieved.
     * @return $this
     */
    public function setObjectIds($object_ids)
    {
        $this->container['object_ids'] = $object_ids;

        return $this;
    }

    /**
     * Gets include_related_objects
     * @return bool
     */
    public function getIncludeRelatedObjects()
    {
        return $this->container['include_related_objects'];
    }

    /**
     * Sets include_related_objects
     * @param bool $include_related_objects If `true`, the response will include additional objects that are related to the requested objects, as follows:  If the `objects` field of the response contains a [CatalogItem](#type-catalogitem), its associated [CatalogCategory](#type-catalogcategory), [CatalogTax](#type-catalogtax)es, and [CatalogModifierList](#type-catalogmodifierlist)s will be returned in the `related_objects` field of the response. If the `objects` field of the response contains a [CatalogItemVariation](#type-catalogitemvariation), its parent [CatalogItem](#type-catalogitem) will be returned in the `related_objects` field of the response.
     * @return $this
     */
    public function setIncludeRelatedObjects($include_related_objects)
    {
        $this->container['include_related_objects'] = $include_related_objects;

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


