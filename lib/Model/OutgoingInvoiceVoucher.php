<?php
/**
 * OutgoingInvoiceVoucher
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * OutgoingInvoiceVoucher Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OutgoingInvoiceVoucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return OutgoingInvoiceVoucherModelFields
      */
    public static function GetModelFields(): OutgoingInvoiceVoucherModelFields
    {
        return new OutgoingInvoiceVoucherModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return OutgoingInvoiceVoucherModelAttributes
      */
    public static function GetModelAttributes(): OutgoingInvoiceVoucherModelAttributes
    {
        return new OutgoingInvoiceVoucherModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutgoingInvoiceVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'cid' => 'string',
        'created_date' => 'string',
        'currency_code' => 'string',
        'currency_rate' => 'float',
        'customer_code' => 'int',
        'custom_matching_reference' => 'string',
        'delivery_date' => 'string',
        'delivery_term' => 'string',
        'due_date' => 'string',
        'external_import_reference' => 'string',
        'imported_voucher_no' => 'int',
        'invoice_no' => 'int',
        'description' => 'string',
        'is_reversed' => 'bool',
        'lines' => '\PowerOfficeGo\Model\OutgoingInvoiceVoucherLine[]',
        'voucher_date' => 'string',
        'voucher_no' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'cid' => null,
        'created_date' => null,
        'currency_code' => null,
        'currency_rate' => null,
        'customer_code' => null,
        'custom_matching_reference' => null,
        'delivery_date' => null,
        'delivery_term' => null,
        'due_date' => null,
        'external_import_reference' => null,
        'imported_voucher_no' => null,
        'invoice_no' => null,
        'description' => null,
        'is_reversed' => null,
        'lines' => null,
        'voucher_date' => null,
        'voucher_no' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'cid' => false,
		'created_date' => false,
		'currency_code' => false,
		'currency_rate' => false,
		'customer_code' => false,
		'custom_matching_reference' => false,
		'delivery_date' => false,
		'delivery_term' => false,
		'due_date' => false,
		'external_import_reference' => false,
		'imported_voucher_no' => false,
		'invoice_no' => false,
		'description' => false,
		'is_reversed' => false,
		'lines' => false,
		'voucher_date' => false,
		'voucher_no' => false
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
        'id' => 'id',
        'cid' => 'cid',
        'created_date' => 'createdDate',
        'currency_code' => 'currencyCode',
        'currency_rate' => 'currencyRate',
        'customer_code' => 'customerCode',
        'custom_matching_reference' => 'customMatchingReference',
        'delivery_date' => 'deliveryDate',
        'delivery_term' => 'deliveryTerm',
        'due_date' => 'dueDate',
        'external_import_reference' => 'externalImportReference',
        'imported_voucher_no' => 'importedVoucherNo',
        'invoice_no' => 'invoiceNo',
        'description' => 'description',
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
        'cid' => 'setCid',
        'created_date' => 'setCreatedDate',
        'currency_code' => 'setCurrencyCode',
        'currency_rate' => 'setCurrencyRate',
        'customer_code' => 'setCustomerCode',
        'custom_matching_reference' => 'setCustomMatchingReference',
        'delivery_date' => 'setDeliveryDate',
        'delivery_term' => 'setDeliveryTerm',
        'due_date' => 'setDueDate',
        'external_import_reference' => 'setExternalImportReference',
        'imported_voucher_no' => 'setImportedVoucherNo',
        'invoice_no' => 'setInvoiceNo',
        'description' => 'setDescription',
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
        'cid' => 'getCid',
        'created_date' => 'getCreatedDate',
        'currency_code' => 'getCurrencyCode',
        'currency_rate' => 'getCurrencyRate',
        'customer_code' => 'getCustomerCode',
        'custom_matching_reference' => 'getCustomMatchingReference',
        'delivery_date' => 'getDeliveryDate',
        'delivery_term' => 'getDeliveryTerm',
        'due_date' => 'getDueDate',
        'external_import_reference' => 'getExternalImportReference',
        'imported_voucher_no' => 'getImportedVoucherNo',
        'invoice_no' => 'getInvoiceNo',
        'description' => 'getDescription',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('cid', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('currency_rate', $data ?? [], null);
        $this->setIfExists('customer_code', $data ?? [], null);
        $this->setIfExists('custom_matching_reference', $data ?? [], null);
        $this->setIfExists('delivery_date', $data ?? [], null);
        $this->setIfExists('delivery_term', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('external_import_reference', $data ?? [], null);
        $this->setIfExists('imported_voucher_no', $data ?? [], null);
        $this->setIfExists('invoice_no', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('is_reversed', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('voucher_date', $data ?? [], null);
        $this->setIfExists('voucher_no', $data ?? [], null);
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets cid
     *
     * @return string|null
     */
    public function getCid()
    {
        return $this->container['cid'];
    }

    /**
     * Sets cid
     *
     * @param string|null $cid cid
     *
     * @return self
     */
    public function setCid($cid)
    {
        if (is_null($cid)) {
            throw new \InvalidArgumentException('non-nullable cid cannot be null');
        }
        $this->container['cid'] = $cid;

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
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
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
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
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
     * @return self
     */
    public function setCurrencyRate($currency_rate)
    {
        if (is_null($currency_rate)) {
            throw new \InvalidArgumentException('non-nullable currency_rate cannot be null');
        }
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets customer_code
     *
     * @return int|null
     */
    public function getCustomerCode()
    {
        return $this->container['customer_code'];
    }

    /**
     * Sets customer_code
     *
     * @param int|null $customer_code customer_code
     *
     * @return self
     */
    public function setCustomerCode($customer_code)
    {
        if (is_null($customer_code)) {
            throw new \InvalidArgumentException('non-nullable customer_code cannot be null');
        }
        $this->container['customer_code'] = $customer_code;

        return $this;
    }

    /**
     * Gets custom_matching_reference
     *
     * @return string|null
     */
    public function getCustomMatchingReference()
    {
        return $this->container['custom_matching_reference'];
    }

    /**
     * Sets custom_matching_reference
     *
     * @param string|null $custom_matching_reference custom_matching_reference
     *
     * @return self
     */
    public function setCustomMatchingReference($custom_matching_reference)
    {
        if (is_null($custom_matching_reference)) {
            throw new \InvalidArgumentException('non-nullable custom_matching_reference cannot be null');
        }
        $this->container['custom_matching_reference'] = $custom_matching_reference;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string|null $delivery_date delivery_date
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        if (is_null($delivery_date)) {
            throw new \InvalidArgumentException('non-nullable delivery_date cannot be null');
        }
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets delivery_term
     *
     * @return string|null
     */
    public function getDeliveryTerm()
    {
        return $this->container['delivery_term'];
    }

    /**
     * Sets delivery_term
     *
     * @param string|null $delivery_term delivery_term
     *
     * @return self
     */
    public function setDeliveryTerm($delivery_term)
    {
        if (is_null($delivery_term)) {
            throw new \InvalidArgumentException('non-nullable delivery_term cannot be null');
        }
        $this->container['delivery_term'] = $delivery_term;

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
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
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
     * @return self
     */
    public function setExternalImportReference($external_import_reference)
    {
        if (is_null($external_import_reference)) {
            throw new \InvalidArgumentException('non-nullable external_import_reference cannot be null');
        }
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
     * @return self
     */
    public function setImportedVoucherNo($imported_voucher_no)
    {
        if (is_null($imported_voucher_no)) {
            throw new \InvalidArgumentException('non-nullable imported_voucher_no cannot be null');
        }
        $this->container['imported_voucher_no'] = $imported_voucher_no;

        return $this;
    }

    /**
     * Gets invoice_no
     *
     * @return int|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param int|null $invoice_no invoice_no
     *
     * @return self
     */
    public function setInvoiceNo($invoice_no)
    {
        if (is_null($invoice_no)) {
            throw new \InvalidArgumentException('non-nullable invoice_no cannot be null');
        }
        $this->container['invoice_no'] = $invoice_no;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * @return self
     */
    public function setIsReversed($is_reversed)
    {
        if (is_null($is_reversed)) {
            throw new \InvalidArgumentException('non-nullable is_reversed cannot be null');
        }
        $this->container['is_reversed'] = $is_reversed;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \PowerOfficeGo\Model\OutgoingInvoiceVoucherLine[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \PowerOfficeGo\Model\OutgoingInvoiceVoucherLine[]|null $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            throw new \InvalidArgumentException('non-nullable lines cannot be null');
        }
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
     * @return self
     */
    public function setVoucherDate($voucher_date)
    {
        if (is_null($voucher_date)) {
            throw new \InvalidArgumentException('non-nullable voucher_date cannot be null');
        }
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
     * @return self
     */
    public function setVoucherNo($voucher_no)
    {
        if (is_null($voucher_no)) {
            throw new \InvalidArgumentException('non-nullable voucher_no cannot be null');
        }
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
        return (string)json_encode(
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


