# Ganb\Personal\Client\VirtualAccountApi

All URIs are relative to *https://stg-api.gmo-aozora.com/ganb/api/personal/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**depositTransactionsUsingGET**](VirtualAccountApi.md#depositTransactionsUsingGET) | **GET** /va/deposit-transactions | 振込入金口座入金明細照会
[**issueUsingPOST**](VirtualAccountApi.md#issueUsingPOST) | **POST** /va/issue | 振込入金口座発行
[**statusChangeUsingPOST**](VirtualAccountApi.md#statusChangeUsingPOST) | **POST** /va/status-change | 振込入金口座状態変更
[**vaCloseRequestUsingPOST**](VirtualAccountApi.md#vaCloseRequestUsingPOST) | **POST** /va/close-request | 振込入金口座解約申込
[**vaListUsingPOST**](VirtualAccountApi.md#vaListUsingPOST) | **POST** /va/list | 振込入金口座一覧照会


# **depositTransactionsUsingGET**
> \Ganb\Personal\Client\Model\VaDepositTransactionsResponse depositTransactionsUsingGET($x_access_token, $va_contract_auth_key, $ra_id, $va_id, $date_from, $date_to, $sort_order_code, $next_item_key)

### 振込入金口座入金明細照会

振込入金口座の入金明細を照会します

※個人事業主のみ対象となり、個人は対象外となります

### 詳細説明

#### 取得上限件数
* 500件
* 取得できる明細数が500に満たないときは取得できる明細のみを返却します
* 取得できる明細が存在しない場合は「200：OK」とし明細を返却しません

#### ページング
* 2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次明細キーを追加してリクエストしてください

#### ソート順
* 取引の昇順
* ソート順コードを指定することにより、ソート順を変更できます

#### 対象期間

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
対象期間From | × | ○ | × | ○
対象期間To   | × | × | ○ | ○
* &#9312;の場合: 当日分文の入金明細を返却
* &#9313;の場合: 対象期間From(※1) ～ 当日までの入金明細を返却
* &#9314;の場合: 取引初回(※2) ～ 対象期間To(※1)までの入金明細を返却
* &#9315;の場合: 対象期間From(※1) ～ 対象期間To(※1)までの入金明細を返却

※1 : 照会する日付より6ヶ月以内の日付とし、超過する日付の場合は「400　Bad Request」を返却

※2 : 照会する日付より6ヶ月以内の取引とし、それを超えた範囲は返却しません

#### 入金口座ID、振込入金口座の設定別の仕様

日本語名     | &#9312; | &#9313; | &#9314;
:----|:----:|:----:|:----:
入金口座ID     | ○ | × | ○
振込入金口座ID | × | ○ | ○
* &#9312;の場合　入金口座IDに該当する入金明細を返却します
* &#9313;の場合　振込入金口座IDに該当する入金明細を返却します
* &#9314;の場合　振込入金口座IDが入金口座IDに紐付いているか判定を行い、OKであれば入金明細を返却し、NGであればエラーを返却します

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\VirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$va_contract_auth_key = null; // string | 振込入金口座API認証情報 半角英数字 NULLを設定 値が設定されている場合は「400 Bad Request」を返却  minLength: 1 maxLength: 400
$ra_id = "ra_id_example"; // string | 入金口座ID 半角数字 入金先の口座を識別するID 本値が設定されていない場合、振込入金口座IDは必須 科目コードが以下の口座IDのみ受け付けます ・01=普通預金（有利息） ・02=普通預金（決済用）  minLength: 12 maxLength: 29
$va_id = "va_id_example"; // string | 振込入金口座ID 半角数字 振込入金口座を識別するID 本値が設定されていない場合、入金口座IDは必須  minLength: 10 maxLength: 10
$date_from = "date_from_example"; // string | 対象期間From 半角文字 YYYY-MM-DD形式 指定する場合は照会する日付より6ヶ月以内の日付とし、超えた場合は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$date_to = "date_to_example"; // string | 対象期間To 半角文字 YYYY-MM-DD形式 指定する場合は照会する日付より6ヶ月以内の日付とし、超えた場合は「400 Bad Request」を返却 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$sort_order_code = "2"; // string | ソート順コード 半角数字 取引日のソート順を指定するコード値 ・1=昇順 ・2=降順  minLength: 1 maxLength: 1
$next_item_key = "next_item_key_example"; // string | 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細キーが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24

try {
    $result = $apiInstance->depositTransactionsUsingGET($x_access_token, $va_contract_auth_key, $ra_id, $va_id, $date_from, $date_to, $sort_order_code, $next_item_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualAccountApi->depositTransactionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **va_contract_auth_key** | **string**| 振込入金口座API認証情報 半角英数字 NULLを設定 値が設定されている場合は「400 Bad Request」を返却  minLength: 1 maxLength: 400 | [optional]
 **ra_id** | **string**| 入金口座ID 半角数字 入金先の口座を識別するID 本値が設定されていない場合、振込入金口座IDは必須 科目コードが以下の口座IDのみ受け付けます ・01&#x3D;普通預金（有利息） ・02&#x3D;普通預金（決済用）  minLength: 12 maxLength: 29 | [optional]
 **va_id** | **string**| 振込入金口座ID 半角数字 振込入金口座を識別するID 本値が設定されていない場合、入金口座IDは必須  minLength: 10 maxLength: 10 | [optional]
 **date_from** | **string**| 対象期間From 半角文字 YYYY-MM-DD形式 指定する場合は照会する日付より6ヶ月以内の日付とし、超えた場合は「400 Bad Request」を返却  minLength: 10 maxLength: 10 | [optional]
 **date_to** | **string**| 対象期間To 半角文字 YYYY-MM-DD形式 指定する場合は照会する日付より6ヶ月以内の日付とし、超えた場合は「400 Bad Request」を返却 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10 | [optional]
 **sort_order_code** | **string**| ソート順コード 半角数字 取引日のソート順を指定するコード値 ・1&#x3D;昇順 ・2&#x3D;降順  minLength: 1 maxLength: 1 | [optional]
 **next_item_key** | **string**| 次明細キー 半角数字 初回要求時は未設定 初回応答で次明細キーが「true」の場合、返却された同項目を2回目以降に設定  minLength: 1 maxLength: 24 | [optional]

### Return type

[**\Ganb\Personal\Client\Model\VaDepositTransactionsResponse**](../Model/VaDepositTransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueUsingPOST**
> \Ganb\Personal\Client\Model\VaIssueResponse issueUsingPOST($x_access_token, $body)

### 振込入金口座発行

振込入金口座の発行を行います

※個人事業主のみ対象となり、個人は対象外となります

（銀行システムのメンテナンス時は本APIを実行することができないため、予め余分に振込入金口座を発行してプールしておくことをお勧めします）

### 詳細説明

#### 発行上限数
* 1リクエスト　：　1000口座まで

#### 追加名義カナを前につける際の半角スペースについて
* 追加名義カナの右側は1文字のみ許容します
* 例）
  * ○ `「ﾃｽﾄﾆｭｳｷﾝｸﾞﾁ 」`
  * × `「ﾃｽﾄﾆｭｳｷﾝｸﾞﾁ_ 」`
  
* 追加名義カナの左側は許容しません
* 例）
  * ○ `「ﾃｽﾄﾆｭｳｷﾝｸﾞﾁ」`
  * × `「_ﾃｽﾄﾆｭｳｷﾝｸﾞﾁ」`

* 連続スペースは許容しません
* 例）
  * ○ `「ﾃｽ_ﾄﾆｭｳ_ｷﾝｸﾞﾁ」`
  * × `「ﾃｽ__ﾄﾆｭｳｷﾝｸﾞﾁ」`

※　`_`は半角スペース

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\VirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$body = new \Ganb\Personal\Client\Model\VaIssueRequest(['va_type_code' => '2', 'issue_request_count' => '1', 'ra_id' => 'ra_id_example']); // \Ganb\Personal\Client\Model\VaIssueRequest | HTTPリクエストボディ

try {
    $result = $apiInstance->issueUsingPOST($x_access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualAccountApi->issueUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **body** | [**\Ganb\Personal\Client\Model\VaIssueRequest**](../Model/VaIssueRequest.md)| HTTPリクエストボディ | [optional]

### Return type

[**\Ganb\Personal\Client\Model\VaIssueResponse**](../Model/VaIssueResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statusChangeUsingPOST**
> \Ganb\Personal\Client\Model\VaStatusChangeResponse statusChangeUsingPOST($x_access_token, $body)

### 振込入金口座状態変更

振込入金口座の状態変更（停止・再開・削除）を行います

※個人事業主のみ対象となり、個人は対象外となります

#### 詳細説明

* 状態変更上限数
  * 1リクエスト　：　100口座まで

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\VirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$va_id = new \Ganb\Personal\Client\Model\VaId(['va_id' => 'va_id_example']);
$body = new \Ganb\Personal\Client\Model\VaStatusChangeRequest(['va_status_change_code' => '2', 'va_id_list' => [$va_id]]);

try {
    $result = $apiInstance->statusChangeUsingPOST($x_access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualAccountApi->statusChangeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **body** | [**\Ganb\Personal\Client\Model\VaStatusChangeRequest**](../Model/VaStatusChangeRequest.md)| HTTPリクエストボディ | [optional]

### Return type

[**\Ganb\Personal\Client\Model\VaStatusChangeResponse**](../Model/VaStatusChangeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vaCloseRequestUsingPOST**
> \Ganb\Personal\Client\Model\VaCloseRequestResponse vaCloseRequestUsingPOST($x_access_token, $body)

### 振込入金口座解約申込

振込入金口座契約の解約申込を行います

解約は解約受付月の月末に行われます

※個人事業主のみ対象となり、個人は対象外となります

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\VirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$body = new \Ganb\Personal\Client\Model\VaCloseRequest(); // \Ganb\Personal\Client\Model\VaCloseRequest | HTTPリクエストボディ

try {
    $result = $apiInstance->vaCloseRequestUsingPOST($x_access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualAccountApi->vaCloseRequestUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **body** | [**\Ganb\Personal\Client\Model\VaCloseRequest**](../Model/VaCloseRequest.md)| HTTPリクエストボディ | [optional]

### Return type

[**\Ganb\Personal\Client\Model\VaCloseRequestResponse**](../Model/VaCloseRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vaListUsingPOST**
> \Ganb\Personal\Client\Model\VaListResponse vaListUsingPOST($x_access_token, $body)

### 振込入金口座一覧照会

発行済みの振込入金口座の一覧を照会します

※個人事業主のみ対象となり、個人は対象外となります

### 詳細説明

#### リクエストボディの振込入金口座IDリスト上限件数
* 500件

#### 取得上限件数
* 500件
* 取得できる明細数が500に満たないときは取得できる明細のみを返却します
* 取得できる明細が存在しない場合は「200：OK」とし明細を返却しません

#### ページング
* 2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次一覧キーを追加してリクエストしてください

#### ソート順
* 発行日時 昇順

#### クエリパラメーター 最終入金日

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
最終入金日From | × | ○ | × | ○
最終入金日To   | × | × | ○ | ○
* &#9312;の場合: 絞り込み条件なし
* &#9313;の場合: 最終入金日From ～ 当日までの振込入金口座情報を返却
* &#9314;の場合: 最も過去となる最終入金日 ～ 最終入金日Toまでの振込入金口座情報を返却
* &#9315;の場合: 最終入金日From ～ 最終入金日Toまでの振込入金口座情報を返却

#### クエリパラメーター 振込入金口座発行日

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
振込入金口座発行日From | × | ○ | × | ○
振込入金口座発行日To   | × | × | ○ | ○
* &#9312;の場合: 絞り込み条件なし
* &#9313;の場合: 振込入金口座発行日From ～ 当日までの振込入金口座情報を返却
* &#9314;の場合: 最も過去となる口座発行日 ～ 振込入金口座発行日Toまでの振込入金口座情報を返却
* &#9315;の場合: 振込入金口座発行日From ～ 振込入金口座発行日Toまでの振込入金口座情報を返却

####  クエリパラメーター 有効期限

日本語名     | &#9312; | &#9313; | &#9314; | &#9315;
:----|:----:|:----:|:----:|:----:
有効期限From | × | ○ | × | ○
有効期限To   | × | × | ○ | ○
* &#9312;の場合: 絞り込み条件なし
* &#9313;の場合: 有効期限From ～ 当日までの振込入金口座情報を返却
* &#9314;の場合: 最も過去となる有効期限 ～ 有効期限Toまでの振込入金口座情報を返却
* &#9315;の場合: 有効期限From ～ 有効期限Toまでの振込入金口座情報を返却

#### クエリパラメーター 入金口座ID、振込入金口座IDの設定別の仕様

日本語名     | &#9312; | &#9313; | &#9314;
:----|:----:|:----:|:----:
入金口座ID     | ○ | × | ○
振込入金口座ID | × | ○ | ○
* &#9312;の場合: 入金口座IDに該当する振込入金口座情報を返却
* &#9313;の場合: 振込入金口座IDに該当する振込入金口座情報を返却
* &#9314;の場合: 振込入金口座IDが入金口座IDに紐付いているか判定を行い、OKであれば入金明細を返却し、NGであればエラーを返却します

#### 振込入金口座API認証情報
* 提携企業契約時は必須で、この値が設定されていない場合、銀行契約の一覧照会を返却します

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\VirtualAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$body = new \Ganb\Personal\Client\Model\VaListRequest(); // \Ganb\Personal\Client\Model\VaListRequest | HTTPリクエストボディ

try {
    $result = $apiInstance->vaListUsingPOST($x_access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualAccountApi->vaListUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **body** | [**\Ganb\Personal\Client\Model\VaListRequest**](../Model/VaListRequest.md)| HTTPリクエストボディ | [optional]

### Return type

[**\Ganb\Personal\Client\Model\VaListResponse**](../Model/VaListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

