<?php
namespace VeraCoreAPI\model;

class EDelivery extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['UploadAttempted'] = new FieldType('boolean');
		$fields['UploadSuccess'] = new FieldType('boolean');
		$fields['Directory'] = new FieldType('string');
		$fields['Filename'] = new FieldType('string');
		$fields['ExpirationDays'] = new FieldType('int');
		return $fields;
	}
}
