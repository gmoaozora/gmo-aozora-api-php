# Ganb\Corporate\Client\AccountApi

All URIs are relative to *https://stg-api.gmo-aozora.com/ganb/api/corporation/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsDepositTransactionsUsingGET**](AccountApi.md#accountsDepositTransactionsUsingGET) | **GET** /accounts/deposit-transactions | 振込入金明細照会
[**accountsUsingGET**](AccountApi.md#accountsUsingGET) | **GET** /accounts | 口座一覧照会
[**balancesUsingGET**](AccountApi.md#balancesUsingGET) | **GET** /accounts/balances | 残高照会
[**transactionsUsingGET**](AccountApi.md#transactionsUsingGET) | **GET** /accounts/transactions | 入出金明細照会
[**visaTransactionsUsingGET**](AccountApi.md#visaTransactionsUsingGET) | **GET** /accounts/visa-transactions | Visaデビット取引明細照会

# **accountsDepositTransactionsUsingGET**
> \Ganb\Corporate\Client\Model\DepositTransactionsResponse accountsDepositTransactionsUsingGET($account_id, $x_access_token, $date_from, $date_to, $next_item_key)

### 振込入金明細照会

指定した円普通預金口座の振込入金明細情報を照会します

### 詳細説明

#### 対象科目
* 円普通預金口座

#### 取得上限件数
* 500件
* 取得できる明細数が500に満たないときは取得できる明細のみを返却します
* 取得できる明細が存在しない場合は「200：OK」とし明細を返却しません

#### ページング
* 2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次明細キーを追加してリクエストしてください

#### ソート順
* 取引の昇順

#### 対象期間

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
対象期間From | × | ○ | × | ○
対象期間To   | × | × | ○ | ○
* &#9312;の場合: 当日分の振込入金明細を返却
* &#9313;の場合: 対象期間From ～ 当日までの振込入金明細を返却
* &#9314;の場合: 取引初回 ～ 対象期間Toまでの振込入金明細を返却
* &#9315;の場合: 対象期間From ～ 対象期間Toまでの振込入金明細を返却

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$date_from = "date_from_example"; // string | 対象期間From 半角文字 YYYY-MM-DD形式  minLength: 10 maxLength: 10
$date_to = "date_to_example"; // string | 対象期間To 半角文字 YYYY-MM-DD形式  対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$next_item_key = "next_item_key_example"; // string | 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細フラグが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24

try {
    $result = $apiInstance->accountsDepositTransactionsUsingGET($account_id, $x_access_token, $date_from, $date_to, $next_item_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsDepositTransactionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29 |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **date_from** | **string**| 対象期間From 半角文字 YYYY-MM-DD形式  minLength: 10 maxLength: 10 | [optional]
 **date_to** | **string**| 対象期間To 半角文字 YYYY-MM-DD形式  対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10 | [optional]
 **next_item_key** | **string**| 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細フラグが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24 | [optional]

### Return type

[**\Ganb\Corporate\Client\Model\DepositTransactionsResponse**](../Model/DepositTransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsUsingGET**
> \Ganb\Corporate\Client\Model\AccountsResponse accountsUsingGET($x_access_token)

### 口座一覧照会

保有する全ての口座情報一覧を照会します

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->accountsUsingGET($x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Corporate\Client\Model\AccountsResponse**](../Model/AccountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **balancesUsingGET**
> \Ganb\Corporate\Client\Model\BalancesResponse balancesUsingGET($x_access_token, $account_id)

### 残高照会

保有する口座の残高情報を照会します
* 口座IDを指定した場合、該当する口座の残高情報を照会します
* 口座IDを指定しない場合、保有する口座全ての残高情報を照会します 

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$account_id = "account_id_example"; // string | 口座ID 口座を識別するID  minLength: 12 maxLength: 29

try {
    $result = $apiInstance->balancesUsingGET($x_access_token, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->balancesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **account_id** | **string**| 口座ID 口座を識別するID  minLength: 12 maxLength: 29 | [optional]

### Return type

[**\Ganb\Corporate\Client\Model\BalancesResponse**](../Model/BalancesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionsUsingGET**
> \Ganb\Corporate\Client\Model\TransactionsResponse transactionsUsingGET($account_id, $x_access_token, $date_from, $date_to, $next_item_key)

### 入出金明細照会

指定した円普通預金口座の入出金明細情報を照会します

### 詳細説明

#### 対象科目

* 円普通預金口座

#### 取得上限件数
* 500件
* 取得できる明細数が500に満たないときは取得できる明細のみを返却します
* 取得できる明細が存在しない場合は「200：OK」とし明細を返却しません

#### ページング
* 2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次明細キーを追加してリクエストしてください

#### ソート順
* 取引の昇順

#### 対象期間

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
対象期間From | × | ○ | × | ○
対象期間To   | × | × | ○ | ○
* &#9312;の場合: 当日分の明細を入出金明細を返却
* &#9313;の場合: 対象期間From ～ 当日までの入出金明細を返却
* &#9314;の場合: 取引初回 ～ 対象期間Toまでの入出金明細を返却
* &#9315;の場合: 対象期間From ～ 対象期間Toまでの入出金明細を返却

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 口座ID 半角英数字 口座を識別するID  科目コードが以下の場合のみ受け付けます ・01=普通預金（有利息） ・02=普通預金（決済用）  minLength: 12 maxLength: 29
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$date_from = "date_from_example"; // string | 対象期間From 半角文字 YYYY-MM-DD形式  minLength: 10 maxLength: 10
$date_to = "date_to_example"; // string | 対象期間To 半角文字 YYYY-MM-DD形式 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$next_item_key = "next_item_key_example"; // string | 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細キーが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24

try {
    $result = $apiInstance->transactionsUsingGET($account_id, $x_access_token, $date_from, $date_to, $next_item_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->transactionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 口座ID 半角英数字 口座を識別するID  科目コードが以下の場合のみ受け付けます ・01&#x3D;普通預金（有利息） ・02&#x3D;普通預金（決済用）  minLength: 12 maxLength: 29 |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **date_from** | **string**| 対象期間From 半角文字 YYYY-MM-DD形式  minLength: 10 maxLength: 10 | [optional]
 **date_to** | **string**| 対象期間To 半角文字 YYYY-MM-DD形式 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10 | [optional]
 **next_item_key** | **string**| 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細キーが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24 | [optional]

### Return type

[**\Ganb\Corporate\Client\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **visaTransactionsUsingGET**
> \Ganb\Corporate\Client\Model\VisaTransactionsResponse visaTransactionsUsingGET($account_id, $x_access_token, $date_from, $date_to, $next_item_key)

### Visaデビット取引明細照会

指定した円普通預金口座のVisaデビット取引明細情報を照会します

### 詳細説明

#### 対象科目

* 円普通預金口座かつ、Visaデビットを現時点で保有している口座

#### 取得上限件数

* 500件
* 取得できる明細数が500に満たないときは取得できる明細のみを返却します
* 取得できる明細が存在しない場合は「200：OK」とし明細を返却しません
* ただし、1回の検索で総件数が99,999件を超える照会はできません。それ以上の場合は「400 Bad Request」を返却します

#### ページング
* 2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次明細キーを追加してリクエストしてください

#### ソート順
* 取引の降順

#### 対象期間

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
対象期間From | × | ○ | × | ○
対象期間To   | × | × | ○ | ○
* &#9312;の場合: 当日分のVisaデビット取引明細を返却
* &#9313;の場合: 対象期間From ～ 当日までのVisaデビット取引明細を返却
* &#9314;の場合: 取引初回 ～ 対象期間ToまでのVisaデビット取引明細を返却
* &#9315;の場合: 対象期間From ～ 対象期間ToまでのVisaデビット取引明細を返却

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "account_id_example"; // string | 口座ID 半角英数字 口座を識別するID  科目コードが以下の場合のみ受け付けます ・01=普通預金（有利息） ・02=普通預金（決済用）  minLength: 12 maxLength: 29
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$date_from = "date_from_example"; // string | 対象期間From 半角文字 YYYY-MM-DD形式  minLength: 10 maxLength: 10
$date_to = "date_to_example"; // string | 対象期間To 半角文字 YYYY-MM-DD形式 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$next_item_key = "next_item_key_example"; // string | 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細キーが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24

try {
    $result = $apiInstance->visaTransactionsUsingGET($account_id, $x_access_token, $date_from, $date_to, $next_item_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->visaTransactionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 口座ID 半角英数字 口座を識別するID 科目コードが以下の場合のみ受け付けます ・01&#x3D;普通預金（有利息） ・02&#x3D;普通預金（決済用）  minLength: 12 maxLength: 29  | 
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128  | 
 **date_from** | **string**| 対象期間From 半角文字 YYYY-MM-DD形式  minLength: 10 maxLength: 10  | [optional] 
 **date_to** | **string**| 対象期間To 半角文字 YYYY-MM-DD形式 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10  |  [optional] 
 **next_item_key** | **string**| 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細キーが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24  | [optional] 

### Return type

[**\Ganb\Corporate\Client\Model\VisaTransactionsResponse**](../Model/VisaTransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
