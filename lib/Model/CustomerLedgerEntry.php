<?php
/**
 * CustomerLedgerEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PowerOffice-Go API
 *
 * PowerOffice Go API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PowerOfficeGo\Model;

use \ArrayAccess;
use \PowerOfficeGo\ObjectSerializer;

/**
 * CustomerLedgerEntry Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerLedgerEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerLedgerEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'posting_date' => 'string',
        'due_date' => 'string',
        'voucher_no' => 'int',
        'currency_code' => 'string',
        'currency_amount' => 'float',
        'amount' => 'float',
        'balance' => 'float',
        'voucher_id' => 'string',
        'voucher_date' => 'string',
        'voucher_type' => 'int',
        'match_id' => 'int',
        'last_changed' => 'string',
        'created_date' => 'string',
        'customer' => '\PowerOfficeGo\Model\Customer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'posting_date' => null,
        'due_date' => null,
        'voucher_no' => null,
        'currency_code' => null,
        'currency_amount' => null,
        'amount' => null,
        'balance' => null,
        'voucher_id' => null,
        'voucher_date' => null,
        'voucher_type' => null,
        'match_id' => null,
        'last_changed' => null,
        'created_date' => null,
        'customer' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'posting_date' => 'postingDate',
        'due_date' => 'dueDate',
        'voucher_no' => 'voucherNo',
        'currency_code' => 'currencyCode',
        'currency_amount' => 'currencyAmount',
        'amount' => 'amount',
        'balance' => 'balance',
        'voucher_id' => 'voucherId',
        'voucher_date' => 'voucherDate',
        'voucher_type' => 'voucherType',
        'match_id' => 'matchId',
        'last_changed' => 'lastChanged',
        'created_date' => 'createdDate',
        'customer' => 'customer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'posting_date' => 'setPostingDate',
        'due_date' => 'setDueDate',
        'voucher_no' => 'setVoucherNo',
        'currency_code' => 'setCurrencyCode',
        'currency_amount' => 'setCurrencyAmount',
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'voucher_id' => 'setVoucherId',
        'voucher_date' => 'setVoucherDate',
        'voucher_type' => 'setVoucherType',
        'match_id' => 'setMatchId',
        'last_changed' => 'setLastChanged',
        'created_date' => 'setCreatedDate',
        'customer' => 'setCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'posting_date' => 'getPostingDate',
        'due_date' => 'getDueDate',
        'voucher_no' => 'getVoucherNo',
        'currency_code' => 'getCurrencyCode',
        'currency_amount' => 'getCurrencyAmount',
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'voucher_id' => 'getVoucherId',
        'voucher_date' => 'getVoucherDate',
        'voucher_type' => 'getVoucherType',
        'match_id' => 'getMatchId',
        'last_changed' => 'getLastChanged',
        'created_date' => 'getCreatedDate',
        'customer' => 'getCustomer'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['posting_date'] = isset($data['posting_date']) ? $data['posting_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['voucher_no'] = isset($data['voucher_no']) ? $data['voucher_no'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_amount'] = isset($data['currency_amount']) ? $data['currency_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['voucher_id'] = isset($data['voucher_id']) ? $data['voucher_id'] : null;
        $this->container['voucher_date'] = isset($data['voucher_date']) ? $data['voucher_date'] : null;
        $this->container['voucher_type'] = isset($data['voucher_type']) ? $data['voucher_type'] : null;
        $this->container['match_id'] = isset($data['match_id']) ? $data['match_id'] : null;
        $this->container['last_changed'] = isset($data['last_changed']) ? $data['last_changed'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets posting_date
     *
     * @return string|null
     */
    public function getPostingDate()
    {
        return $this->container['posting_date'];
    }

    /**
     * Sets posting_date
     *
     * @param string|null $posting_date posting_date
     *
     * @return $this
     */
    public function setPostingDate($posting_date)
    {
        $this->container['posting_date'] = $posting_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets voucher_no
     *
     * @return int|null
     */
    public function getVoucherNo()
    {
        return $this->container['voucher_no'];
    }

    /**
     * Sets voucher_no
     *
     * @param int|null $voucher_no voucher_no
     *
     * @return $this
     */
    public function setVoucherNo($voucher_no)
    {
        $this->container['voucher_no'] = $voucher_no;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_amount
     *
     * @return float|null
     */
    public function getCurrencyAmount()
    {
        return $this->container['currency_amount'];
    }

    /**
     * Sets currency_amount
     *
     * @param float|null $currency_amount currency_amount
     *
     * @return $this
     */
    public function setCurrencyAmount($currency_amount)
    {
        $this->container['currency_amount'] = $currency_amount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets voucher_id
     *
     * @return string|null
     */
    public function getVoucherId()
    {
        return $this->container['voucher_id'];
    }

    /**
     * Sets voucher_id
     *
     * @param string|null $voucher_id voucher_id
     *
     * @return $this
     */
    public function setVoucherId($voucher_id)
    {
        $this->container['voucher_id'] = $voucher_id;

        return $this;
    }

    /**
     * Gets voucher_date
     *
     * @return string|null
     */
    public function getVoucherDate()
    {
        return $this->container['voucher_date'];
    }

    /**
     * Sets voucher_date
     *
     * @param string|null $voucher_date voucher_date
     *
     * @return $this
     */
    public function setVoucherDate($voucher_date)
    {
        $this->container['voucher_date'] = $voucher_date;

        return $this;
    }

    /**
     * Gets voucher_type
     *
     * @return int|null
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param int|null $voucher_type voucher_type
     *
     * @return $this
     */
    public function setVoucherType($voucher_type)
    {
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets match_id
     *
     * @return int|null
     */
    public function getMatchId()
    {
        return $this->container['match_id'];
    }

    /**
     * Sets match_id
     *
     * @param int|null $match_id match_id
     *
     * @return $this
     */
    public function setMatchId($match_id)
    {
        $this->container['match_id'] = $match_id;

        return $this;
    }

    /**
     * Gets last_changed
     *
     * @return string|null
     */
    public function getLastChanged()
    {
        return $this->container['last_changed'];
    }

    /**
     * Sets last_changed
     *
     * @param string|null $last_changed last_changed
     *
     * @return $this
     */
    public function setLastChanged($last_changed)
    {
        $this->container['last_changed'] = $last_changed;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \PowerOfficeGo\Model\Customer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \PowerOfficeGo\Model\Customer|null $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}

