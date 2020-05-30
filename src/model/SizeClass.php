<?php
namespace VeraCoreAPI\model;

class SizeClass extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		return $fields;
	}
}
