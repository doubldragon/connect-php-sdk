<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CreateOrderRequestLineItem Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CreateOrderRequestLineItem implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'quantity' => 'string',
        'base_price_money' => '\SquareConnect\Model\Money',
        'variation_name' => 'string',
        'note' => 'string',
        'catalog_object_id' => 'string',
        'modifiers' => '\SquareConnect\Model\CreateOrderRequestModifier[]',
        'taxes' => '\SquareConnect\Model\CreateOrderRequestTax[]',
        'discounts' => '\SquareConnect\Model\CreateOrderRequestDiscount[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'quantity' => 'quantity',
        'base_price_money' => 'base_price_money',
        'variation_name' => 'variation_name',
        'note' => 'note',
        'catalog_object_id' => 'catalog_object_id',
        'modifiers' => 'modifiers',
        'taxes' => 'taxes',
        'discounts' => 'discounts'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'base_price_money' => 'setBasePriceMoney',
        'variation_name' => 'setVariationName',
        'note' => 'setNote',
        'catalog_object_id' => 'setCatalogObjectId',
        'modifiers' => 'setModifiers',
        'taxes' => 'setTaxes',
        'discounts' => 'setDiscounts'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'base_price_money' => 'getBasePriceMoney',
        'variation_name' => 'getVariationName',
        'note' => 'getNote',
        'catalog_object_id' => 'getCatalogObjectId',
        'modifiers' => 'getModifiers',
        'taxes' => 'getTaxes',
        'discounts' => 'getDiscounts'
    );
  
    /**
      * $name The name of the line item. This value cannot exceed 500 characters.
      * @var string
      */
    protected $name;
    /**
      * $quantity The quantity to purchase, as a string representation of a number. Currently, only integer values are supported.
      * @var string
      */
    protected $quantity;
    /**
      * $base_price_money The base price for a single unit of the line item's associated variation. If a line item represents a Custom Amount instead of a particular product, this field indicates that amount.
      * @var \SquareConnect\Model\Money
      */
    protected $base_price_money;
    /**
      * $variation_name The variation_name of the line item. This value cannot exceed 255 characters.  If not set, the default name is `Regular`.  Do not provide a value for this field if you provide a value for the `name` and the `base_price_money`.
      * @var string
      */
    protected $variation_name;
    /**
      * $note The note of the line item. This value cannot exceed 50 characters.
      * @var string
      */
    protected $note;
    /**
      * $catalog_object_id The catalog object id from existing [CatalogItemVariation](#type-catalogitemvariation).  Do not provide a value for this field if you provide a value for the `name` and the `base_price_money`.
      * @var string
      */
    protected $catalog_object_id;
    /**
      * $modifiers The item modifier catalog object ids from exsiting [CatalogModifier](#type-catalogmodifier)s.  Do not provide a value for this field if you provide a value for the `name` and the `base_price_money`.
      * @var \SquareConnect\Model\CreateOrderRequestModifier[]
      */
    protected $modifiers;
    /**
      * $taxes The taxes to include on the line item.
      * @var \SquareConnect\Model\CreateOrderRequestTax[]
      */
    protected $taxes;
    /**
      * $discounts The discounts to include on the line item.
      * @var \SquareConnect\Model\CreateOrderRequestDiscount[]
      */
    protected $discounts;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["quantity"])) {
              $this->quantity = $data["quantity"];
            } else {
              $this->quantity = null;
            }
            if (isset($data["base_price_money"])) {
              $this->base_price_money = $data["base_price_money"];
            } else {
              $this->base_price_money = null;
            }
            if (isset($data["variation_name"])) {
              $this->variation_name = $data["variation_name"];
            } else {
              $this->variation_name = null;
            }
            if (isset($data["note"])) {
              $this->note = $data["note"];
            } else {
              $this->note = null;
            }
            if (isset($data["catalog_object_id"])) {
              $this->catalog_object_id = $data["catalog_object_id"];
            } else {
              $this->catalog_object_id = null;
            }
            if (isset($data["modifiers"])) {
              $this->modifiers = $data["modifiers"];
            } else {
              $this->modifiers = null;
            }
            if (isset($data["taxes"])) {
              $this->taxes = $data["taxes"];
            } else {
              $this->taxes = null;
            }
            if (isset($data["discounts"])) {
              $this->discounts = $data["discounts"];
            } else {
              $this->discounts = null;
            }
        }
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The name of the line item. This value cannot exceed 500 characters.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets quantity
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param string $quantity The quantity to purchase, as a string representation of a number. Currently, only integer values are supported.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Gets base_price_money
     * @return \SquareConnect\Model\Money
     */
    public function getBasePriceMoney()
    {
        return $this->base_price_money;
    }
  
    /**
     * Sets base_price_money
     * @param \SquareConnect\Model\Money $base_price_money The base price for a single unit of the line item's associated variation. If a line item represents a Custom Amount instead of a particular product, this field indicates that amount.
     * @return $this
     */
    public function setBasePriceMoney($base_price_money)
    {
        $this->base_price_money = $base_price_money;
        return $this;
    }
    /**
     * Gets variation_name
     * @return string
     */
    public function getVariationName()
    {
        return $this->variation_name;
    }
  
    /**
     * Sets variation_name
     * @param string $variation_name The variation_name of the line item. This value cannot exceed 255 characters.  If not set, the default name is `Regular`.  Do not provide a value for this field if you provide a value for the `name` and the `base_price_money`.
     * @return $this
     */
    public function setVariationName($variation_name)
    {
        $this->variation_name = $variation_name;
        return $this;
    }
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note The note of the line item. This value cannot exceed 50 characters.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Gets catalog_object_id
     * @return string
     */
    public function getCatalogObjectId()
    {
        return $this->catalog_object_id;
    }
  
    /**
     * Sets catalog_object_id
     * @param string $catalog_object_id The catalog object id from existing [CatalogItemVariation](#type-catalogitemvariation).  Do not provide a value for this field if you provide a value for the `name` and the `base_price_money`.
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
        return $this;
    }
    /**
     * Gets modifiers
     * @return \SquareConnect\Model\CreateOrderRequestModifier[]
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }
  
    /**
     * Sets modifiers
     * @param \SquareConnect\Model\CreateOrderRequestModifier[] $modifiers The item modifier catalog object ids from exsiting [CatalogModifier](#type-catalogmodifier)s.  Do not provide a value for this field if you provide a value for the `name` and the `base_price_money`.
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;
        return $this;
    }
    /**
     * Gets taxes
     * @return \SquareConnect\Model\CreateOrderRequestTax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }
  
    /**
     * Sets taxes
     * @param \SquareConnect\Model\CreateOrderRequestTax[] $taxes The taxes to include on the line item.
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * Gets discounts
     * @return \SquareConnect\Model\CreateOrderRequestDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }
  
    /**
     * Sets discounts
     * @param \SquareConnect\Model\CreateOrderRequestDiscount[] $discounts The discounts to include on the line item.
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
