# PowerOfficeGo\ContactsApi

All URIs are relative to *https://api-demo.poweroffice.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateContactGroup**](ContactsApi.md#createOrUpdateContactGroup) | **POST** /ContactGroup | Create or Update Contact Group
[**createOrUpdateCustomer**](ContactsApi.md#createOrUpdateCustomer) | **POST** /Customer | Create or Update Customer
[**createOrUpdateSupplier**](ContactsApi.md#createOrUpdateSupplier) | **POST** /Supplier | Create or Update Supplier
[**getContactGroup**](ContactsApi.md#getContactGroup) | **GET** /ContactGroup/{id} | Get Contact Group
[**getCustomer**](ContactsApi.md#getCustomer) | **GET** /Customer/{id} | Get Customer
[**getSupplier**](ContactsApi.md#getSupplier) | **GET** /Supplier/{id} | Get Supplier
[**searchContactGroups**](ContactsApi.md#searchContactGroups) | **GET** /ContactGroup | Search Contact Groups
[**searchCustomers**](ContactsApi.md#searchCustomers) | **GET** /Customer | Search Customers
[**searchSuppliers**](ContactsApi.md#searchSuppliers) | **GET** /Supplier | Search Suppliers


# **createOrUpdateContactGroup**
> \PowerOfficeGo\Model\GetContactGroupResponse createOrUpdateContactGroup($contact_group)

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
$contact_group = new \PowerOfficeGo\Model\ContactGroup(); // \PowerOfficeGo\Model\ContactGroup | 

try {
    $result = $apiInstance->createOrUpdateContactGroup($contact_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_group** | [**\PowerOfficeGo\Model\ContactGroup**](../Model/ContactGroup.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetContactGroupResponse**](../Model/GetContactGroupResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateCustomer**
> \PowerOfficeGo\Model\GetCustomerResponse createOrUpdateCustomer($customer)

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
$customer = new \PowerOfficeGo\Model\Customer(); // \PowerOfficeGo\Model\Customer | 

try {
    $result = $apiInstance->createOrUpdateCustomer($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\PowerOfficeGo\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetCustomerResponse**](../Model/GetCustomerResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateSupplier**
> \PowerOfficeGo\Model\GetSupplierResponse createOrUpdateSupplier($supplier)

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
$supplier = new \PowerOfficeGo\Model\Supplier(); // \PowerOfficeGo\Model\Supplier | 

try {
    $result = $apiInstance->createOrUpdateSupplier($supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier** | [**\PowerOfficeGo\Model\Supplier**](../Model/Supplier.md)|  | [optional]

### Return type

[**\PowerOfficeGo\Model\GetSupplierResponse**](../Model/GetSupplierResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactGroup**
> \PowerOfficeGo\Model\GetContactGroupResponse getContactGroup($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| description |

### Return type

[**\PowerOfficeGo\Model\GetContactGroupResponse**](../Model/GetContactGroupResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \PowerOfficeGo\Model\GetCustomerResponse getCustomer($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| description |

### Return type

[**\PowerOfficeGo\Model\GetCustomerResponse**](../Model/GetCustomerResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplier**
> \PowerOfficeGo\Model\GetSupplierResponse getSupplier($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| description |

### Return type

[**\PowerOfficeGo\Model\GetSupplierResponse**](../Model/GetSupplierResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContactGroups**
> \PowerOfficeGo\Model\SearchContactGroupResponse searchContactGroups($filter)

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
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchContactGroups($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchContactGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchContactGroupResponse**](../Model/SearchContactGroupResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCustomers**
> \PowerOfficeGo\Model\SearchCustomerResponse searchCustomers($filter)

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
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchCustomers($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchCustomerResponse**](../Model/SearchCustomerResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSuppliers**
> \PowerOfficeGo\Model\SearchSupplierResponse searchSuppliers($filter)

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
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->searchSuppliers($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

[**\PowerOfficeGo\Model\SearchSupplierResponse**](../Model/SearchSupplierResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

