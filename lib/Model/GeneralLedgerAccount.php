<?php
/**
 * GeneralLedgerAccount
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
 * GeneralLedgerAccount Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeneralLedgerAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['created_from_import_journal_id'] = isset($data['created_from_import_journal_id']) ? $data['created_from_import_journal_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['department_code'] = isset($data['department_code']) ? $data['department_code'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_department_required'] = isset($data['is_department_required']) ? $data['is_department_required'] : null;
        $this->container['is_project_required'] = isset($data['is_project_required']) ? $data['is_project_required'] : null;
        $this->container['is_vat_code_locked_after_posting'] = isset($data['is_vat_code_locked_after_posting']) ? $data['is_vat_code_locked_after_posting'] : null;
        $this->container['last_changed'] = isset($data['last_changed']) ? $data['last_changed'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['project_code'] = isset($data['project_code']) ? $data['project_code'] : null;
        $this->container['vat_code'] = isset($data['vat_code']) ? $data['vat_code'] : null;
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
     * @return $this
     */
    public function setCode($code)
    {
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
     * @return $this
     */
    public function setCreatedFromImportJournalId($created_from_import_journal_id)
    {
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
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
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
     * @return $this
     */
    public function setDepartmentCode($department_code)
    {
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
     * @return $this
     */
    public function setIsActive($is_active)
    {
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
     * @return $this
     */
    public function setIsDepartmentRequired($is_department_required)
    {
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
     * @return $this
     */
    public function setIsProjectRequired($is_project_required)
    {
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
     * @return $this
     */
    public function setIsVatCodeLockedAfterPosting($is_vat_code_locked_after_posting)
    {
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
     * @return $this
     */
    public function setLastChanged($last_changed)
    {
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
     * @return $this
     */
    public function setName($name)
    {
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
     * @return $this
     */
    public function setProjectCode($project_code)
    {
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
     * @return $this
     */
    public function setVatCode($vat_code)
    {
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

