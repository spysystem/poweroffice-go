# PowerOfficeGo\LedgerApi

All URIs are relative to https://api-demo.poweroffice.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomerLedger()**](LedgerApi.md#getCustomerLedger) | **GET** /Reporting/CustomerLedger/{matchId} | Get Customer Ledgers |
| [**searchCustomerLedger()**](LedgerApi.md#searchCustomerLedger) | **GET** /Reporting/CustomerLedger | Search CustomerLedgers |
| [**searchGeneralLedgerAccount()**](LedgerApi.md#searchGeneralLedgerAccount) | **GET** /GeneralLedgerAccount | Search GeneralLedgerAccount |
| [**searchVatCode()**](LedgerApi.md#searchVatCode) | **GET** /VatCode | Search Vat Code |


## `getCustomerLedger()`

```php
getCustomerLedger($match_id, $filter): \PowerOfficeGo\Model\GetCustomerLedgerEntryResponse
```

Get Customer Ledgers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_id = 3.4; // float
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->getCustomerLedger($match_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getCustomerLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **match_id** | **float**|  | |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetCustomerLedgerEntryResponse**](../Model/GetCustomerLedgerEntryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomerLedger()`

```php
searchCustomerLedger($to_date, $filter, $from_date): \PowerOfficeGo\Model\SearchCustomerLedgerEntryResponse
```

Search CustomerLedgers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_date = 'to_date_example'; // string
$filter = 'filter_example'; // string
$from_date = 'from_date_example'; // string

try {
    $result = $apiInstance->searchCustomerLedger($to_date, $filter, $from_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->searchCustomerLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **to_date** | **string**|  | |
| **filter** | **string**|  | [optional] |
| **from_date** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchCustomerLedgerEntryResponse**](../Model/SearchCustomerLedgerEntryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchGeneralLedgerAccount()`

```php
searchGeneralLedgerAccount($filter): \PowerOfficeGo\Model\SearchGeneralLedgerAccountResponse
```

Search GeneralLedgerAccount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchGeneralLedgerAccount($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->searchGeneralLedgerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchGeneralLedgerAccountResponse**](../Model/SearchGeneralLedgerAccountResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchVatCode()`

```php
searchVatCode($filter): \PowerOfficeGo\Model\SearchVatCodeResponse
```

Search Vat Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchVatCode($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->searchVatCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchVatCodeResponse**](../Model/SearchVatCodeResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
