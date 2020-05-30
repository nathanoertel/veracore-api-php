<?php
namespace VeraCoreAPI\model;

class OfferStatus extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Inactive'] = new FieldType('boolean');
		$fields['StartDate'] = new FieldType('dateTime');
		$fields['EndDate'] = new FieldType('dateTime');
		$fields['InactiveText'] = new FieldType('string');
		$fields['DisplayUntil'] = new FieldType('dateTime');
		return $fields;
	}
}
