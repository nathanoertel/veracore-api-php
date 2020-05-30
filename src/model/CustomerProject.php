<?php
namespace VeraCoreAPI\model;

class CustomerProject extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ID'] = new FieldType('string');
		return $fields;
	}
}
