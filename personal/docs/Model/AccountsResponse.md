# AccountsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_date** | **string** | 基準日 半角文字 一覧照会の基準日を示します YYYY-MM-DD形式 | 
**base_time** | **string** | 基準時刻 半角文字 一覧照会の基準時刻を示します HH:MM:SS+09:00形式 | 
**accounts** | [**\Ganb\Personal\Client\Model\Account[]**](Account.md) | 口座情報リスト | 
**sp_accounts** | [**\Ganb\Personal\Client\Model\SpAccount[]**](SpAccount.md) | つかいわけ口座情報リスト 該当する情報が無い場合は、項目自体を設定しません | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


