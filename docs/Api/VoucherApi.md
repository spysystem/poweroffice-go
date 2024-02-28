# PowerOfficeGo\VoucherApi

All URIs are relative to https://api-demo.poweroffice.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrUpdateBankJournalVoucher()**](VoucherApi.md#createOrUpdateBankJournalVoucher) | **POST** /Voucher/BankJournalVoucher | Create or Update BankJournalVoucher |
| [**createOrUpdateIncomingInvoiceVoucher()**](VoucherApi.md#createOrUpdateIncomingInvoiceVoucher) | **POST** /Voucher/IncomingInvoiceVoucher | Create or Update Incoming Invoice Voucher |
| [**createOrUpdateManualJournalVoucher()**](VoucherApi.md#createOrUpdateManualJournalVoucher) | **POST** /Voucher/ManualJournalVoucher | Create or Update ManualJournalVoucher |
| [**createOrUpdateOutgoingInvoiceVoucher()**](VoucherApi.md#createOrUpdateOutgoingInvoiceVoucher) | **POST** /Voucher/OutgoingInvoiceVoucher | Create or Update Outgoing Invoice Voucher |
| [**createVoucherDocumentation()**](VoucherApi.md#createVoucherDocumentation) | **POST** /Voucher/VoucherDocumentation | Create Voucher Documentation |
| [**getBankJournalVoucher()**](VoucherApi.md#getBankJournalVoucher) | **GET** /Voucher/BankJournalVoucher/{id} | Get BankJournalVoucher |
| [**getIncomingInvoiceVoucher()**](VoucherApi.md#getIncomingInvoiceVoucher) | **GET** /Voucher/IncomingInvoiceVoucher/{id} | Get Incoming Invoice Voucher |
| [**getManualJournalVoucher()**](VoucherApi.md#getManualJournalVoucher) | **GET** /Voucher/ManualJournalVoucher/{id} | Get ManualJournalVoucher |
| [**getOutgoingInvoiceVoucher()**](VoucherApi.md#getOutgoingInvoiceVoucher) | **GET** /Voucher/OutgoingInvoiceVoucher/{id} | Get Outgoing Invoice Voucher |
| [**searchBankJournalVoucher()**](VoucherApi.md#searchBankJournalVoucher) | **GET** /Voucher/BankJournalVoucher | Search Bank Journal Vouchers |
| [**searchIncomingInvoiceVoucher()**](VoucherApi.md#searchIncomingInvoiceVoucher) | **GET** /Voucher/IncomingInvoiceVoucher | Search Incoming Invoice Vouchers |
| [**searchManualJournalVoucher()**](VoucherApi.md#searchManualJournalVoucher) | **GET** /Voucher/ManualJournalVoucher | Search Manual Journal Vouchers |
| [**searchOutgoingInvoiceVoucher()**](VoucherApi.md#searchOutgoingInvoiceVoucher) | **GET** /Voucher/OutgoingInvoiceVoucher | Search Outgoing Invoice Vouchers |


## `createOrUpdateBankJournalVoucher()`

```php
createOrUpdateBankJournalVoucher($data): \PowerOfficeGo\Model\GetBankJournalVoucherResponse
```

Create or Update BankJournalVoucher

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
$data = new \PowerOfficeGo\Model\BankJournalVoucher(); // \PowerOfficeGo\Model\BankJournalVoucher

try {
    $result = $apiInstance->createOrUpdateBankJournalVoucher($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateBankJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\BankJournalVoucher**](../Model/BankJournalVoucher.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetBankJournalVoucherResponse**](../Model/GetBankJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateIncomingInvoiceVoucher()`

```php
createOrUpdateIncomingInvoiceVoucher($data): \PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse
```

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
$data = new \PowerOfficeGo\Model\IncomingInvoiceVoucher(); // \PowerOfficeGo\Model\IncomingInvoiceVoucher

try {
    $result = $apiInstance->createOrUpdateIncomingInvoiceVoucher($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateIncomingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\IncomingInvoiceVoucher**](../Model/IncomingInvoiceVoucher.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse**](../Model/GetIncomingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateManualJournalVoucher()`

```php
createOrUpdateManualJournalVoucher($data): \PowerOfficeGo\Model\GetManualJournalVoucherResponse
```

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
$data = new \PowerOfficeGo\Model\ManualJournalVoucher(); // \PowerOfficeGo\Model\ManualJournalVoucher

try {
    $result = $apiInstance->createOrUpdateManualJournalVoucher($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateManualJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\ManualJournalVoucher**](../Model/ManualJournalVoucher.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetManualJournalVoucherResponse**](../Model/GetManualJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateOutgoingInvoiceVoucher()`

```php
createOrUpdateOutgoingInvoiceVoucher($data): \PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse
```

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
$data = new \PowerOfficeGo\Model\OutgoingInvoiceVoucher(); // \PowerOfficeGo\Model\OutgoingInvoiceVoucher

try {
    $result = $apiInstance->createOrUpdateOutgoingInvoiceVoucher($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createOrUpdateOutgoingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\OutgoingInvoiceVoucher**](../Model/OutgoingInvoiceVoucher.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse**](../Model/GetOutgoingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoucherDocumentation()`

```php
createVoucherDocumentation($data): \PowerOfficeGo\Model\GetVoucherDocumentationResponse
```

Create Voucher Documentation

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
$data = new \PowerOfficeGo\Model\VoucherDocumentation(); // \PowerOfficeGo\Model\VoucherDocumentation

try {
    $result = $apiInstance->createVoucherDocumentation($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createVoucherDocumentation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\VoucherDocumentation**](../Model/VoucherDocumentation.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetVoucherDocumentationResponse**](../Model/GetVoucherDocumentationResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankJournalVoucher()`

```php
getBankJournalVoucher($id): \PowerOfficeGo\Model\GetBankJournalVoucherResponse
```

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
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| description | |

### Return type

[**\PowerOfficeGo\Model\GetBankJournalVoucherResponse**](../Model/GetBankJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomingInvoiceVoucher()`

```php
getIncomingInvoiceVoucher($id): \PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse
```

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
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| description | |

### Return type

[**\PowerOfficeGo\Model\GetIncomingInvoiceVoucherResponse**](../Model/GetIncomingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManualJournalVoucher()`

```php
getManualJournalVoucher($id): \PowerOfficeGo\Model\GetManualJournalVoucherResponse
```

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
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| description | |

### Return type

[**\PowerOfficeGo\Model\GetManualJournalVoucherResponse**](../Model/GetManualJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutgoingInvoiceVoucher()`

```php
getOutgoingInvoiceVoucher($id): \PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse
```

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
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| description | |

### Return type

[**\PowerOfficeGo\Model\GetOutgoingInvoiceVoucherResponse**](../Model/GetOutgoingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchBankJournalVoucher()`

```php
searchBankJournalVoucher($filter): \PowerOfficeGo\Model\SearchBankJournalVoucherResponse
```

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
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchBankJournalVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchBankJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchBankJournalVoucherResponse**](../Model/SearchBankJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchIncomingInvoiceVoucher()`

```php
searchIncomingInvoiceVoucher($filter): \PowerOfficeGo\Model\SearchIncomingInvoiceVoucherResponse
```

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
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchIncomingInvoiceVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchIncomingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchIncomingInvoiceVoucherResponse**](../Model/SearchIncomingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchManualJournalVoucher()`

```php
searchManualJournalVoucher($filter): \PowerOfficeGo\Model\SearchManualJournalVoucherResponse
```

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
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchManualJournalVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchManualJournalVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchManualJournalVoucherResponse**](../Model/SearchManualJournalVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchOutgoingInvoiceVoucher()`

```php
searchOutgoingInvoiceVoucher($filter): \PowerOfficeGo\Model\SearchOutgoingInvoiceVoucherResponse
```

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
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchOutgoingInvoiceVoucher($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->searchOutgoingInvoiceVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchOutgoingInvoiceVoucherResponse**](../Model/SearchOutgoingInvoiceVoucherResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
