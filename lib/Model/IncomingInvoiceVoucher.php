<?php
/**
 * IncomingInvoiceVoucher
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
 * IncomingInvoiceVoucher Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncomingInvoiceVoucher implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncomingInvoiceVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created_date' => 'string',
        'currency_code' => 'string',
        'currency_rate' => 'float',
        'supplier_code' => 'int',
        'due_date' => 'string',
        'external_import_reference' => 'string',
        'imported_voucher_no' => 'int',
        'invoice_no' => 'string',
        'is_reversed' => 'bool',
        'lines' => '\PowerOfficeGo\Model\IncomingInvoiceVoucherLine[]',
        'voucher_date' => 'string',
        'voucher_no' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_date' => null,
        'currency_code' => null,
        'currency_rate' => null,
        'supplier_code' => null,
        'due_date' => null,
        'external_import_reference' => null,
        'imported_voucher_no' => null,
        'invoice_no' => null,
        'is_reversed' => null,
        'lines' => null,
        'voucher_date' => null,
        'voucher_no' => null
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
        'created_date' => 'createdDate',
        'currency_code' => 'currencyCode',
        'currency_rate' => 'currencyRate',
        'supplier_code' => 'supplierCode',
        'due_date' => 'dueDate',
        'external_import_reference' => 'externalImportReference',
        'imported_voucher_no' => 'importedVoucherNo',
        'invoice_no' => 'invoiceNo',
        'is_reversed' => 'isReversed',
        'lines' => 'lines',
        'voucher_date' => 'voucherDate',
        'voucher_no' => 'voucherNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'currency_code' => 'setCurrencyCode',
        'currency_rate' => 'setCurrencyRate',
        'supplier_code' => 'setSupplierCode',
        'due_date' => 'setDueDate',
        'external_import_reference' => 'setExternalImportReference',
        'imported_voucher_no' => 'setImportedVoucherNo',
        'invoice_no' => 'setInvoiceNo',
        'is_reversed' => 'setIsReversed',
        'lines' => 'setLines',
        'voucher_date' => 'setVoucherDate',
        'voucher_no' => 'setVoucherNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'currency_code' => 'getCurrencyCode',
        'currency_rate' => 'getCurrencyRate',
        'supplier_code' => 'getSupplierCode',
        'due_date' => 'getDueDate',
        'external_import_reference' => 'getExternalImportReference',
        'imported_voucher_no' => 'getImportedVoucherNo',
        'invoice_no' => 'getInvoiceNo',
        'is_reversed' => 'getIsReversed',
        'lines' => 'getLines',
        'voucher_date' => 'getVoucherDate',
        'voucher_no' => 'getVoucherNo'
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
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['supplier_code'] = isset($data['supplier_code']) ? $data['supplier_code'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['external_import_reference'] = isset($data['external_import_reference']) ? $data['external_import_reference'] : null;
        $this->container['imported_voucher_no'] = isset($data['imported_voucher_no']) ? $data['imported_voucher_no'] : null;
        $this->container['invoice_no'] = isset($data['invoice_no']) ? $data['invoice_no'] : null;
        $this->container['is_reversed'] = isset($data['is_reversed']) ? $data['is_reversed'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['voucher_date'] = isset($data['voucher_date']) ? $data['voucher_date'] : null;
        $this->container['voucher_no'] = isset($data['voucher_no']) ? $data['voucher_no'] : null;
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
     * Gets currency_rate
     *
     * @return float|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param float|null $currency_rate currency_rate
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets supplier_code
     *
     * @return int|null
     */
    public function getSupplierCode()
    {
        return $this->container['supplier_code'];
    }

    /**
     * Sets supplier_code
     *
     * @param int|null $supplier_code supplier_code
     *
     * @return $this
     */
    public function setSupplierCode($supplier_code)
    {
        $this->container['supplier_code'] = $supplier_code;

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
     * Gets external_import_reference
     *
     * @return string|null
     */
    public function getExternalImportReference()
    {
        return $this->container['external_import_reference'];
    }

    /**
     * Sets external_import_reference
     *
     * @param string|null $external_import_reference external_import_reference
     *
     * @return $this
     */
    public function setExternalImportReference($external_import_reference)
    {
        $this->container['external_import_reference'] = $external_import_reference;

        return $this;
    }

    /**
     * Gets imported_voucher_no
     *
     * @return int|null
     */
    public function getImportedVoucherNo()
    {
        return $this->container['imported_voucher_no'];
    }

    /**
     * Sets imported_voucher_no
     *
     * @param int|null $imported_voucher_no imported_voucher_no
     *
     * @return $this
     */
    public function setImportedVoucherNo($imported_voucher_no)
    {
        $this->container['imported_voucher_no'] = $imported_voucher_no;

        return $this;
    }

    /**
     * Gets invoice_no
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param string|null $invoice_no invoice_no
     *
     * @return $this
     */
    public function setInvoiceNo($invoice_no)
    {
        $this->container['invoice_no'] = $invoice_no;

        return $this;
    }

    /**
     * Gets is_reversed
     *
     * @return bool|null
     */
    public function getIsReversed()
    {
        return $this->container['is_reversed'];
    }

    /**
     * Sets is_reversed
     *
     * @param bool|null $is_reversed is_reversed
     *
     * @return $this
     */
    public function setIsReversed($is_reversed)
    {
        $this->container['is_reversed'] = $is_reversed;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \PowerOfficeGo\Model\IncomingInvoiceVoucherLine[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \PowerOfficeGo\Model\IncomingInvoiceVoucherLine[]|null $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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


