<?php
namespace VeraCoreAPI\model;

class OrderHeader extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ID'] = new FieldType('string');
		$fields['EntryDate'] = new FieldType('dateTime');
		$fields['OrderEntryView'] = new FieldType('OrderEntryView');
		$fields['ReferenceNumber'] = new FieldType('string');
		$fields['PONumber'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['IpAddress'] = new FieldType('string');
		$fields['ApprovalComment'] = new FieldType('string');
		$fields['InsertDate'] = new FieldType('dateTime');
		$fields['UTCEntryDateTime'] = new FieldType('dateTime');
		return $fields;
	}
}
