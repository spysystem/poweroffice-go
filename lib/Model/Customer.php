<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  PowerOfficeGo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
        $this->container['invoice_delivery_type'] = isset($data['invoice_delivery_type']) ? $data['invoice_delivery_type'] : null;
        $this->container['is_vat_free'] = isset($data['is_vat_free']) ? $data['is_vat_free'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['invoice_email_address'] = isset($data['invoice_email_address']) ? $data['invoice_email_address'] : null;
        $this->container['payment_terms'] = isset($data['payment_terms']) ? $data['payment_terms'] : null;
        $this->container['use_factoring'] = isset($data['use_factoring']) ? $data['use_factoring'] : null;
        $this->container['send_reminders'] = isset($data['send_reminders']) ? $data['send_reminders'] : null;
        $this->container['do_not_add_late_payment_fees'] = isset($data['do_not_add_late_payment_fees']) ? $data['do_not_add_late_payment_fees'] : null;
        $this->container['do_not_add_late_payment_interest'] = isset($data['do_not_add_late_payment_interest']) ? $data['do_not_add_late_payment_interest'] : null;
        $this->container['delivery_term'] = isset($data['delivery_term']) ? $data['delivery_term'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['legal_name'] = isset($data['legal_name']) ? $data['legal_name'] : null;
        $this->container['contact_person_id'] = isset($data['contact_person_id']) ? $data['contact_person_id'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['since'] = isset($data['since']) ? $data['since'] : null;
        $this->container['is_person'] = isset($data['is_person']) ? $data['is_person'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['external_code'] = isset($data['external_code']) ? $data['external_code'] : null;
        $this->container['mail_address'] = isset($data['mail_address']) ? $data['mail_address'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['street_addresses'] = isset($data['street_addresses']) ? $data['street_addresses'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['is_archived'] = isset($data['is_archived']) ? $data['is_archived'] : null;
        $this->container['last_changed'] = isset($data['last_changed']) ? $data['last_changed'] : null;
        $this->container['contact_groups'] = isset($data['contact_groups']) ? $data['contact_groups'] : null;
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
     * @return $this
     */
    public function setInvoiceDeliveryType($invoice_delivery_type)
    {
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
     * @return $this
     */
    public function setIsVatFree($is_vat_free)
    {
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
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
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
     * @return $this
     */
    public function setInvoiceEmailAddress($invoice_email_address)
    {
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
     * @return $this
     */
    public function setPaymentTerms($payment_terms)
    {
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
     * @return $this
     */
    public function setUseFactoring($use_factoring)
    {
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
     * @return $this
     */
    public function setSendReminders($send_reminders)
    {
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
     * @return $this
     */
    public function setDoNotAddLatePaymentFees($do_not_add_late_payment_fees)
    {
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
     * @return $this
     */
    public function setDoNotAddLatePaymentInterest($do_not_add_late_payment_interest)
    {
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
     * @return $this
     */
    public function setDeliveryTerm($delivery_term)
    {
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
     * @return $this
     */
    public function setName($name)
    {
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
     * @return $this
     */
    public function setLegalName($legal_name)
    {
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
     * @return $this
     */
    public function setContactPersonId($contact_person_id)
    {
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
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
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
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
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
     * @return $this
     */
    public function setSince($since)
    {
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
     * @return $this
     */
    public function setIsPerson($is_person)
    {
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
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
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
     * @return $this
     */
    public function setExternalCode($external_code)
    {
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
     * @return $this
     */
    public function setMailAddress($mail_address)
    {
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
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
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
     * @return $this
     */
    public function setStreetAddresses($street_addresses)
    {
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
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
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
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
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
     * @return $this
     */
    public function setIsArchived($is_archived)
    {
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
     * @return $this
     */
    public function setLastChanged($last_changed)
    {
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
     * @return $this
     */
    public function setContactGroups($contact_groups)
    {
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


