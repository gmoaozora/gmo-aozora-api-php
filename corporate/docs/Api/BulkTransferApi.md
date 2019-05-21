# Ganb\Corporate\Client\BulkTransferApi

All URIs are relative to *https://stg-api.gmo-aozora.com/ganb/stg-api/corporation/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkTransferCancelUsingPOST**](BulkTransferApi.md#bulkTransferCancelUsingPOST) | **POST** /bulktransfer/cancel | 総合振込取消依頼
[**bulkTransferFeeUsingPOST**](BulkTransferApi.md#bulkTransferFeeUsingPOST) | **POST** /bulktransfer/transferfee | 総合振込手数料事前照会
[**bulkTransferRequestResultUsingGET**](BulkTransferApi.md#bulkTransferRequestResultUsingGET) | **GET** /bulktransfer/request-result | 総合振込依頼結果照会
[**bulkTransferRequestUsingPOST**](BulkTransferApi.md#bulkTransferRequestUsingPOST) | **POST** /bulktransfer/request | 総合振込依頼
[**bulkTransferStatusUsingGET**](BulkTransferApi.md#bulkTransferStatusUsingGET) | **GET** /bulktransfer/status | 総合振込状況照会


# **bulkTransferCancelUsingPOST**
> \Ganb\Corporate\Client\Model\TransferCancelResponse bulkTransferCancelUsingPOST($body, $x_access_token)

総合振込取消依頼

<p>総合振込の取消を行うための依頼をします</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>取消対象ステータス</p>   <p style='padding-left:20px;'>申請中以降のステータスで取消が可能です</p>   <p style='padding-left:20px;'>依頼中、作成中の状態は取消対象外です</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>取消対象キー区分</p>   <p style='padding-left:20px;'>取消対象の取引の内容について指定して下さい</p>   <p style='padding-left:20px;'>取消対象キー区分と、取消対象の振込申請番号の状態がマッチしない場合は、「400 Bad Request」を返却します</p>   <p style='padding-left:20px;'>総合振込の対象は3または4のみとなります</p>   <p style='padding-left:20px;'>1、2は指定不可となります</p>   <p style='padding-left:20px;'>・ビジネスID管理未利用の場合は、4を指定してください。その他は指定不可となります</p>   <p style='padding-left:20px;'>・ビジネスID管理利用中かつ、申請者による申請中ステータスの「取下」を行いたい場合は、3を指定してください</p>   <p style='padding-left:20px;'>・ビジネスID管理利用中かつ、承認可能者による予約中ステータスの「承認取消」を行いたい場合は、4を指定してください</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>重複した依頼</p>   <p style='padding-left:20px;'>同一の受付番号（振込申請番号）への重複した依頼はできません</p>   <p style='padding-left:20px;'>なお、前回の総合振込取消依頼が期限切れとなれば依頼は可能となります</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\BulkTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Corporate\Client\Model\TransferCancelRequest(); // \Ganb\Corporate\Client\Model\TransferCancelRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->bulkTransferCancelUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTransferApi->bulkTransferCancelUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Corporate\Client\Model\TransferCancelRequest**](../Model/TransferCancelRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Corporate\Client\Model\TransferCancelResponse**](../Model/TransferCancelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTransferFeeUsingPOST**
> \Ganb\Corporate\Client\Model\TransferFeeResponse bulkTransferFeeUsingPOST($body, $x_access_token)

総合振込手数料事前照会

<p>総合振込・総合振込予約を行うための依頼内容の事前チェックと手数料を照会します</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='padding-left:20px;'>ポイントについては、算出から振込実行までの間に変動する可能性があるため、手数料算出時の計算対象から除外しています</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\BulkTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Corporate\Client\Model\BulkTransferRequest(); // \Ganb\Corporate\Client\Model\BulkTransferRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->bulkTransferFeeUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTransferApi->bulkTransferFeeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Corporate\Client\Model\BulkTransferRequest**](../Model/BulkTransferRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Corporate\Client\Model\TransferFeeResponse**](../Model/TransferFeeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTransferRequestResultUsingGET**
> \Ganb\Corporate\Client\Model\TransferRequestResultResponse bulkTransferRequestResultUsingGET($account_id, $apply_no, $x_access_token)

総合振込依頼結果照会

総合振込依頼、総合振込取消依頼の処理状態を照会します 総合振込取消依頼をした場合は、最後の依頼の結果コードが照会対象となります

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\BulkTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "\"101011234567\""; // string | 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29
$apply_no = "\"2018072902345678\""; // string | 受付番号（振込申請番号） 半角数字 すべての振込・総合振込で採番される、照会の基本単位となる番号  minLength: 16 maxLength: 16
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->bulkTransferRequestResultUsingGET($account_id, $apply_no, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTransferApi->bulkTransferRequestResultUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Ganb\Corporate\Client\Model\TransferRequestResultResponse**](../Model/TransferRequestResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTransferRequestUsingPOST**
> \Ganb\Corporate\Client\Model\BulkTransferRequestResponse bulkTransferRequestUsingPOST($body, $x_access_token)

総合振込依頼

<p>総合振込・総合振込予約を行うための依頼をします</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\BulkTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ganb\Corporate\Client\Model\BulkTransferRequest(); // \Ganb\Corporate\Client\Model\BulkTransferRequest | HTTPリクエストボディ
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128

try {
    $result = $apiInstance->bulkTransferRequestUsingPOST($body, $x_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTransferApi->bulkTransferRequestUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ganb\Corporate\Client\Model\BulkTransferRequest**](../Model/BulkTransferRequest.md)| HTTPリクエストボディ |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |

### Return type

[**\Ganb\Corporate\Client\Model\BulkTransferRequestResponse**](../Model/BulkTransferRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTransferStatusUsingGET**
> \Ganb\Corporate\Client\Model\BulkTransferStatusResponse bulkTransferStatusUsingGET($account_id, $query_key_class, $x_access_token, $detail_info_necessity, $bulktransfer_item_key, $apply_no, $date_from, $date_to, $next_item_key, $request_transfer_status, $request_transfer_class, $request_transfer_term)

総合振込状況照会

<p>仕向の総合振込状況および履歴を照会します</p> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>詳細説明</h4> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>取得上限件数</p>   <p style='padding-left:20px;'>総合振込照会明細情報 500件（明細情報取得フラグが「False:取得しない」の場合）</p>   <p style='padding-left:20px;'>総合振込明細情報 500件（明細情報取得フラグが「True：取得する」の場合）</p>   <p style='padding-left:20px;'>1回のリクエストで照会できる明細は、総合振込照会明細情報または総合振込明細情報のいずれか最大500件です</p>   <p style='padding-left:20px;'>取得できる明細が存在しない場合は「200：OK」とし明細を返却しません</p>   <p style='padding-left:20px;'>取得できる明細数が500に満たないときは取得できる明細のみを返却します</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>ページング</p>   <p style='padding-left:20px;'>2ページ目以降を照会する際は、初回と同じリクエスト内容に、初回レスポンスの次明細キーまたは総合振込明細情報取得対象キーを追加してリクエストしてください</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>ソート順</p>   <p style='padding-left:20px;'>明細情報取得フラグが、「False：取得しない」のとき</p>   <p style='padding-left:20px;'>　振込照会対象期間区分の指定により下記となります</p>   <p style='padding-left:50px;'>1：振込申請受付日　第1ソート：振込申請日昇順　第２ソート：振込申請番号昇順</p>   <p style='padding-left:50px;'>2：振込指定日　　　第1ソート：振込指定日昇順　第２ソート：振込申請番号昇順</p>   <p style='padding-left:50px;'>※振込照会対象期間区分の指定がない場合は、1：振込申請受付日と同じとします</p>   <p style='padding-left:20px;'>明細情報取得フラグが、「True：取得する」のとき</p>   <p style='padding-left:20px;'>　明細番号の昇順</p> </div> <div style='width:600px; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>対象期間</p>   <div style='display:table; margin-left:20px; background-color:#29659b;'>     <div style='display:table-cell; width:160px; padding:9px; border:1px solid #fff; color:#fff;'>日本語名</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9312;</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9313;</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9314;</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; text-align:center; font-size:120%; color:#fff;'>&#9315;</div>   </div>   <div style='display:table; margin-left:20px;'>     <div style='display:table-cell; width:160px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>対象期間From</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>   </div>   <div style='display:table; margin-left:20px;'>     <div style='display:table-cell; width:160px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>対象期間To</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>×</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>     <div style='display:table-cell; width:80px; padding:9px; border:1px solid #fff; background-color:#f8f8f8; font-size:120%; text-align:center;'>○</div>   </div> </div> <div style='margin:10px;'>   <ul>     <li style='list-style-type:none;'>&#9312;の場合　当日分の明細を返却</li>     <li style='list-style-type:none;'>&#9313;の場合　対象期間From　～　当日までの明細を返却</li>     <li style='list-style-type:none;'>&#9314;の場合　取引初回　～　対象期間Toまでの明細を返却</li>     <li style='list-style-type:none;'>&#9315;の場合　対象期間From　～　対象期間Toまでの明細を返却</li>  <li style='list-style-type:none; margin-left:10px;'>※現在契約中の総合振込サービスのみ照会可能となります</li>  </ul> </div> <div style='margin-bottom:40px;' /> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>照会対象ステータス</p>   <p style='padding-left:20px;'>申請中以降のステータスで照会が可能となります</p>   <p style='padding-left:20px;'>依頼中、作成中の状態は照会対象外です</p> </div> <div style='margin:10px;'>   <p style='font-weight:bold; color:#616161;'>照会対象となる明細</p>   <p style='padding-left:20px;'>総合振込・およびその予約の履歴と状況が照会対象となります（APIからの依頼結果のみではありません）</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Ganb\Corporate\Client\Api\BulkTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = "\"101011234567\""; // string | 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29
$query_key_class = "\"1\""; // string | 照会対象キー区分 半角数字 照会対象のキー 1：振込申請照会対象指定、2：振込一括照会対象指定  minLength: 1 maxLength: 1
$x_access_token = "x_access_token_example"; // string | アクセストークン  minLength: 1 maxLength: 128
$detail_info_necessity = true; // bool | 明細情報取得フラグ 総合振込明細情報の取得要否 照会対象キー区分が、1のときは「True：取得する」を指定可 それ以外で「True：取得する」が設定されている場合は、「400 Bad Request」を返却 True：取得する、False:取得しない　省略/NULLは　false扱い
$bulktransfer_item_key = "\"501\""; // string | 総合振込明細情報取得対象キー 半角数字 明細情報取得フラグが、「True：取得する」のとき指定可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 総合振込明細情報を取得するときに取得を開始する番号 明細情報取得フラグが、「True：取得する」のときの省略/NULLは1扱い 1500明細を取得する場合、は以下のように設定 1電文目：1 2電文目：501 3電文目：1001  minLength: 1 maxLength: 6
$apply_no = "\"2018072902345678\""; // string | 受付番号（振込申請番号） 半角数字 照会対象の番号を設定 照会対象キー区分が、1のときは必須 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）  minLength: 16 maxLength: 16
$date_from = "\"2018-07-30\""; // string | 対象期間From 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）              minLength: 10 maxLength: 10
$date_to = "\"2018-08-10\""; // string | 対象期間To 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10
$next_item_key = "\"1234567890\""; // string | 次明細キー 半角数字 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）              minLength: 1 maxLength: 24
$request_transfer_status = array("\"20\""); // string[] | 照会対象ステータス  半角数字  2:申請中、3:差戻、4:取下げ、5:期限切れ、8:承認取消/予約取消、  11:予約中、12:手続中、13:リトライ中、  20:手続済、30:不能・組戻あり、40:手続不成立   照会対象キー区分が、2のときは設定可  それ以外は設定しません（値が設定されている場合は、「400 Bad Request」を返却）  配列のため、複数設定した場合は対象のステータスをOR条件で検索します  省略した場合は全てを設定したものとみなします  minLength: 1 maxLength: 3
$request_transfer_class = "\"1\""; // string | 振込照会対象取得区分 半角数字 1：ALL、2：振込申請のみ、3：振込受付情報のみ 照会対象キー区分が2かつ、ビジネスID管理利用中の場合のときのみ入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 照会対象キー区分が、2のときに指定しない場合は1と扱います  minLength: 1 maxLength: 1
$request_transfer_term = "\"1\""; // string | 振込照会対象期間区分 半角数字 対象期間Fromと対象期間Toで指定する日付の区分 1：振込申請受付日　2：振込指定日 照会対象キー区分が2のときのみ入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 照会対象キー区分が、2のときに指定しない場合は1と扱います  minLength: 1 maxLength: 1

try {
    $result = $apiInstance->bulkTransferStatusUsingGET($account_id, $query_key_class, $x_access_token, $detail_info_necessity, $bulktransfer_item_key, $apply_no, $date_from, $date_to, $next_item_key, $request_transfer_status, $request_transfer_class, $request_transfer_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTransferApi->bulkTransferStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 口座ID 半角数字 口座を識別するID  minLength: 12 maxLength: 29 |
 **query_key_class** | **string**| 照会対象キー区分 半角数字 照会対象のキー 1：振込申請照会対象指定、2：振込一括照会対象指定  minLength: 1 maxLength: 1 |
 **x_access_token** | **string**| アクセストークン  minLength: 1 maxLength: 128 |
 **detail_info_necessity** | **bool**| 明細情報取得フラグ 総合振込明細情報の取得要否 照会対象キー区分が、1のときは「True：取得する」を指定可 それ以外で「True：取得する」が設定されている場合は、「400 Bad Request」を返却 True：取得する、False:取得しない　省略/NULLは　false扱い | [optional]
 **bulktransfer_item_key** | **string**| 総合振込明細情報取得対象キー 半角数字 明細情報取得フラグが、「True：取得する」のとき指定可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 総合振込明細情報を取得するときに取得を開始する番号 明細情報取得フラグが、「True：取得する」のときの省略/NULLは1扱い 1500明細を取得する場合、は以下のように設定 1電文目：1 2電文目：501 3電文目：1001  minLength: 1 maxLength: 6 | [optional]
 **apply_no** | **string**| 受付番号（振込申請番号） 半角数字 照会対象の番号を設定 照会対象キー区分が、1のときは必須 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）  minLength: 16 maxLength: 16 | [optional]
 **date_from** | **string**| 対象期間From 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）              minLength: 10 maxLength: 10 | [optional]
 **date_to** | **string**| 対象期間To 半角文字 YYYY-MM-DD形式 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 対象期間Fromと対象期間Toを指定する場合は、対象期間From≦対象期間Toとし、それ以外は「400 Bad Request」を返却  minLength: 10 maxLength: 10 | [optional]
 **next_item_key** | **string**| 次明細キー 半角数字 照会対象キー区分が、2のときは入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却）              minLength: 1 maxLength: 24 | [optional]
 **request_transfer_status** | [**string[]**](../Model/string.md)| 照会対象ステータス  半角数字  2:申請中、3:差戻、4:取下げ、5:期限切れ、8:承認取消/予約取消、  11:予約中、12:手続中、13:リトライ中、  20:手続済、30:不能・組戻あり、40:手続不成立   照会対象キー区分が、2のときは設定可  それ以外は設定しません（値が設定されている場合は、「400 Bad Request」を返却）  配列のため、複数設定した場合は対象のステータスをOR条件で検索します  省略した場合は全てを設定したものとみなします  minLength: 1 maxLength: 3 | [optional]
 **request_transfer_class** | **string**| 振込照会対象取得区分 半角数字 1：ALL、2：振込申請のみ、3：振込受付情報のみ 照会対象キー区分が2かつ、ビジネスID管理利用中の場合のときのみ入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 照会対象キー区分が、2のときに指定しない場合は1と扱います  minLength: 1 maxLength: 1 | [optional]
 **request_transfer_term** | **string**| 振込照会対象期間区分 半角数字 対象期間Fromと対象期間Toで指定する日付の区分 1：振込申請受付日　2：振込指定日 照会対象キー区分が2のときのみ入力可 それ以外はNULLを設定（値が設定されている場合は、「400 Bad Request」を返却） 照会対象キー区分が、2のときに指定しない場合は1と扱います  minLength: 1 maxLength: 1 | [optional]

### Return type

[**\Ganb\Corporate\Client\Model\BulkTransferStatusResponse**](../Model/BulkTransferStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

