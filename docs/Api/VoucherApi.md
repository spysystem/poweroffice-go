# PowerOfficeGo\VoucherApi

All URIs are relative to *https://api-demo.poweroffice.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateBankJournalVoucher**](VoucherApi.md#createOrUpdateBankJournalVoucher) | **POST** /Voucher/BankJournalVoucher | Create or Update ManualJournalVoucher
[**createOrUpdateIncomingInvoiceVoucher**](VoucherApi.md#createOrUpdateIncomingInvoiceVoucher) | **POST** /Voucher/IncomingInvoiceVoucher | Create or Update Incoming Invoice Voucher
[**createOrUpdateManualJournalVoucher**](VoucherApi.md#createOrUpdateManualJournalVoucher) | **POST** /Voucher/ManualJournalVoucher | Create or Update ManualJournalVoucher
[**createOrUpdateOutgoingInvoiceVoucher**](VoucherApi.md#createOrUpdateOutgoingInvoiceVoucher) | **POST** /Voucher/OutgoingInvoiceVoucher | Create or Update Outgoing Invoice Voucher
[**getBankJournalVoucher**](VoucherApi.md#getBankJournalVoucher) | **GET** /Voucher/BankJournalVoucher/{id} | Get BankJournalVoucher
[**getIncomingInvoiceVoucher**](VoucherApi.md#getIncomingInvoiceVoucher) | **GET** /Voucher/IncomingInvoiceVoucher/{id} | Get Incoming Invoice Voucher
[**getManualJournalVoucher**](VoucherApi.md#getManualJournalVoucher) | **GET** /Voucher/ManualJournalVoucher/{id} | Get ManualJournalVoucher
[**getOutgoingInvoiceVoucher**](VoucherApi.md#getOutgoingInvoiceVoucher) | **GET** /Voucher/OutgoingInvoiceVoucher/{id} | Get Outgoing Invoice Voucher
[**searchBankJournalVoucher**](VoucherApi.md#searchBankJournalVoucher) | **GET** /Voucher/BankJournalVoucher | Search Bank Journal Vouchers
[**searchIncomingInvoiceVoucher**](VoucherApi.md#searchIncomingInvoiceVoucher) | **GET** /Voucher/IncomingInvoiceVoucher | Search Incoming Invoice Vouchers
[**searchManualJournalVoucher**](VoucherApi.md#searchManualJournalVoucher) | **GET** /Voucher/ManualJournalVoucher | Search Manual Journal Vouchers
[**searchOutgoingInvoiceVoucher**](VoucherApi.md#searchOutgoingInvoiceVoucher) | **GET** /Voucher/OutgoingInvoiceVoucher | Search Outgoing Invoice Vouchers


# **createOrUpdateBankJournalVoucher**
> \PowerOfficeGo\Model\GetBankJournalVoucherResponse createOrUpdateBankJournalVoucher($bank_journal_voucher)

Create or Update ManualJournalVoucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_journal_voucher = new \PowerOfficeGo\Model\BankJournalVoucher(); // \PowerOfficeGo\Model\BankJournalVoucher | 

try {
    $result = $apiInstance->createOrUpdateBankJournalVoucher($bank_journal_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateBankJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_journal_voucher** | [**\PowerOfficeGo\Model\BankJournalVoucher**](../Model/BankJournalVoucher.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetBankJournalVoucherResponse**](../Model/GetBankJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateIncomingInvoiceVoucher**
> \PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse createOrUpdateIncomingInvoiceVoucher($incoming_invoice_voucher)

Create or Update Incoming Invoice Voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incoming_invoice_voucher = new \PowerOfficeGo\Model\IncomingInvoiceVoucher(); // \PowerOfficeGo\Model\IncomingInvoiceVoucher | 

try {
    $result = $apiInstance->createOrUpdateIncomingInvoiceVoucher($incoming_invoice_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateIncomingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incoming_invoice_voucher** | [**\PowerOfficeGo\Model\IncomingInvoiceVoucher**](../Model/IncomingInvoiceVoucher.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse**](../Model/GetIncomingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateManualJournalVoucher**
> \PowerOfficeGo\Model\GetManualJournalVoucherResponse createOrUpdateManualJournalVoucher($manual_journal_voucher)

Create or Update ManualJournalVoucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_voucher = new \PowerOfficeGo\Model\ManualJournalVoucher(); // \PowerOfficeGo\Model\ManualJournalVoucher | 

try {
    $result = $apiInstance->createOrUpdateManualJournalVoucher($manual_journal_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateManualJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_voucher** | [**\PowerOfficeGo\Model\ManualJournalVoucher**](../Model/ManualJournalVoucher.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetManualJournalVoucherResponse**](../Model/GetManualJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateOutgoingInvoiceVoucher**
> \PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse createOrUpdateOutgoingInvoiceVoucher($outgoing_invoice_voucher)

Create or Update Outgoing Invoice Voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$outgoing_invoice_voucher = new \PowerOfficeGo\Model\OutgoingInvoiceVoucher(); // \PowerOfficeGo\Model\OutgoingInvoiceVoucher | 

try {
    $result = $apiInstance->createOrUpdateOutgoingInvoiceVoucher($outgoing_invoice_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateOutgoingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outgoing_invoice_voucher** | [**\PowerOfficeGo\Model\OutgoingInvoiceVoucher**](../Model/OutgoingInvoiceVoucher.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse**](../Model/GetOutgoingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankJournalVoucher**
> \PowerOfficeGo\Model\GetBankJournalVoucherResponse getBankJournalVoucher($id)

Get BankJournalVoucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | description

try {
    $result = $apiInstance->getBankJournalVoucher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getBankJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| description |

### Return type

[**\PowerOfficeGo\Model\GetBankJournalVoucherResponse**](../Model/GetBankJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncomingInvoiceVoucher**
> \PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse getIncomingInvoiceVoucher($id)

Get Incoming Invoice Voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | description

try {
    $result = $apiInstance->getIncomingInvoiceVoucher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getIncomingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| description |

### Return type

[**\PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse**](../Model/GetIncomingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManualJournalVoucher**
> \PowerOfficeGo\Model\GetManualJournalVoucherResponse getManualJournalVoucher($id)

Get ManualJournalVoucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | description

try {
    $result = $apiInstance->getManualJournalVoucher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getManualJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| description |

### Return type

[**\PowerOfficeGo\Model\GetManualJournalVoucherResponse**](../Model/GetManualJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutgoingInvoiceVoucher**
> \PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse getOutgoingInvoiceVoucher($id)

Get Outgoing Invoice Voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | description

try {
    $result = $apiInstance->getOutgoingInvoiceVoucher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getOutgoingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| description |

### Return type

[**\PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse**](../Model/GetOutgoingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchBankJournalVoucher**
> \PowerOfficeGo\Model\SearchBankJournalVoucherResponse searchBankJournalVoucher($filter)

Search Bank Journal Vouchers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchBankJournalVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchBankJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchBankJournalVoucherResponse**](../Model/SearchBankJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchIncomingInvoiceVoucher**
> \PowerOfficeGo\Model\SearchIncomingInvoiceVoucherResponse searchIncomingInvoiceVoucher($filter)

Search Incoming Invoice Vouchers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchIncomingInvoiceVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchIncomingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchIncomingInvoiceVoucherResponse**](../Model/SearchIncomingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchManualJournalVoucher**
> \PowerOfficeGo\Model\SearchManualJournalVoucherResponse searchManualJournalVoucher($filter)

Search Manual Journal Vouchers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchManualJournalVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchManualJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchManualJournalVoucherResponse**](../Model/SearchManualJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOutgoingInvoiceVoucher**
> \PowerOfficeGo\Model\SearchOutgoingInvoiceVoucherResponse searchOutgoingInvoiceVoucher($filter)

Search Outgoing Invoice Vouchers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PowerOfficeGo\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchOutgoingInvoiceVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchOutgoingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchOutgoingInvoiceVoucherResponse**](../Model/SearchOutgoingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

