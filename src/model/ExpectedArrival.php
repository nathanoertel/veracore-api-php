<?php
namespace VeraCoreAPI\model;

class ExpectedArrival extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['System'] = new FieldType('PMSystem');
		$fields['EnteredAt'] = new FieldType('dateTime');
		$fields['Job'] = new FieldType('int');
		$fields['Owner'] = new FieldType('Owner');
		$fields['OurPurchaseOrder'] = new FieldType('string');
		$fields['CustomerPurchaseOrder'] = new FieldType('string');
		$fields['ArrivalTime'] = new FieldType('dateTime');
		$fields['ArrivalTimeAsString'] = new FieldType('string');
		$fields['ShippingFrom'] = new FieldType('string');
		$fields['ShippingMethod'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['IsAssembly'] = new FieldType('boolean');
		$fields['User'] = new FieldType('string');
		$fields['UTCArrivalDateTime'] = new FieldType('dateTime');
		$fields['UTCEnteredAt'] = new FieldType('dateTime');
		$fields['Components'] = new ArrayFieldType('ExpectedArrivalComponent');
		return $fields;
	}
}
