<?php
namespace VeraCoreAPI\model;

class PersonContact extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Phone'] = new FieldType('string');
		$fields['Fax'] = new FieldType('string');
		$fields['Email'] = new FieldType('string');
		return $fields;
	}
}
