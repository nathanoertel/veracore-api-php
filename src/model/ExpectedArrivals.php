<?php
namespace VeraCoreAPI\model;

class ExpectedArrivals extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ExpectedArrivalID'] = new FieldType('int');
		$fields['DateTimeEntered'] = new FieldType('dateTime');
		$fields['Warehouse'] = new FieldType('string');
		$fields['OwnerID'] = new FieldType('string');
		$fields['OwnerName'] = new FieldType('string');
		$fields['ProductID'] = new FieldType('string');
		$fields['ProductDescription'] = new FieldType('string');
		$fields['Version'] = new FieldType('string');
		$fields['ExpectedArrivalDate'] = new FieldType('dateTime');
		$fields['QTYRequested'] = new FieldType('int');
		$fields['QTYReceivedtoDate'] = new FieldType('int');
		$fields['Complete'] = new FieldType('short');
		$fields['OurPO'] = new FieldType('string');
		$fields['ClientPO'] = new FieldType('string');
		$fields['ShippingFrom'] = new FieldType('string');
		$fields['ShippingMethod'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		return $fields;
	}
}
