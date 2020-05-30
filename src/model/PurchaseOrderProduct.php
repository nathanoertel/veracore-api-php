<?php
namespace VeraCoreAPI\model;

class PurchaseOrderProduct extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Product'] = new ArrayFieldType('ProductIDHeader');
		$fields['Quantity'] = new FieldType('int');
		$fields['PriceType'] = new RestrictedFieldType('string', array(
			'Each',
			'PerThousand'
		));
		$fields['ValuationPrice'] = new FieldType('decimal');
		$fields['ExtendedValuationPrice'] = new FieldType('decimal');
		$fields['POLineNumber'] = new FieldType('string');
		$fields['QuantityReceived'] = new FieldType('int');
		$fields['Complete'] = new FieldType('int');
		$fields['PurchaseOrderDetails'] = new FieldType('int');
		$fields['UnitPrice'] = new FieldType('decimal');
		$fields['ExtendedPrice'] = new FieldType('decimal');
		return $fields;
	}
}
