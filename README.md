# OpenAPIClient-php
PowerOffice Go API.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/spysystem/poweroffice-go.git"
    }
  ],
  "require": {
    "spysystem/poweroffice-go": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new PowerOfficeGo\Api\AuthenticateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = 'grant_type_example'; // string | 
$refresh_token = 'refresh_token_example'; // string | 

try {
    $result = $apiInstance->getAccessToken($grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-demo.poweroffice.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticateApi* | [**getAccessToken**](docs/Api/AuthenticateApi.md#getaccesstoken) | **POST** /OAuth/Token | Get Access Token
*ContactsApi* | [**createOrUpdateContactGroup**](docs/Api/ContactsApi.md#createorupdatecontactgroup) | **POST** /ContactGroup | Create or Update Contact Group
*ContactsApi* | [**createOrUpdateCustomer**](docs/Api/ContactsApi.md#createorupdatecustomer) | **POST** /Customer | Create or Update Customer
*ContactsApi* | [**createOrUpdateSupplier**](docs/Api/ContactsApi.md#createorupdatesupplier) | **POST** /Supplier | Create or Update Supplier
*ContactsApi* | [**getContactGroup**](docs/Api/ContactsApi.md#getcontactgroup) | **GET** /ContactGroup/{id} | Get Contact Group
*ContactsApi* | [**getCustomer**](docs/Api/ContactsApi.md#getcustomer) | **GET** /Customer/{id} | Get Customer
*ContactsApi* | [**getSupplier**](docs/Api/ContactsApi.md#getsupplier) | **GET** /Supplier/{id} | Get Supplier
*ContactsApi* | [**searchContactGroups**](docs/Api/ContactsApi.md#searchcontactgroups) | **GET** /ContactGroup | Search Contact Groups
*ContactsApi* | [**searchCustomers**](docs/Api/ContactsApi.md#searchcustomers) | **GET** /Customer | Search Customers
*ContactsApi* | [**searchSuppliers**](docs/Api/ContactsApi.md#searchsuppliers) | **GET** /Supplier | Search Suppliers
*LedgerApi* | [**getCustomerLedger**](docs/Api/LedgerApi.md#getcustomerledger) | **GET** /Reporting/CustomerLedger/{matchId} | Get Customer Ledgers
*LedgerApi* | [**searchCustomerLedger**](docs/Api/LedgerApi.md#searchcustomerledger) | **GET** /Reporting/CustomerLedger | Search CustomerLedgers
*LedgerApi* | [**searchGeneralLedgerAccount**](docs/Api/LedgerApi.md#searchgeneralledgeraccount) | **GET** /GeneralLedgerAccount | Search GeneralLedgerAccount
*LedgerApi* | [**searchVatCode**](docs/Api/LedgerApi.md#searchvatcode) | **GET** /VatCode | Search Vat Code
*VoucherApi* | [**createOrUpdateBankJournalVoucher**](docs/Api/VoucherApi.md#createorupdatebankjournalvoucher) | **POST** /Voucher/BankJournalVoucher | Create or Update BankJournalVoucher
*VoucherApi* | [**createOrUpdateIncomingInvoiceVoucher**](docs/Api/VoucherApi.md#createorupdateincominginvoicevoucher) | **POST** /Voucher/IncomingInvoiceVoucher | Create or Update Incoming Invoice Voucher
*VoucherApi* | [**createOrUpdateManualJournalVoucher**](docs/Api/VoucherApi.md#createorupdatemanualjournalvoucher) | **POST** /Voucher/ManualJournalVoucher | Create or Update ManualJournalVoucher
*VoucherApi* | [**createOrUpdateOutgoingInvoiceVoucher**](docs/Api/VoucherApi.md#createorupdateoutgoinginvoicevoucher) | **POST** /Voucher/OutgoingInvoiceVoucher | Create or Update Outgoing Invoice Voucher
*VoucherApi* | [**getBankJournalVoucher**](docs/Api/VoucherApi.md#getbankjournalvoucher) | **GET** /Voucher/BankJournalVoucher/{id} | Get BankJournalVoucher
*VoucherApi* | [**getIncomingInvoiceVoucher**](docs/Api/VoucherApi.md#getincominginvoicevoucher) | **GET** /Voucher/IncomingInvoiceVoucher/{id} | Get Incoming Invoice Voucher
*VoucherApi* | [**getManualJournalVoucher**](docs/Api/VoucherApi.md#getmanualjournalvoucher) | **GET** /Voucher/ManualJournalVoucher/{id} | Get ManualJournalVoucher
*VoucherApi* | [**getOutgoingInvoiceVoucher**](docs/Api/VoucherApi.md#getoutgoinginvoicevoucher) | **GET** /Voucher/OutgoingInvoiceVoucher/{id} | Get Outgoing Invoice Voucher
*VoucherApi* | [**searchBankJournalVoucher**](docs/Api/VoucherApi.md#searchbankjournalvoucher) | **GET** /Voucher/BankJournalVoucher | Search Bank Journal Vouchers
*VoucherApi* | [**searchIncomingInvoiceVoucher**](docs/Api/VoucherApi.md#searchincominginvoicevoucher) | **GET** /Voucher/IncomingInvoiceVoucher | Search Incoming Invoice Vouchers
*VoucherApi* | [**searchManualJournalVoucher**](docs/Api/VoucherApi.md#searchmanualjournalvoucher) | **GET** /Voucher/ManualJournalVoucher | Search Manual Journal Vouchers
*VoucherApi* | [**searchOutgoingInvoiceVoucher**](docs/Api/VoucherApi.md#searchoutgoinginvoicevoucher) | **GET** /Voucher/OutgoingInvoiceVoucher | Search Outgoing Invoice Vouchers


## Documentation For Models

 - [Authentication](docs/Model/Authentication.md)
 - [AuthenticationResponse](docs/Model/AuthenticationResponse.md)
 - [BankJournalVoucher](docs/Model/BankJournalVoucher.md)
 - [BankJournalVoucherLine](docs/Model/BankJournalVoucherLine.md)
 - [BaseResponse](docs/Model/BaseResponse.md)
 - [ContactGroup](docs/Model/ContactGroup.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerLedgerEntry](docs/Model/CustomerLedgerEntry.md)
 - [GeneralLedgerAccount](docs/Model/GeneralLedgerAccount.md)
 - [GetBankJournalVoucherResponse](docs/Model/GetBankJournalVoucherResponse.md)
 - [GetContactGroupResponse](docs/Model/GetContactGroupResponse.md)
 - [GetCustomerLedgerEntryResponse](docs/Model/GetCustomerLedgerEntryResponse.md)
 - [GetCustomerResponse](docs/Model/GetCustomerResponse.md)
 - [GetIncomingInvoiceVoucherResponse](docs/Model/GetIncomingInvoiceVoucherResponse.md)
 - [GetManualJournalVoucherResponse](docs/Model/GetManualJournalVoucherResponse.md)
 - [GetOutgoingInvoiceVoucherResponse](docs/Model/GetOutgoingInvoiceVoucherResponse.md)
 - [GetSupplierResponse](docs/Model/GetSupplierResponse.md)
 - [IncomingInvoiceVoucher](docs/Model/IncomingInvoiceVoucher.md)
 - [IncomingInvoiceVoucherLine](docs/Model/IncomingInvoiceVoucherLine.md)
 - [MailAddress](docs/Model/MailAddress.md)
 - [ManualJournalVoucher](docs/Model/ManualJournalVoucher.md)
 - [ManualJournalVoucherLine](docs/Model/ManualJournalVoucherLine.md)
 - [OutgoingInvoiceVoucher](docs/Model/OutgoingInvoiceVoucher.md)
 - [OutgoingInvoiceVoucherLine](docs/Model/OutgoingInvoiceVoucherLine.md)
 - [SearchBankJournalVoucherResponse](docs/Model/SearchBankJournalVoucherResponse.md)
 - [SearchContactGroupResponse](docs/Model/SearchContactGroupResponse.md)
 - [SearchCustomerLedgerEntryResponse](docs/Model/SearchCustomerLedgerEntryResponse.md)
 - [SearchCustomerResponse](docs/Model/SearchCustomerResponse.md)
 - [SearchGeneralLedgerAccountResponse](docs/Model/SearchGeneralLedgerAccountResponse.md)
 - [SearchIncomingInvoiceVoucherResponse](docs/Model/SearchIncomingInvoiceVoucherResponse.md)
 - [SearchManualJournalVoucherResponse](docs/Model/SearchManualJournalVoucherResponse.md)
 - [SearchOutgoingInvoiceVoucherResponse](docs/Model/SearchOutgoingInvoiceVoucherResponse.md)
 - [SearchSupplierResponse](docs/Model/SearchSupplierResponse.md)
 - [SearchVatCodeResponse](docs/Model/SearchVatCodeResponse.md)
 - [Supplier](docs/Model/Supplier.md)
 - [Validation](docs/Model/Validation.md)
 - [VatCode](docs/Model/VatCode.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication

## oAuth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **write**: allows modifying resources
 - **read**: allows reading resources


## Author




