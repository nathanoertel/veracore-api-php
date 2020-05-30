<?php
namespace VeraCoreAPI\model;

class SignatureRequired extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['Code'] = new FieldType('string');
		$fields['Type'] = new FieldType('int');
		return $fields;
	}
}
