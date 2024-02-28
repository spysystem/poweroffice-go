# OpenAPIClient-php

PowerOffice Go API.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
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
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
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
$grant_type = 'grant_type_example'; // string
$refresh_token = 'refresh_token_example'; // string

try {
    $result = $apiInstance->getAccessToken($grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-demo.poweroffice.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticateApi* | [**getAccessToken**](docs/Api/AuthenticateApi.md#getaccesstoken) | **POST** /OAuth/Token | Get Access Token
*CompanyApi* | [**getClient**](docs/Api/CompanyApi.md#getclient) | **GET** /Client | Get Client
*ContactsApi* | [**createOrUpdateContactGroup**](docs/Api/ContactsApi.md#createorupdatecontactgroup) | **POST** /ContactGroup | Create or Update Contact Group
*ContactsApi* | [**createOrUpdateCustomer**](docs/Api/ContactsApi.md#createorupdatecustomer) | **POST** /Customer | Create or Update Customer
*ContactsApi* | [**createOrUpdateSupplier**](docs/Api/ContactsApi.md#createorupdatesupplier) | **POST** /Supplier | Create or Update Supplier
*ContactsApi* | [**getContactGroup**](docs/Api/ContactsApi.md#getcontactgroup) | **GET** /ContactGroup/{id} | Get Contact Group
*ContactsApi* | [**getCustomer**](docs/Api/ContactsApi.md#getcustomer) | **GET** /Customer/{id} | Get Customer
*ContactsApi* | [**getCustomersBalance**](docs/Api/ContactsApi.md#getcustomersbalance) | **GET** /Reporting/CustomerBalance | Service to query CustomerBalance
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
*VoucherApi* | [**createVoucherDocumentation**](docs/Api/VoucherApi.md#createvoucherdocumentation) | **POST** /Voucher/VoucherDocumentation | Create Voucher Documentation
*VoucherApi* | [**getBankJournalVoucher**](docs/Api/VoucherApi.md#getbankjournalvoucher) | **GET** /Voucher/BankJournalVoucher/{id} | Get BankJournalVoucher
*VoucherApi* | [**getIncomingInvoiceVoucher**](docs/Api/VoucherApi.md#getincominginvoicevoucher) | **GET** /Voucher/IncomingInvoiceVoucher/{id} | Get Incoming Invoice Voucher
*VoucherApi* | [**getManualJournalVoucher**](docs/Api/VoucherApi.md#getmanualjournalvoucher) | **GET** /Voucher/ManualJournalVoucher/{id} | Get ManualJournalVoucher
*VoucherApi* | [**getOutgoingInvoiceVoucher**](docs/Api/VoucherApi.md#getoutgoinginvoicevoucher) | **GET** /Voucher/OutgoingInvoiceVoucher/{id} | Get Outgoing Invoice Voucher
*VoucherApi* | [**searchBankJournalVoucher**](docs/Api/VoucherApi.md#searchbankjournalvoucher) | **GET** /Voucher/BankJournalVoucher | Search Bank Journal Vouchers
*VoucherApi* | [**searchIncomingInvoiceVoucher**](docs/Api/VoucherApi.md#searchincominginvoicevoucher) | **GET** /Voucher/IncomingInvoiceVoucher | Search Incoming Invoice Vouchers
*VoucherApi* | [**searchManualJournalVoucher**](docs/Api/VoucherApi.md#searchmanualjournalvoucher) | **GET** /Voucher/ManualJournalVoucher | Search Manual Journal Vouchers
*VoucherApi* | [**searchOutgoingInvoiceVoucher**](docs/Api/VoucherApi.md#searchoutgoinginvoicevoucher) | **GET** /Voucher/OutgoingInvoiceVoucher | Search Outgoing Invoice Vouchers

## Models

- [AuthenticationResponse](docs/Model/AuthenticationResponse.md)
- [BankJournalVoucher](docs/Model/BankJournalVoucher.md)
- [BankJournalVoucherLine](docs/Model/BankJournalVoucherLine.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [Client](docs/Model/Client.md)
- [ContactGroup](docs/Model/ContactGroup.md)
- [Customer](docs/Model/Customer.md)
- [CustomerBalance](docs/Model/CustomerBalance.md)
- [CustomerLedgerEntry](docs/Model/CustomerLedgerEntry.md)
- [GeneralLedgerAccount](docs/Model/GeneralLedgerAccount.md)
- [GetBankJournalVoucherResponse](docs/Model/GetBankJournalVoucherResponse.md)
- [GetBankJournalVoucherResponseAllOf](docs/Model/GetBankJournalVoucherResponseAllOf.md)
- [GetClientResponse](docs/Model/GetClientResponse.md)
- [GetClientResponseAllOf](docs/Model/GetClientResponseAllOf.md)
- [GetContactGroupResponse](docs/Model/GetContactGroupResponse.md)
- [GetContactGroupResponseAllOf](docs/Model/GetContactGroupResponseAllOf.md)
- [GetCustomerBalanceResponse](docs/Model/GetCustomerBalanceResponse.md)
- [GetCustomerBalanceResponseAllOf](docs/Model/GetCustomerBalanceResponseAllOf.md)
- [GetCustomerLedgerEntryResponse](docs/Model/GetCustomerLedgerEntryResponse.md)
- [GetCustomerLedgerEntryResponseAllOf](docs/Model/GetCustomerLedgerEntryResponseAllOf.md)
- [GetCustomerResponse](docs/Model/GetCustomerResponse.md)
- [GetCustomerResponseAllOf](docs/Model/GetCustomerResponseAllOf.md)
- [GetIncomingInvoiceVoucherResponse](docs/Model/GetIncomingInvoiceVoucherResponse.md)
- [GetIncomingInvoiceVoucherResponseAllOf](docs/Model/GetIncomingInvoiceVoucherResponseAllOf.md)
- [GetManualJournalVoucherResponse](docs/Model/GetManualJournalVoucherResponse.md)
- [GetManualJournalVoucherResponseAllOf](docs/Model/GetManualJournalVoucherResponseAllOf.md)
- [GetOutgoingInvoiceVoucherResponse](docs/Model/GetOutgoingInvoiceVoucherResponse.md)
- [GetOutgoingInvoiceVoucherResponseAllOf](docs/Model/GetOutgoingInvoiceVoucherResponseAllOf.md)
- [GetSupplierResponse](docs/Model/GetSupplierResponse.md)
- [GetSupplierResponseAllOf](docs/Model/GetSupplierResponseAllOf.md)
- [GetVoucherDocumentationResponse](docs/Model/GetVoucherDocumentationResponse.md)
- [GetVoucherDocumentationResponseAllOf](docs/Model/GetVoucherDocumentationResponseAllOf.md)
- [IncomingInvoiceVoucher](docs/Model/IncomingInvoiceVoucher.md)
- [IncomingInvoiceVoucherLine](docs/Model/IncomingInvoiceVoucherLine.md)
- [MailAddress](docs/Model/MailAddress.md)
- [ManualJournalVoucher](docs/Model/ManualJournalVoucher.md)
- [ManualJournalVoucherLine](docs/Model/ManualJournalVoucherLine.md)
- [OutgoingInvoiceVoucher](docs/Model/OutgoingInvoiceVoucher.md)
- [OutgoingInvoiceVoucherLine](docs/Model/OutgoingInvoiceVoucherLine.md)
- [SearchBankJournalVoucherResponse](docs/Model/SearchBankJournalVoucherResponse.md)
- [SearchBankJournalVoucherResponseAllOf](docs/Model/SearchBankJournalVoucherResponseAllOf.md)
- [SearchContactGroupResponse](docs/Model/SearchContactGroupResponse.md)
- [SearchContactGroupResponseAllOf](docs/Model/SearchContactGroupResponseAllOf.md)
- [SearchCustomerLedgerEntryResponse](docs/Model/SearchCustomerLedgerEntryResponse.md)
- [SearchCustomerLedgerEntryResponseAllOf](docs/Model/SearchCustomerLedgerEntryResponseAllOf.md)
- [SearchCustomerResponse](docs/Model/SearchCustomerResponse.md)
- [SearchCustomerResponseAllOf](docs/Model/SearchCustomerResponseAllOf.md)
- [SearchGeneralLedgerAccountResponse](docs/Model/SearchGeneralLedgerAccountResponse.md)
- [SearchGeneralLedgerAccountResponseAllOf](docs/Model/SearchGeneralLedgerAccountResponseAllOf.md)
- [SearchIncomingInvoiceVoucherResponse](docs/Model/SearchIncomingInvoiceVoucherResponse.md)
- [SearchIncomingInvoiceVoucherResponseAllOf](docs/Model/SearchIncomingInvoiceVoucherResponseAllOf.md)
- [SearchManualJournalVoucherResponse](docs/Model/SearchManualJournalVoucherResponse.md)
- [SearchManualJournalVoucherResponseAllOf](docs/Model/SearchManualJournalVoucherResponseAllOf.md)
- [SearchOutgoingInvoiceVoucherResponse](docs/Model/SearchOutgoingInvoiceVoucherResponse.md)
- [SearchOutgoingInvoiceVoucherResponseAllOf](docs/Model/SearchOutgoingInvoiceVoucherResponseAllOf.md)
- [SearchSupplierResponse](docs/Model/SearchSupplierResponse.md)
- [SearchSupplierResponseAllOf](docs/Model/SearchSupplierResponseAllOf.md)
- [SearchVatCodeResponse](docs/Model/SearchVatCodeResponse.md)
- [SearchVatCodeResponseAllOf](docs/Model/SearchVatCodeResponseAllOf.md)
- [Supplier](docs/Model/Supplier.md)
- [Validation](docs/Model/Validation.md)
- [VatCode](docs/Model/VatCode.md)
- [VoucherDocumentation](docs/Model/VoucherDocumentation.md)

## Authorization

### BasicAuth

- **Type**: HTTP basic authentication


### oAuth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **write**: allows modifying resources
    - **read**: allows reading resources

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
