# CreateCustomerCardRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_nonce** | **string** | A card nonce representing the credit card to link to the customer.  Card nonces are generated by the &#x60;SqPaymentForm&#x60; that buyers enter their card information into. See [Embedding the payment form](/articles/adding-payment-form/) for more information. | 
**billing_address** | [**\SquareConnect\Model\Address**](Address.md) | Address information for the card on file. Only the &#x60;postal_code&#x60; field is required for payments in the US and Canada. | [optional] 
**cardholder_name** | **string** | The cardholder&#39;s name. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

