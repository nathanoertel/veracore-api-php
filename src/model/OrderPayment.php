<?php
namespace VeraCoreAPI\model;

class OrderPayment extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PaymentType'] = new FieldType('PaymentType');
		$fields['PaymentAmount'] = new FieldType('decimal');
		$fields['CCNumber'] = new FieldType('string');
		$fields['CCExpirationDate'] = new FieldType('string');
		$fields['CSC'] = new FieldType('string');
		$fields['ARReference'] = new FieldType('string');
		$fields['Token'] = new FieldType('string');
		$fields['TransactionID'] = new FieldType('string');
		$fields['AuthorizationCode'] = new FieldType('string');
		$fields['AuthorizationAmount'] = new FieldType('decimal');
		$fields['AuthorizationDate'] = new FieldType('dateTime');
		return $fields;
	}
}
