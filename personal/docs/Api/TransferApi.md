# Ganb\Personal\Client\TransferApi

All URIs are relative to *https://stg-api.gmo-aozora.com/ganb/stg-api/personal/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spAccountTransferUsingPOST**](TransferApi.md#spAccountTransferUsingPOST) | **POST** /transfer/spaccounts-transfer | つかいわけ口座間振替
[**transferCancelUsingPOST**](TransferApi.md#transferCancelUsingPOST) | **POST** /transfer/cancel | 振込取消依頼
[**transferFeeUsingPOST**](TransferApi.md#transferFeeUsingPOST) | **POST** /transfer/transferfee | 振込手数料事前照会
[**transferRequestResultUsingGET**](TransferApi.md#transferRequestResultUsingGET) | **GET** /transfer/request-result | 振込依頼結果照会
[**transferRequestUsingPOST**](TransferApi.md#transferRequestUsingPOST) | **POST** /transfer/request | 振込依頼
[**transferStatusUsingGET**](TransferApi.md#transferStatusUsingGET) | **GET** /transfer/status | 振込状況照会


# **spAccountTransferUsingPOST**
> \Ganb\Personal\Client\Model\SpAccountTransferResponse spAccountTransferUsingPOST($body, $x_access_token)

つかいわけ口座間振替

つかいわけ口座間の振替を実行します 振替の実行は即時となります つかいわけ口座間の明細移動は当APIの対象外です

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Personal\Client\Model\SpAccountTransferRequest(); // \Ganb\Personal\Client\Model\SpAccountTransferRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->spAccountTransferUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->spAccountTransferUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Personal\Client\Model\SpAccountTransferRequest**](../Model/SpAccountTransferRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Personal\Client\Model\SpAccountTransferResponse**](../Model/SpAccountTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferCancelUsingPOST**
> \Ganb\Personal\Client\Model\TransferCancelResponse transferCancelUsingPOST($body, $x_access_token)

振込取消依頼

<p>振込・振込予約の取消を行うための依頼をします</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>取消対象ステータス</p>   <p style='padding-left:20px;'>申請中以降のステータスで取消が可能です</p>   <p style='padding-left:20px;'>依頼中、作成中の状態は取消対象外です</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>取消対象キー区分</p>   <p style='padding-left:20px;'>取消対象の取引の内容について指定して下さい</p>   <p style='padding-left:20px;'>取消対象キー区分と、取消対象の振込申請番号の状態がマッチしない場合は、「400 Bad Request」を返却します</p>   <p style='padding-left:20px;'>振込・振替/一括振込の対象は2のみとなります</p>   <p style='padding-left:20px;'>1、3、4は指定不可となります</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>重複した依頼</p>   <p style='padding-left:20px;'>同一の受付番号（振込申請番号）への重複した依頼はできません</p>   <p style='padding-left:20px;'>なお、前回の振込取消依頼が期限切れとなれば依頼は可能となります</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Personal\Client\Model\TransferCancelRequest(); // \Ganb\Personal\Client\Model\TransferCancelRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->transferCancelUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferCancelUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Personal\Client\Model\TransferCancelRequest**](../Model/TransferCancelRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Personal\Client\Model\TransferCancelResponse**](../Model/TransferCancelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferFeeUsingPOST**
> \Ganb\Personal\Client\Model\TransferFeeResponse transferFeeUsingPOST($body, $x_access_token)

振込手数料事前照会

<p>振込・振込予約を行うための依頼内容の事前チェックと手数料を照会します</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='padding-left:20px;'>最大99件まで登録可能</p>   <p style='padding-left:20px;'>1件の場合通常の振込扱いとなり、2件以上で一括振込扱いとなります</p>   <p style='padding-left:20px;'>振込無料回数とポイントについては、算出から振込実行までの間に変動する可能性があるため、手数料算出時の計算対象から除外しています</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Personal\Client\Model\TransferRequest(); // \Ganb\Personal\Client\Model\TransferRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->transferFeeUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferFeeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Personal\Client\Model\TransferRequest**](../Model/TransferRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Personal\Client\Model\TransferFeeResponse**](../Model/TransferFeeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferRequestResultUsingGET**
> \Ganb\Personal\Client\Model\TransferRequestResultResponse transferRequestResultUsingGET($account_id, $apply_no, $x_access_token)

振込依頼結果照会

振込依頼、振込取消依頼の処理状態を照会します 振込取消依頼をした場合は、最後の依頼の結果コードが照会対象となります

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "\"301011234567\""; // string | 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29
$apply_no = "\"2018072902345678\""; // string | 受付番号（振込申請番号） 半角数字 すべての振込・総合振込で採番される、照会の基本単位となる番号  minLength: 16 maxLength: 16
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->transferRequestResultUsingGET($account_id, $apply_no, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferRequestResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29 |
 **apply_no** | **string**| 受付番号（振込申請番号） 半角数字 すべての振込・総合振込で採番される、照会の基本単位となる番号  minLength: 16 maxLength: 16 |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Personal\Client\Model\TransferRequestResultResponse**](../Model/TransferRequestResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferRequestUsingPOST**
> \Ganb\Personal\Client\Model\TransferRequestResponse transferRequestUsingPOST($body, $x_access_token)

振込依頼

<p>振込・振込予約を行うための依頼をします</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='padding-left:20px;'>最大99件まで登録可能</p>   <p style='padding-left:20px;'>1件の場合通常の振込扱いとなり、2件以上で一括振込扱いとなります</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Personal\Client\Model\TransferRequest(); // \Ganb\Personal\Client\Model\TransferRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->transferRequestUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferRequestUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Personal\Client\Model\TransferRequest**](../Model/TransferRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Personal\Client\Model\TransferRequestResponse**](../Model/TransferRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferStatusUsingGET**
> \Ganb\Personal\Client\Model\TransferStatusResponse transferStatusUsingGET($account_id, $query_key_class, $x_access_token, $apply_no, $date_from, $date_to, $next_item_key, $request_transfer_status, $request_transfer_class, $request_transfer_term)

振込状況照会

<p>仕向の振込状況および履歴を照会します</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>取得上限件数</p>   <p style='padding-left:20px;'>500件</p>   <p style='padding-left:20px;'>取得できる明細数が500に満たないときは取得できる明細のみを返却します</p>   <p style='padding-left:20px;'>取得できる明細が存在しない場合は「200：OK」とし明細を返却しません</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>ページング</p>   <p style='padding-left:20px;'>2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次明細キーを追加してリクエストしてください</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>ソート順</p>   <p style='padding-left:20px;'>振込照会対象期間区分の指定により下記となります  </p>  <p style='padding-left:20px;'>1：振込申請受付日　第1ソート：振込申請日昇順　第２ソート：振込申請番号昇順</p>  <p style='padding-left:20px;'>2：振込指定日　　　第1ソート：振込指定日昇順　第２ソート：振込申請番号昇順</p>   <p style='padding-left:20px;'>※振込照会対象期間区分の指定がない場合は、1：振込申請受付日と同じとします</p> </div> <div style='width:600px; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>対象期間</p>   <div style='display:table; margin-left:20px; background-color:#29659b;'>     <div style='display:table-cell; width:160px; padding:9px; border:1px solid #fff; color:#fff;'>日本語名</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9312;</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9313;</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9314;</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9315;</div>   </div>   <div style='display:table; margin-left:20px;'>     <div style='display:table-cell; width:160px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>対象期間From</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>   </div>   <div style='display:table; margin-left:20px;'>     <div style='display:table-cell; width:160px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>対象期間To</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>   </div> </div> <div style='margin:10px;'>   <ul>     <li style='list-style-type:none;'>&#9312;の場合　当日分の明細を返却</li>     <li style='list-style-type:none;'>&#9313;の場合　対象期間From　～　当日までの明細を返却</li>     <li style='list-style-type:none;'>&#9314;の場合　取引初回　～　対象期間Toまでの明細を返却</li>     <li style='list-style-type:none;'>&#9315;の場合　対象期間From　～　対象期間Toまでの明細を返却</li>   </ul> </div> <div style='margin-bottom:40px;' /> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>照会対象ステータス</p>   <p style='padding-left:20px;'>申請中以降のステータスで照会が可能となります</p>   <p style='padding-left:20px;'>依頼中、作成中の状態は照会対象外です</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>照会対象となる明細</p>   <p style='padding-left:20px;'>振込・振替・およびその予約の履歴と状況が照会対象となります（APIからの依頼結果のみではありません）</p>   <p style='padding-left:20px;'>定額自動振込契約によって自動登録された振込は照会対象となります</p>   <p style='padding-left:20px;'>定額自動振込契約の申請状態と状況は対象外となります</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Personal\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "\"301011234567\""; // string | 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29
$query_key_class = "\"1\""; // string | 照会対象キー区分 半角数字 照会対象のキー 1：振込申請照会対象指定、2：振込一括照会対象指定  minLength: 1 maxLength: 1
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$apply_no = "\"2018072902345678\""; // string | 受付番号（振込申請番号） 半角数字 照会対象の番号を設定 照会対象キー区分が、1のときは必須 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）  minLength: 16 maxLength: 16
$date_from = "\"2018-07-30\""; // string | 対象期間From 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）  minLength: 10 maxLength: 10
$date_to = "\"2018-08-10\""; // string | 対象期間To 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$next_item_key = "\"1234567890\""; // string | 次明細キー 半角数字 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）              minLength: 1 maxLength: 24
$request_transfer_status = array("\"20\""); // string[] | 照会対象ステータス  半角数字  2:申請中、3:差戻、4:取下げ、5:期限切れ、8:承認取消/予約取消、  11:予約中、12:手続中、13:リトライ中、  20:手続済、22:資金返却、24:組戻手続中、25:組戻済、26:組戻不成立、  40:手続不成立  照会対象キー区分が、2のときは設定可  それ以外は設定しません（値が設定されている場合は、「400 Bad Request」を返却）  配列のため、複数設定した場合は対象のステータスをOR条件で検索します  省略した場合は全てを設定したものとみなします  minLength: 1 maxLength: 3
$request_transfer_class = "\"\""; // string | 振込照会対象取得区分 半角数字 1：ALL、2：振込申請のみ、3：振込受付情報のみ NULLを設定 （値が設定されている場合は、「400 Bad Request」を返却）  minLength: 1 maxLength: 1
$request_transfer_term = "\"1\""; // string | 振込照会対象期間区分 半角数字 対象期間Fromと対象期間Toで指定する日付の区分 1：振込申請受付日　2：振込指定日 照会対象キー区分が2のときのみ入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 照会対象キー区分が、2のときに指定しない場合は1と扱います  minLength: 1 maxLength: 1

try {
    $result = $apiInstance->transferStatusUsingGET($account_id, $query_key_class, $x_access_token, $apply_no, $date_from, $date_to, $next_item_key, $request_transfer_status, $request_transfer_class, $request_transfer_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->transferStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29 |
 **query_key_class** | **string**| 照会対象キー区分 半角数字 照会対象のキー 1：振込申請照会対象指定、2：振込一括照会対象指定  minLength: 1 maxLength: 1 |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **apply_no** | **string**| 受付番号（振込申請番号） 半角数字 照会対象の番号を設定 照会対象キー区分が、1のときは必須 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）  minLength: 16 maxLength: 16 | [optional]
 **date_from** | **string**| 対象期間From 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）  minLength: 10 maxLength: 10 | [optional]
 **date_to** | **string**| 対象期間To 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10 | [optional]
 **next_item_key** | **string**| 次明細キー 半角数字 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）              minLength: 1 maxLength: 24 | [optional]
 **request_transfer_status** | [**string[]**](../Model/string.md)| 照会対象ステータス  半角数字  2:申請中、3:差戻、4:取下げ、5:期限切れ、8:承認取消/予約取消、  11:予約中、12:手続中、13:リトライ中、  20:手続済、22:資金返却、24:組戻手続中、25:組戻済、26:組戻不成立、  40:手続不成立  照会対象キー区分が、2のときは設定可  それ以外は設定しません（値が設定されている場合は、「400 Bad Request」を返却）  配列のため、複数設定した場合は対象のステータスをOR条件で検索します  省略した場合は全てを設定したものとみなします  minLength: 1 maxLength: 3 | [optional]
 **request_transfer_class** | **string**| 振込照会対象取得区分 半角数字 1：ALL、2：振込申請のみ、3：振込受付情報のみ NULLを設定 （値が設定されている場合は、「400 Bad Request」を返却）  minLength: 1 maxLength: 1 | [optional]
 **request_transfer_term** | **string**| 振込照会対象期間区分 半角数字 対象期間Fromと対象期間Toで指定する日付の区分 1：振込申請受付日　2：振込指定日 照会対象キー区分が2のときのみ入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 照会対象キー区分が、2のときに指定しない場合は1と扱います  minLength: 1 maxLength: 1 | [optional]

### Return type

[**\Ganb\Personal\Client\Model\TransferStatusResponse**](../Model/TransferStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
