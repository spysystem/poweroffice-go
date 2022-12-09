# # Client

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**legal_name** | **string** |  | [optional]
**vat_number** | **string** |  | [optional]
**mail_address** | [**\PowerOfficeGo\Model\MailAddress**](MailAddress.md) |  | [optional]
**street_address** | [**\PowerOfficeGo\Model\MailAddress**](MailAddress.md) |  | [optional]
**email_address** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**website_url** | **string** |  | [optional]
**last_changed** | **string** |  | [optional]
**lock_date** | **string** | Gets the lock date on the client. It&#39;s not possible to create accounting entries on this date or any previous date on this client. | [optional]
**sales_account_code** | **int** |  | [optional]
**vat_exempt_sales_account_code** | **int** |  | [optional]
**is_vat_registered** | **bool** |  | [optional]
**vat_period** | **int** | Gets the specified Value Added Tax period on this client. The VAT period states how often VAT is reported to the government from this client. 0 - None (No defined VAT period) 1 - Weekly (Every week) 2 - HalfMonthly (Half-Monthly) 3 - Monthly (Every month) 4 - BiMonthly (Every two months) 5 - Yearly (Once a year) 6 - HalfYearly (Twice a year) 7 - Quarterly (Four times a year) | [optional]
**financial_year_end_month** | **int** | Gets the end month for the accounting period. 0 - None (None, error value) 1-12 Month number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
