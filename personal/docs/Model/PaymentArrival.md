# PaymentArrival

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_date** | **string** | 取引日 半角文字 YYYY-MM-DD形式 | 
**value_date** | **string** | 起算日 半角文字 YYYY-MM-DD形式 | 
**transaction_type** | **string** | 入払コード 半角数字 ・1&#x3D;入金 ・2&#x3D;出金 常に1&#x3D;入金のみ | 
**remarks** | **string** | 摘要内容 全半角文字 該当データがない場合は項目自体を設定しません | [optional] 
**amount** | **string** | 取引金額 半角数字　マイナス含む | 
**applicant_name** | **string** | 依頼人名 半角文字 該当データがない場合は項目自体を設定しません | [optional] 
**payment_bank_name** | **string** | 仕向金融機関名カナ 半角文字 | [optional] 
**payment_branch_name** | **string** | 仕向支店名カナ 半角文字 | [optional] 
**edi_info** | **string** | EDI情報 半角文字 該当データがない場合は項目自体を設定しません | [optional] 
**item_key** | **string** | 明細キー 半角数字 口座ID毎に設定される明細キー（明細データtimestamp（μs）） | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


