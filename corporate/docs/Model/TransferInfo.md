# TransferInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transfer_amount** | **string** | 振込金額 半角数字 1以上,整数のみ | [optional] 
**edi_info** | **string** | EDI情報 半角文字 該当する情報が無い場合は項目自体を設定しません | [optional] 
**beneficiary_bank_code** | **string** | 被仕向金融機関番号 半角数字 | [optional] 
**beneficiary_bank_name** | **string** | 被仕向金融機関名カナ 半角文字 | [optional] 
**beneficiary_branch_code** | **string** | 被仕向支店番号 半角数字 | [optional] 
**beneficiary_branch_name** | **string** | 被仕向支店名カナ 半角文字 | [optional] 
**account_type_code** | **string** | 科目コード（預金種別コード） 半角数字 1：普通、2：当座、4：貯蓄、9：その他 | [optional] 
**account_number** | **string** | 口座番号 半角数字 7桁未満の番号は右詰で、前ゼロで埋めること | [optional] 
**beneficiary_name** | **string** | 受取人名 半角文字 該当する情報が無い場合は項目自体を設定しません | [optional] 
**transfer_detail_responses** | [**\Ganb\Corporate\Client\Model\TransferDetailResponse[]**](TransferDetailResponse.md) | 振込明細結果 振込明細結果のリスト 正常時のみ応答 該当する情報が無い場合は空のリストを返却 | [optional] 
**unable_detail_infos** | [**\Ganb\Corporate\Client\Model\UnableDetailInfo[]**](UnableDetailInfo.md) | 不能明細情報 不能明細情報のリスト 該当する情報が無い場合は項目自体を設定しません | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


