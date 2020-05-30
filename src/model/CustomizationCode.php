<?php
namespace VeraCoreAPI\model;

class CustomizationCode extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['VariableFields'] = new ArrayFieldType('VariableField');
		return $fields;
	}
}
