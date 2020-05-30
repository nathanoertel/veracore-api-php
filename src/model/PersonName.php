<?php
namespace VeraCoreAPI\model;

class PersonName extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['UID'] = new FieldType('string');
		$fields['Prefix'] = new FieldType('string');
		$fields['FirstName'] = new FieldType('string');
		$fields['MiddleName'] = new FieldType('string');
		$fields['LastName'] = new FieldType('string');
		$fields['Suffix'] = new FieldType('string');
		$fields['FullName'] = new FieldType('string');
		return $fields;
	}
}
