<?php
/**
 * GeneralLedgerAccount
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
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * GeneralLedgerAccount Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GeneralLedgerAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return GeneralLedgerAccountModelFields
      */
    public static function GetModelFields(): GeneralLedgerAccountModelFields
    {
        return new GeneralLedgerAccountModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return GeneralLedgerAccountModelAttributes
      */
    public static function GetModelAttributes(): GeneralLedgerAccountModelAttributes
    {
        return new GeneralLedgerAccountModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeneralLedgerAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'code' => 'int',
        'created_from_import_journal_id' => 'string',
        'currency_code' => 'string',
        'department_code' => 'string',
        'is_active' => 'bool',
        'is_department_required' => 'bool',
        'is_project_required' => 'bool',
        'is_vat_code_locked_after_posting' => 'bool',
        'last_changed' => 'string',
        'name' => 'string',
        'project_code' => 'string',
        'vat_code' => 'string'
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
        'code' => null,
        'created_from_import_journal_id' => null,
        'currency_code' => null,
        'department_code' => null,
        'is_active' => null,
        'is_department_required' => null,
        'is_project_required' => null,
        'is_vat_code_locked_after_posting' => null,
        'last_changed' => null,
        'name' => null,
        'project_code' => null,
        'vat_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'code' => false,
		'created_from_import_journal_id' => false,
		'currency_code' => false,
		'department_code' => false,
		'is_active' => false,
		'is_department_required' => false,
		'is_project_required' => false,
		'is_vat_code_locked_after_posting' => false,
		'last_changed' => false,
		'name' => false,
		'project_code' => false,
		'vat_code' => false
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
        'code' => 'code',
        'created_from_import_journal_id' => 'createdFromImportJournalId',
        'currency_code' => 'currencyCode',
        'department_code' => 'departmentCode',
        'is_active' => 'isActive',
        'is_department_required' => 'isDepartmentRequired',
        'is_project_required' => 'isProjectRequired',
        'is_vat_code_locked_after_posting' => 'isVatCodeLockedAfterPosting',
        'last_changed' => 'lastChanged',
        'name' => 'name',
        'project_code' => 'projectCode',
        'vat_code' => 'vatCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'created_from_import_journal_id' => 'setCreatedFromImportJournalId',
        'currency_code' => 'setCurrencyCode',
        'department_code' => 'setDepartmentCode',
        'is_active' => 'setIsActive',
        'is_department_required' => 'setIsDepartmentRequired',
        'is_project_required' => 'setIsProjectRequired',
        'is_vat_code_locked_after_posting' => 'setIsVatCodeLockedAfterPosting',
        'last_changed' => 'setLastChanged',
        'name' => 'setName',
        'project_code' => 'setProjectCode',
        'vat_code' => 'setVatCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'created_from_import_journal_id' => 'getCreatedFromImportJournalId',
        'currency_code' => 'getCurrencyCode',
        'department_code' => 'getDepartmentCode',
        'is_active' => 'getIsActive',
        'is_department_required' => 'getIsDepartmentRequired',
        'is_project_required' => 'getIsProjectRequired',
        'is_vat_code_locked_after_posting' => 'getIsVatCodeLockedAfterPosting',
        'last_changed' => 'getLastChanged',
        'name' => 'getName',
        'project_code' => 'getProjectCode',
        'vat_code' => 'getVatCode'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('created_from_import_journal_id', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('department_code', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_department_required', $data ?? [], null);
        $this->setIfExists('is_project_required', $data ?? [], null);
        $this->setIfExists('is_vat_code_locked_after_posting', $data ?? [], null);
        $this->setIfExists('last_changed', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('project_code', $data ?? [], null);
        $this->setIfExists('vat_code', $data ?? [], null);
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
     * Gets code
     *
     * @return int|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {

        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets created_from_import_journal_id
     *
     * @return string|null
     */
    public function getCreatedFromImportJournalId()
    {
        return $this->container['created_from_import_journal_id'];
    }

    /**
     * Sets created_from_import_journal_id
     *
     * @param string|null $created_from_import_journal_id created_from_import_journal_id
     *
     * @return self
     */
    public function setCreatedFromImportJournalId($created_from_import_journal_id)
    {

        if (is_null($created_from_import_journal_id)) {
            throw new \InvalidArgumentException('non-nullable created_from_import_journal_id cannot be null');
        }

        $this->container['created_from_import_journal_id'] = $created_from_import_journal_id;

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
     * Gets department_code
     *
     * @return string|null
     */
    public function getDepartmentCode()
    {
        return $this->container['department_code'];
    }

    /**
     * Sets department_code
     *
     * @param string|null $department_code department_code
     *
     * @return self
     */
    public function setDepartmentCode($department_code)
    {

        if (is_null($department_code)) {
            throw new \InvalidArgumentException('non-nullable department_code cannot be null');
        }

        $this->container['department_code'] = $department_code;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {

        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }

        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_department_required
     *
     * @return bool|null
     */
    public function getIsDepartmentRequired()
    {
        return $this->container['is_department_required'];
    }

    /**
     * Sets is_department_required
     *
     * @param bool|null $is_department_required is_department_required
     *
     * @return self
     */
    public function setIsDepartmentRequired($is_department_required)
    {

        if (is_null($is_department_required)) {
            throw new \InvalidArgumentException('non-nullable is_department_required cannot be null');
        }

        $this->container['is_department_required'] = $is_department_required;

        return $this;
    }

    /**
     * Gets is_project_required
     *
     * @return bool|null
     */
    public function getIsProjectRequired()
    {
        return $this->container['is_project_required'];
    }

    /**
     * Sets is_project_required
     *
     * @param bool|null $is_project_required is_project_required
     *
     * @return self
     */
    public function setIsProjectRequired($is_project_required)
    {

        if (is_null($is_project_required)) {
            throw new \InvalidArgumentException('non-nullable is_project_required cannot be null');
        }

        $this->container['is_project_required'] = $is_project_required;

        return $this;
    }

    /**
     * Gets is_vat_code_locked_after_posting
     *
     * @return bool|null
     */
    public function getIsVatCodeLockedAfterPosting()
    {
        return $this->container['is_vat_code_locked_after_posting'];
    }

    /**
     * Sets is_vat_code_locked_after_posting
     *
     * @param bool|null $is_vat_code_locked_after_posting is_vat_code_locked_after_posting
     *
     * @return self
     */
    public function setIsVatCodeLockedAfterPosting($is_vat_code_locked_after_posting)
    {

        if (is_null($is_vat_code_locked_after_posting)) {
            throw new \InvalidArgumentException('non-nullable is_vat_code_locked_after_posting cannot be null');
        }

        $this->container['is_vat_code_locked_after_posting'] = $is_vat_code_locked_after_posting;

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
     * @return self
     */
    public function setLastChanged($last_changed)
    {

        if (is_null($last_changed)) {
            throw new \InvalidArgumentException('non-nullable last_changed cannot be null');
        }

        $this->container['last_changed'] = $last_changed;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets project_code
     *
     * @return string|null
     */
    public function getProjectCode()
    {
        return $this->container['project_code'];
    }

    /**
     * Sets project_code
     *
     * @param string|null $project_code project_code
     *
     * @return self
     */
    public function setProjectCode($project_code)
    {

        if (is_null($project_code)) {
            throw new \InvalidArgumentException('non-nullable project_code cannot be null');
        }

        $this->container['project_code'] = $project_code;

        return $this;
    }

    /**
     * Gets vat_code
     *
     * @return string|null
     */
    public function getVatCode()
    {
        return $this->container['vat_code'];
    }

    /**
     * Sets vat_code
     *
     * @param string|null $vat_code vat_code
     *
     * @return self
     */
    public function setVatCode($vat_code)
    {

        if (is_null($vat_code)) {
            throw new \InvalidArgumentException('non-nullable vat_code cannot be null');
        }

        $this->container['vat_code'] = $vat_code;

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


