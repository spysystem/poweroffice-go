<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Customer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return CustomerModelFields
      */
    public static function GetModelFields(): CustomerModelFields
    {
        return new CustomerModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return CustomerModelAttributes
      */
    public static function GetModelAttributes(): CustomerModelAttributes
    {
        return new CustomerModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_delivery_type' => 'int',
        'is_vat_free' => 'bool',
        'discount_percent' => 'int',
        'invoice_email_address' => 'string',
        'payment_terms' => 'int',
        'use_factoring' => 'bool',
        'send_reminders' => 'bool',
        'do_not_add_late_payment_fees' => 'bool',
        'do_not_add_late_payment_interest' => 'bool',
        'delivery_term' => 'string',
        'name' => 'string',
        'legal_name' => 'string',
        'contact_person_id' => 'int',
        'vat_number' => 'string',
        'website_url' => 'string',
        'since' => 'string',
        'is_person' => 'bool',
        'currency_code' => 'string',
        'id' => 'int',
        'code' => 'int',
        'external_code' => 'int',
        'mail_address' => '\PowerOfficeGo\Model\MailAddress',
        'street_address' => '\PowerOfficeGo\Model\MailAddress',
        'street_addresses' => '\PowerOfficeGo\Model\MailAddress[]',
        'email_address' => 'string',
        'phone_number' => 'string',
        'is_archived' => 'bool',
        'last_changed' => 'string',
        'contact_groups' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_delivery_type' => null,
        'is_vat_free' => null,
        'discount_percent' => null,
        'invoice_email_address' => null,
        'payment_terms' => null,
        'use_factoring' => null,
        'send_reminders' => null,
        'do_not_add_late_payment_fees' => null,
        'do_not_add_late_payment_interest' => null,
        'delivery_term' => null,
        'name' => null,
        'legal_name' => null,
        'contact_person_id' => null,
        'vat_number' => null,
        'website_url' => null,
        'since' => null,
        'is_person' => null,
        'currency_code' => null,
        'id' => null,
        'code' => null,
        'external_code' => null,
        'mail_address' => null,
        'street_address' => null,
        'street_addresses' => null,
        'email_address' => null,
        'phone_number' => null,
        'is_archived' => null,
        'last_changed' => null,
        'contact_groups' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_delivery_type' => false,
		'is_vat_free' => false,
		'discount_percent' => false,
		'invoice_email_address' => false,
		'payment_terms' => false,
		'use_factoring' => false,
		'send_reminders' => false,
		'do_not_add_late_payment_fees' => false,
		'do_not_add_late_payment_interest' => false,
		'delivery_term' => false,
		'name' => false,
		'legal_name' => false,
		'contact_person_id' => false,
		'vat_number' => false,
		'website_url' => false,
		'since' => false,
		'is_person' => false,
		'currency_code' => false,
		'id' => false,
		'code' => false,
		'external_code' => false,
		'mail_address' => false,
		'street_address' => false,
		'street_addresses' => false,
		'email_address' => false,
		'phone_number' => false,
		'is_archived' => false,
		'last_changed' => false,
		'contact_groups' => false
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
        'invoice_delivery_type' => 'invoiceDeliveryType',
        'is_vat_free' => 'isVatFree',
        'discount_percent' => 'discountPercent',
        'invoice_email_address' => 'invoiceEmailAddress',
        'payment_terms' => 'paymentTerms',
        'use_factoring' => 'useFactoring',
        'send_reminders' => 'sendReminders',
        'do_not_add_late_payment_fees' => 'doNotAddLatePaymentFees',
        'do_not_add_late_payment_interest' => 'doNotAddLatePaymentInterest',
        'delivery_term' => 'deliveryTerm',
        'name' => 'name',
        'legal_name' => 'legalName',
        'contact_person_id' => 'contactPersonId',
        'vat_number' => 'vatNumber',
        'website_url' => 'websiteUrl',
        'since' => 'since',
        'is_person' => 'isPerson',
        'currency_code' => 'currencyCode',
        'id' => 'id',
        'code' => 'code',
        'external_code' => 'externalCode',
        'mail_address' => 'mailAddress',
        'street_address' => 'streetAddress',
        'street_addresses' => 'streetAddresses',
        'email_address' => 'emailAddress',
        'phone_number' => 'phoneNumber',
        'is_archived' => 'isArchived',
        'last_changed' => 'lastChanged',
        'contact_groups' => 'contactGroups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_delivery_type' => 'setInvoiceDeliveryType',
        'is_vat_free' => 'setIsVatFree',
        'discount_percent' => 'setDiscountPercent',
        'invoice_email_address' => 'setInvoiceEmailAddress',
        'payment_terms' => 'setPaymentTerms',
        'use_factoring' => 'setUseFactoring',
        'send_reminders' => 'setSendReminders',
        'do_not_add_late_payment_fees' => 'setDoNotAddLatePaymentFees',
        'do_not_add_late_payment_interest' => 'setDoNotAddLatePaymentInterest',
        'delivery_term' => 'setDeliveryTerm',
        'name' => 'setName',
        'legal_name' => 'setLegalName',
        'contact_person_id' => 'setContactPersonId',
        'vat_number' => 'setVatNumber',
        'website_url' => 'setWebsiteUrl',
        'since' => 'setSince',
        'is_person' => 'setIsPerson',
        'currency_code' => 'setCurrencyCode',
        'id' => 'setId',
        'code' => 'setCode',
        'external_code' => 'setExternalCode',
        'mail_address' => 'setMailAddress',
        'street_address' => 'setStreetAddress',
        'street_addresses' => 'setStreetAddresses',
        'email_address' => 'setEmailAddress',
        'phone_number' => 'setPhoneNumber',
        'is_archived' => 'setIsArchived',
        'last_changed' => 'setLastChanged',
        'contact_groups' => 'setContactGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_delivery_type' => 'getInvoiceDeliveryType',
        'is_vat_free' => 'getIsVatFree',
        'discount_percent' => 'getDiscountPercent',
        'invoice_email_address' => 'getInvoiceEmailAddress',
        'payment_terms' => 'getPaymentTerms',
        'use_factoring' => 'getUseFactoring',
        'send_reminders' => 'getSendReminders',
        'do_not_add_late_payment_fees' => 'getDoNotAddLatePaymentFees',
        'do_not_add_late_payment_interest' => 'getDoNotAddLatePaymentInterest',
        'delivery_term' => 'getDeliveryTerm',
        'name' => 'getName',
        'legal_name' => 'getLegalName',
        'contact_person_id' => 'getContactPersonId',
        'vat_number' => 'getVatNumber',
        'website_url' => 'getWebsiteUrl',
        'since' => 'getSince',
        'is_person' => 'getIsPerson',
        'currency_code' => 'getCurrencyCode',
        'id' => 'getId',
        'code' => 'getCode',
        'external_code' => 'getExternalCode',
        'mail_address' => 'getMailAddress',
        'street_address' => 'getStreetAddress',
        'street_addresses' => 'getStreetAddresses',
        'email_address' => 'getEmailAddress',
        'phone_number' => 'getPhoneNumber',
        'is_archived' => 'getIsArchived',
        'last_changed' => 'getLastChanged',
        'contact_groups' => 'getContactGroups'
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
        $this->setIfExists('invoice_delivery_type', $data ?? [], null);
        $this->setIfExists('is_vat_free', $data ?? [], null);
        $this->setIfExists('discount_percent', $data ?? [], null);
        $this->setIfExists('invoice_email_address', $data ?? [], null);
        $this->setIfExists('payment_terms', $data ?? [], null);
        $this->setIfExists('use_factoring', $data ?? [], null);
        $this->setIfExists('send_reminders', $data ?? [], null);
        $this->setIfExists('do_not_add_late_payment_fees', $data ?? [], null);
        $this->setIfExists('do_not_add_late_payment_interest', $data ?? [], null);
        $this->setIfExists('delivery_term', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('legal_name', $data ?? [], null);
        $this->setIfExists('contact_person_id', $data ?? [], null);
        $this->setIfExists('vat_number', $data ?? [], null);
        $this->setIfExists('website_url', $data ?? [], null);
        $this->setIfExists('since', $data ?? [], null);
        $this->setIfExists('is_person', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('external_code', $data ?? [], null);
        $this->setIfExists('mail_address', $data ?? [], null);
        $this->setIfExists('street_address', $data ?? [], null);
        $this->setIfExists('street_addresses', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('is_archived', $data ?? [], null);
        $this->setIfExists('last_changed', $data ?? [], null);
        $this->setIfExists('contact_groups', $data ?? [], null);
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

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 40)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 40.";
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
     * Gets invoice_delivery_type
     *
     * @return int|null
     */
    public function getInvoiceDeliveryType()
    {
        return $this->container['invoice_delivery_type'];
    }

    /**
     * Sets invoice_delivery_type
     *
     * @param int|null $invoice_delivery_type invoice_delivery_type
     *
     * @return self
     */
    public function setInvoiceDeliveryType($invoice_delivery_type)
    {
        if (is_null($invoice_delivery_type)) {
            throw new \InvalidArgumentException('non-nullable invoice_delivery_type cannot be null');
        }
        $this->container['invoice_delivery_type'] = $invoice_delivery_type;

        return $this;
    }

    /**
     * Gets is_vat_free
     *
     * @return bool|null
     */
    public function getIsVatFree()
    {
        return $this->container['is_vat_free'];
    }

    /**
     * Sets is_vat_free
     *
     * @param bool|null $is_vat_free is_vat_free
     *
     * @return self
     */
    public function setIsVatFree($is_vat_free)
    {
        if (is_null($is_vat_free)) {
            throw new \InvalidArgumentException('non-nullable is_vat_free cannot be null');
        }
        $this->container['is_vat_free'] = $is_vat_free;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return int|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param int|null $discount_percent discount_percent
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {
        if (is_null($discount_percent)) {
            throw new \InvalidArgumentException('non-nullable discount_percent cannot be null');
        }
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets invoice_email_address
     *
     * @return string|null
     */
    public function getInvoiceEmailAddress()
    {
        return $this->container['invoice_email_address'];
    }

    /**
     * Sets invoice_email_address
     *
     * @param string|null $invoice_email_address invoice_email_address
     *
     * @return self
     */
    public function setInvoiceEmailAddress($invoice_email_address)
    {
        if (is_null($invoice_email_address)) {
            throw new \InvalidArgumentException('non-nullable invoice_email_address cannot be null');
        }
        $this->container['invoice_email_address'] = $invoice_email_address;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return int|null
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param int|null $payment_terms payment_terms
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms)
    {
        if (is_null($payment_terms)) {
            throw new \InvalidArgumentException('non-nullable payment_terms cannot be null');
        }
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets use_factoring
     *
     * @return bool|null
     */
    public function getUseFactoring()
    {
        return $this->container['use_factoring'];
    }

    /**
     * Sets use_factoring
     *
     * @param bool|null $use_factoring use_factoring
     *
     * @return self
     */
    public function setUseFactoring($use_factoring)
    {
        if (is_null($use_factoring)) {
            throw new \InvalidArgumentException('non-nullable use_factoring cannot be null');
        }
        $this->container['use_factoring'] = $use_factoring;

        return $this;
    }

    /**
     * Gets send_reminders
     *
     * @return bool|null
     */
    public function getSendReminders()
    {
        return $this->container['send_reminders'];
    }

    /**
     * Sets send_reminders
     *
     * @param bool|null $send_reminders send_reminders
     *
     * @return self
     */
    public function setSendReminders($send_reminders)
    {
        if (is_null($send_reminders)) {
            throw new \InvalidArgumentException('non-nullable send_reminders cannot be null');
        }
        $this->container['send_reminders'] = $send_reminders;

        return $this;
    }

    /**
     * Gets do_not_add_late_payment_fees
     *
     * @return bool|null
     */
    public function getDoNotAddLatePaymentFees()
    {
        return $this->container['do_not_add_late_payment_fees'];
    }

    /**
     * Sets do_not_add_late_payment_fees
     *
     * @param bool|null $do_not_add_late_payment_fees do_not_add_late_payment_fees
     *
     * @return self
     */
    public function setDoNotAddLatePaymentFees($do_not_add_late_payment_fees)
    {
        if (is_null($do_not_add_late_payment_fees)) {
            throw new \InvalidArgumentException('non-nullable do_not_add_late_payment_fees cannot be null');
        }
        $this->container['do_not_add_late_payment_fees'] = $do_not_add_late_payment_fees;

        return $this;
    }

    /**
     * Gets do_not_add_late_payment_interest
     *
     * @return bool|null
     */
    public function getDoNotAddLatePaymentInterest()
    {
        return $this->container['do_not_add_late_payment_interest'];
    }

    /**
     * Sets do_not_add_late_payment_interest
     *
     * @param bool|null $do_not_add_late_payment_interest do_not_add_late_payment_interest
     *
     * @return self
     */
    public function setDoNotAddLatePaymentInterest($do_not_add_late_payment_interest)
    {
        if (is_null($do_not_add_late_payment_interest)) {
            throw new \InvalidArgumentException('non-nullable do_not_add_late_payment_interest cannot be null');
        }
        $this->container['do_not_add_late_payment_interest'] = $do_not_add_late_payment_interest;

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
     * Gets legal_name
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string|null $legal_name legal_name
     *
     * @return self
     */
    public function setLegalName($legal_name)
    {
        if (is_null($legal_name)) {
            throw new \InvalidArgumentException('non-nullable legal_name cannot be null');
        }
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets contact_person_id
     *
     * @return int|null
     */
    public function getContactPersonId()
    {
        return $this->container['contact_person_id'];
    }

    /**
     * Sets contact_person_id
     *
     * @param int|null $contact_person_id contact_person_id
     *
     * @return self
     */
    public function setContactPersonId($contact_person_id)
    {
        if (is_null($contact_person_id)) {
            throw new \InvalidArgumentException('non-nullable contact_person_id cannot be null');
        }
        $this->container['contact_person_id'] = $contact_person_id;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string|null $vat_number vat_number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        if (is_null($vat_number)) {
            throw new \InvalidArgumentException('non-nullable vat_number cannot be null');
        }
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string|null $website_url website_url
     *
     * @return self
     */
    public function setWebsiteUrl($website_url)
    {
        if (is_null($website_url)) {
            throw new \InvalidArgumentException('non-nullable website_url cannot be null');
        }
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets since
     *
     * @return string|null
     */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
     * Sets since
     *
     * @param string|null $since since
     *
     * @return self
     */
    public function setSince($since)
    {
        if (is_null($since)) {
            throw new \InvalidArgumentException('non-nullable since cannot be null');
        }
        $this->container['since'] = $since;

        return $this;
    }

    /**
     * Gets is_person
     *
     * @return bool|null
     */
    public function getIsPerson()
    {
        return $this->container['is_person'];
    }

    /**
     * Sets is_person
     *
     * @param bool|null $is_person is_person
     *
     * @return self
     */
    public function setIsPerson($is_person)
    {
        if (is_null($is_person)) {
            throw new \InvalidArgumentException('non-nullable is_person cannot be null');
        }
        $this->container['is_person'] = $is_person;

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
     * Gets external_code
     *
     * @return int|null
     */
    public function getExternalCode()
    {
        return $this->container['external_code'];
    }

    /**
     * Sets external_code
     *
     * @param int|null $external_code external_code
     *
     * @return self
     */
    public function setExternalCode($external_code)
    {
        if (is_null($external_code)) {
            throw new \InvalidArgumentException('non-nullable external_code cannot be null');
        }
        $this->container['external_code'] = $external_code;

        return $this;
    }

    /**
     * Gets mail_address
     *
     * @return \PowerOfficeGo\Model\MailAddress|null
     */
    public function getMailAddress()
    {
        return $this->container['mail_address'];
    }

    /**
     * Sets mail_address
     *
     * @param \PowerOfficeGo\Model\MailAddress|null $mail_address mail_address
     *
     * @return self
     */
    public function setMailAddress($mail_address)
    {
        if (is_null($mail_address)) {
            throw new \InvalidArgumentException('non-nullable mail_address cannot be null');
        }
        $this->container['mail_address'] = $mail_address;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return \PowerOfficeGo\Model\MailAddress|null
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param \PowerOfficeGo\Model\MailAddress|null $street_address street_address
     *
     * @return self
     */
    public function setStreetAddress($street_address)
    {
        if (is_null($street_address)) {
            throw new \InvalidArgumentException('non-nullable street_address cannot be null');
        }
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets street_addresses
     *
     * @return \PowerOfficeGo\Model\MailAddress[]|null
     */
    public function getStreetAddresses()
    {
        return $this->container['street_addresses'];
    }

    /**
     * Sets street_addresses
     *
     * @param \PowerOfficeGo\Model\MailAddress[]|null $street_addresses street_addresses
     *
     * @return self
     */
    public function setStreetAddresses($street_addresses)
    {
        if (is_null($street_addresses)) {
            throw new \InvalidArgumentException('non-nullable street_addresses cannot be null');
        }
        $this->container['street_addresses'] = $street_addresses;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        if ((mb_strlen($phone_number) > 40)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Customer., must be smaller than or equal to 40.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets is_archived
     *
     * @return bool|null
     */
    public function getIsArchived()
    {
        return $this->container['is_archived'];
    }

    /**
     * Sets is_archived
     *
     * @param bool|null $is_archived is_archived
     *
     * @return self
     */
    public function setIsArchived($is_archived)
    {
        if (is_null($is_archived)) {
            throw new \InvalidArgumentException('non-nullable is_archived cannot be null');
        }
        $this->container['is_archived'] = $is_archived;

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
     * Gets contact_groups
     *
     * @return string[]|null
     */
    public function getContactGroups()
    {
        return $this->container['contact_groups'];
    }

    /**
     * Sets contact_groups
     *
     * @param string[]|null $contact_groups contact_groups
     *
     * @return self
     */
    public function setContactGroups($contact_groups)
    {
        if (is_null($contact_groups)) {
            throw new \InvalidArgumentException('non-nullable contact_groups cannot be null');
        }
        $this->container['contact_groups'] = $contact_groups;

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


