<?php
namespace VeraCoreAPI\model;

class BillingCode extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['ClosingDate'] = new FieldType('dateTime');
		return $fields;
	}
}
