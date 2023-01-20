# PowerOfficeGo\ContactsApi

All URIs are relative to https://api-demo.poweroffice.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrUpdateContactGroup()**](ContactsApi.md#createOrUpdateContactGroup) | **POST** /ContactGroup | Create or Update Contact Group |
| [**createOrUpdateCustomer()**](ContactsApi.md#createOrUpdateCustomer) | **POST** /Customer | Create or Update Customer |
| [**createOrUpdateSupplier()**](ContactsApi.md#createOrUpdateSupplier) | **POST** /Supplier | Create or Update Supplier |
| [**getContactGroup()**](ContactsApi.md#getContactGroup) | **GET** /ContactGroup/{id} | Get Contact Group |
| [**getCustomer()**](ContactsApi.md#getCustomer) | **GET** /Customer/{id} | Get Customer |
| [**getCustomersBalance()**](ContactsApi.md#getCustomersBalance) | **GET** /Reporting/CustomerBalance | Service to query CustomerBalance |
| [**getSupplier()**](ContactsApi.md#getSupplier) | **GET** /Supplier/{id} | Get Supplier |
| [**searchContactGroups()**](ContactsApi.md#searchContactGroups) | **GET** /ContactGroup | Search Contact Groups |
| [**searchCustomers()**](ContactsApi.md#searchCustomers) | **GET** /Customer | Search Customers |
| [**searchSuppliers()**](ContactsApi.md#searchSuppliers) | **GET** /Supplier | Search Suppliers |


## `createOrUpdateContactGroup()`

```php
createOrUpdateContactGroup($data): \PowerOfficeGo\Model\GetContactGroupResponse
```

Create or Update Contact Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \PowerOfficeGo\Model\ContactGroup(); // \PowerOfficeGo\Model\ContactGroup

try {
    $result = $apiInstance->createOrUpdateContactGroup($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateContactGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\ContactGroup**](../Model/ContactGroup.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetContactGroupResponse**](../Model/GetContactGroupResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateCustomer()`

```php
createOrUpdateCustomer($data): \PowerOfficeGo\Model\GetCustomerResponse
```

Create or Update Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \PowerOfficeGo\Model\Customer(); // \PowerOfficeGo\Model\Customer

try {
    $result = $apiInstance->createOrUpdateCustomer($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\Customer**](../Model/Customer.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetCustomerResponse**](../Model/GetCustomerResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateSupplier()`

```php
createOrUpdateSupplier($data): \PowerOfficeGo\Model\GetSupplierResponse
```

Create or Update Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \PowerOfficeGo\Model\Supplier(); // \PowerOfficeGo\Model\Supplier

try {
    $result = $apiInstance->createOrUpdateSupplier($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\PowerOfficeGo\Model\Supplier**](../Model/Supplier.md)|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetSupplierResponse**](../Model/GetSupplierResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactGroup()`

```php
getContactGroup($id): \PowerOfficeGo\Model\GetContactGroupResponse
```

Get Contact Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | description

try {
    $result = $apiInstance->getContactGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| description | |

### Return type

[**\PowerOfficeGo\Model\GetContactGroupResponse**](../Model/GetContactGroupResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($id): \PowerOfficeGo\Model\GetCustomerResponse
```

Get Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | description

try {
    $result = $apiInstance->getCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| description | |

### Return type

[**\PowerOfficeGo\Model\GetCustomerResponse**](../Model/GetCustomerResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomersBalance()`

```php
getCustomersBalance($to_date, $contact_group, $subledger_number_series_id, $include_only_open_items): \PowerOfficeGo\Model\GetCustomerBalanceResponse
```

Service to query CustomerBalance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_date = 'to_date_example'; // string
$contact_group = 'contact_group_example'; // string
$subledger_number_series_id = 'subledger_number_series_id_example'; // string
$include_only_open_items = True; // bool

try {
    $result = $apiInstance->getCustomersBalance($to_date, $contact_group, $subledger_number_series_id, $include_only_open_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCustomersBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **to_date** | **string**|  | [optional] |
| **contact_group** | **string**|  | [optional] |
| **subledger_number_series_id** | **string**|  | [optional] |
| **include_only_open_items** | **bool**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\GetCustomerBalanceResponse**](../Model/GetCustomerBalanceResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplier()`

```php
getSupplier($id): \PowerOfficeGo\Model\GetSupplierResponse
```

Get Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | description

try {
    $result = $apiInstance->getSupplier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| description | |

### Return type

[**\PowerOfficeGo\Model\GetSupplierResponse**](../Model/GetSupplierResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchContactGroups()`

```php
searchContactGroups($filter): \PowerOfficeGo\Model\SearchContactGroupResponse
```

Search Contact Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchContactGroups($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchContactGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchContactGroupResponse**](../Model/SearchContactGroupResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomers()`

```php
searchCustomers($filter): \PowerOfficeGo\Model\SearchCustomerResponse
```

Search Customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchCustomers($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchCustomerResponse**](../Model/SearchCustomerResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSuppliers()`

```php
searchSuppliers($filter): \PowerOfficeGo\Model\SearchSupplierResponse
```

Search Suppliers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = PowerOfficeGo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PowerOfficeGo\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->searchSuppliers($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchSuppliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\SearchSupplierResponse**](../Model/SearchSupplierResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
