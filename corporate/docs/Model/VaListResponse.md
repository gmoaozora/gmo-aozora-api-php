# VaListResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_date** | **string** | 基準日 半角文字 一覧照会の基準日を示します YYYY-MM-DD形式 | 
**base_time** | **string** | 基準時刻 半角文字 一覧照会の基準時刻を示します HH:MM:SS+09:00形式 | 
**has_next** | **bool** | 次一覧フラグ ・true&#x3D;次一覧あり ・false&#x3D;次一覧なし | 
**next_item_key** | **string** | 次一覧キー 半角英数字 次一覧フラグがfalseの場合は項目自体を設定しません | [optional] 
**count** | **string** | 口座取得件数 半角数字 | 
**v_accounts** | [**\Ganb\Corporate\Client\Model\VAccount[]**](VAccount.md) | 振込入金口座情報 振込入金口座情報のリスト 該当する情報が無い場合は空のリストを返却 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


