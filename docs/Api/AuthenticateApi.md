# PowerOfficeGo\AuthenticateApi

All URIs are relative to https://api-demo.poweroffice.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccessToken()**](AuthenticateApi.md#getAccessToken) | **POST** /OAuth/Token | Get Access Token |


## `getAccessToken()`

```php
getAccessToken($grant_type, $refresh_token): \PowerOfficeGo\Model\AuthenticationResponse
```

Get Access Token

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**|  | |
| **refresh_token** | **string**|  | [optional] |

### Return type

[**\PowerOfficeGo\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
