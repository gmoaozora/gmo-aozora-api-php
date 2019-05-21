# SpAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | 口座ID 半角英数字 つかいわけ口座を識別するID | 
**sp_account_type_code** | **string** | つかいわけ口座種別コード 半角数字 ・1&#x3D;親口座 ・2&#x3D;子口座 | 
**sp_account_type_code_name** | **string** | つかいわけ口座種別コード名称 全角文字 つかいわけ口座種別コードの名称 | 
**sp_account_name** | **string** | つかいわけ口座名 全半角英数記号文字 | 
**sp_account_branch_code** | **string** | 支店コード 半角数字 つかいわけ口座種別コードが「2&#x3D;子口座」の場合のみ設定 該当しない場合は項目自体を設定しません | [optional] 
**sp_account_branch_name** | **string** | 支店名 全角文字 つかいわけ口座種別コードが「2&#x3D;子口座」の場合のみ設定 該当しない場合は項目自体を設定しません | [optional] 
**sp_account_number** | **string** | 口座番号 半角数字 つかいわけ口座種別コードが「2&#x3D;子口座」の場合のみ設定 該当しない場合は項目自体を設定しません | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


