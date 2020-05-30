<?php
namespace VeraCoreAPI\model;

class UserDefinedChoice extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Name'] = new FieldType('string');
		return $fields;
	}
}
