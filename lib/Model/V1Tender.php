<?php
/**
 * V1Tender
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
 * V1Tender Class Doc Comment
 *
 * @category    Class
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Tender implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1Tender';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'name' => 'string',
        'employee_id' => 'string',
        'receipt_url' => 'string',
        'card_brand' => 'string',
        'pan_suffix' => 'string',
        'entry_method' => 'string',
        'payment_note' => 'string',
        'total_money' => '\SquareConnect\Model\V1Money',
        'tendered_money' => '\SquareConnect\Model\V1Money',
        'change_back_money' => '\SquareConnect\Model\V1Money',
        'refunded_money' => '\SquareConnect\Model\V1Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'name' => null,
        'employee_id' => null,
        'receipt_url' => null,
        'card_brand' => null,
        'pan_suffix' => null,
        'entry_method' => null,
        'payment_note' => null,
        'total_money' => null,
        'tendered_money' => null,
        'change_back_money' => null,
        'refunded_money' => null
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
        'type' => 'type',
        'name' => 'name',
        'employee_id' => 'employee_id',
        'receipt_url' => 'receipt_url',
        'card_brand' => 'card_brand',
        'pan_suffix' => 'pan_suffix',
        'entry_method' => 'entry_method',
        'payment_note' => 'payment_note',
        'total_money' => 'total_money',
        'tendered_money' => 'tendered_money',
        'change_back_money' => 'change_back_money',
        'refunded_money' => 'refunded_money'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'employee_id' => 'setEmployeeId',
        'receipt_url' => 'setReceiptUrl',
        'card_brand' => 'setCardBrand',
        'pan_suffix' => 'setPanSuffix',
        'entry_method' => 'setEntryMethod',
        'payment_note' => 'setPaymentNote',
        'total_money' => 'setTotalMoney',
        'tendered_money' => 'setTenderedMoney',
        'change_back_money' => 'setChangeBackMoney',
        'refunded_money' => 'setRefundedMoney'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'employee_id' => 'getEmployeeId',
        'receipt_url' => 'getReceiptUrl',
        'card_brand' => 'getCardBrand',
        'pan_suffix' => 'getPanSuffix',
        'entry_method' => 'getEntryMethod',
        'payment_note' => 'getPaymentNote',
        'total_money' => 'getTotalMoney',
        'tendered_money' => 'getTenderedMoney',
        'change_back_money' => 'getChangeBackMoney',
        'refunded_money' => 'getRefundedMoney'
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

    const TYPE_CREDIT_CARD = 'CREDIT_CARD';
    const TYPE_CASH = 'CASH';
    const TYPE_THIRD_PARTY_CARD = 'THIRD_PARTY_CARD';
    const TYPE_NO_SALE = 'NO_SALE';
    const TYPE_SQUARE_WALLET = 'SQUARE_WALLET';
    const TYPE_SQUARE_GIFT_CARD = 'SQUARE_GIFT_CARD';
    const TYPE_UNKNOWN = 'UNKNOWN';
    const TYPE_OTHER = 'OTHER';
    const CARD_BRAND_OTHER_BRAND = 'OTHER_BRAND';
    const CARD_BRAND_VISA = 'VISA';
    const CARD_BRAND_MASTER_CARD = 'MASTER_CARD';
    const CARD_BRAND_AMERICAN_EXPRESS = 'AMERICAN_EXPRESS';
    const CARD_BRAND_DISCOVER = 'DISCOVER';
    const CARD_BRAND_DISCOVER_DINERS = 'DISCOVER_DINERS';
    const CARD_BRAND_JCB = 'JCB';
    const CARD_BRAND_CHINA_UNIONPAY = 'CHINA_UNIONPAY';
    const CARD_BRAND_SQUARE_GIFT_CARD = 'SQUARE_GIFT_CARD';
    const ENTRY_METHOD_MANUAL = 'MANUAL';
    const ENTRY_METHOD_SCANNED = 'SCANNED';
    const ENTRY_METHOD_SQUARE_CASH = 'SQUARE_CASH';
    const ENTRY_METHOD_SQUARE_WALLET = 'SQUARE_WALLET';
    const ENTRY_METHOD_SWIPED = 'SWIPED';
    const ENTRY_METHOD_WEB_FORM = 'WEB_FORM';
    const ENTRY_METHOD_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CREDIT_CARD,
            self::TYPE_CASH,
            self::TYPE_THIRD_PARTY_CARD,
            self::TYPE_NO_SALE,
            self::TYPE_SQUARE_WALLET,
            self::TYPE_SQUARE_GIFT_CARD,
            self::TYPE_UNKNOWN,
            self::TYPE_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCardBrandAllowableValues()
    {
        return [
            self::CARD_BRAND_OTHER_BRAND,
            self::CARD_BRAND_VISA,
            self::CARD_BRAND_MASTER_CARD,
            self::CARD_BRAND_AMERICAN_EXPRESS,
            self::CARD_BRAND_DISCOVER,
            self::CARD_BRAND_DISCOVER_DINERS,
            self::CARD_BRAND_JCB,
            self::CARD_BRAND_CHINA_UNIONPAY,
            self::CARD_BRAND_SQUARE_GIFT_CARD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEntryMethodAllowableValues()
    {
        return [
            self::ENTRY_METHOD_MANUAL,
            self::ENTRY_METHOD_SCANNED,
            self::ENTRY_METHOD_SQUARE_CASH,
            self::ENTRY_METHOD_SQUARE_WALLET,
            self::ENTRY_METHOD_SWIPED,
            self::ENTRY_METHOD_WEB_FORM,
            self::ENTRY_METHOD_OTHER,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['receipt_url'] = isset($data['receipt_url']) ? $data['receipt_url'] : null;
        $this->container['card_brand'] = isset($data['card_brand']) ? $data['card_brand'] : null;
        $this->container['pan_suffix'] = isset($data['pan_suffix']) ? $data['pan_suffix'] : null;
        $this->container['entry_method'] = isset($data['entry_method']) ? $data['entry_method'] : null;
        $this->container['payment_note'] = isset($data['payment_note']) ? $data['payment_note'] : null;
        $this->container['total_money'] = isset($data['total_money']) ? $data['total_money'] : null;
        $this->container['tendered_money'] = isset($data['tendered_money']) ? $data['tendered_money'] : null;
        $this->container['change_back_money'] = isset($data['change_back_money']) ? $data['change_back_money'] : null;
        $this->container['refunded_money'] = isset($data['refunded_money']) ? $data['refunded_money'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getCardBrandAllowableValues();
        if (!in_array($this->container['card_brand'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'card_brand', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getEntryMethodAllowableValues();
        if (!in_array($this->container['entry_method'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'entry_method', must be one of '%s'",
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

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getCardBrandAllowableValues();
        if (!in_array($this->container['card_brand'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getEntryMethodAllowableValues();
        if (!in_array($this->container['entry_method'], $allowed_values)) {
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
     * @param string $id The tender's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of tender.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name A human-readable description of the tender.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets employee_id
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     * @param string $employee_id The ID of the employee that processed the tender.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets receipt_url
     * @return string
     */
    public function getReceiptUrl()
    {
        return $this->container['receipt_url'];
    }

    /**
     * Sets receipt_url
     * @param string $receipt_url The URL of the receipt for the tender.
     * @return $this
     */
    public function setReceiptUrl($receipt_url)
    {
        $this->container['receipt_url'] = $receipt_url;

        return $this;
    }

    /**
     * Gets card_brand
     * @return string
     */
    public function getCardBrand()
    {
        return $this->container['card_brand'];
    }

    /**
     * Sets card_brand
     * @param string $card_brand The brand of credit card provided.
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $allowed_values = $this->getCardBrandAllowableValues();
        if (!is_null($card_brand) && !in_array($card_brand, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_brand', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['card_brand'] = $card_brand;

        return $this;
    }

    /**
     * Gets pan_suffix
     * @return string
     */
    public function getPanSuffix()
    {
        return $this->container['pan_suffix'];
    }

    /**
     * Sets pan_suffix
     * @param string $pan_suffix The last four digits of the provided credit card's account number.
     * @return $this
     */
    public function setPanSuffix($pan_suffix)
    {
        $this->container['pan_suffix'] = $pan_suffix;

        return $this;
    }

    /**
     * Gets entry_method
     * @return string
     */
    public function getEntryMethod()
    {
        return $this->container['entry_method'];
    }

    /**
     * Sets entry_method
     * @param string $entry_method The tender's unique ID.
     * @return $this
     */
    public function setEntryMethod($entry_method)
    {
        $allowed_values = $this->getEntryMethodAllowableValues();
        if (!is_null($entry_method) && !in_array($entry_method, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entry_method', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['entry_method'] = $entry_method;

        return $this;
    }

    /**
     * Gets payment_note
     * @return string
     */
    public function getPaymentNote()
    {
        return $this->container['payment_note'];
    }

    /**
     * Sets payment_note
     * @param string $payment_note Notes entered by the merchant about the tender at the time of payment, if any. Typically only present for tender with the type: OTHER.
     * @return $this
     */
    public function setPaymentNote($payment_note)
    {
        $this->container['payment_note'] = $payment_note;

        return $this;
    }

    /**
     * Gets total_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getTotalMoney()
    {
        return $this->container['total_money'];
    }

    /**
     * Sets total_money
     * @param \SquareConnect\Model\V1Money $total_money The total amount of money provided in this form of tender.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->container['total_money'] = $total_money;

        return $this;
    }

    /**
     * Gets tendered_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getTenderedMoney()
    {
        return $this->container['tendered_money'];
    }

    /**
     * Sets tendered_money
     * @param \SquareConnect\Model\V1Money $tendered_money The amount of total_money applied to the payment.
     * @return $this
     */
    public function setTenderedMoney($tendered_money)
    {
        $this->container['tendered_money'] = $tendered_money;

        return $this;
    }

    /**
     * Gets change_back_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getChangeBackMoney()
    {
        return $this->container['change_back_money'];
    }

    /**
     * Sets change_back_money
     * @param \SquareConnect\Model\V1Money $change_back_money The amount of total_money returned to the buyer as change.
     * @return $this
     */
    public function setChangeBackMoney($change_back_money)
    {
        $this->container['change_back_money'] = $change_back_money;

        return $this;
    }

    /**
     * Gets refunded_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedMoney()
    {
        return $this->container['refunded_money'];
    }

    /**
     * Sets refunded_money
     * @param \SquareConnect\Model\V1Money $refunded_money The total of all refunds applied to this tender. This amount is always negative or zero.
     * @return $this
     */
    public function setRefundedMoney($refunded_money)
    {
        $this->container['refunded_money'] = $refunded_money;

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


