<?php
namespace VeraCoreAPI\model;

class OnOrder extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['OnOrderSeqID'] = new FieldType('int');
		$fields['PurchaseOrder'] = new FieldType('PurchaseOrder');
		$fields['OnOrderProductSeqID'] = new FieldType('int');
		$fields['PurchaseOrderProduct'] = new FieldType('PurchaseOrderProduct');
		$fields['ReferenceNumber'] = new FieldType('string');
		$fields['PurchaseOrderNumber'] = new FieldType('string');
		$fields['DateRecorded'] = new FieldType('dateTime');
		$fields['ApproximateReceiveDate'] = new FieldType('dateTime');
		$fields['FromWhere'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['PriceType'] = new RestrictedFieldType('string', array(
			'Each',
			'PerThousand'
		));
		$fields['Quantity'] = new FieldType('int');
		$fields['UnitPrice'] = new FieldType('decimal');
		$fields['ExtendedPrice'] = new FieldType('decimal');
		$fields['QuantityReceived'] = new FieldType('int');
		$fields['UTCDateRecorded'] = new FieldType('dateTime');
		$fields['ToDelete'] = new FieldType('boolean');
		return $fields;
	}
}
