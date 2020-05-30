<?php
namespace VeraCoreAPI\model;

class PersonVariable extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['VariableField'] = new FieldType('VariableField');
		$fields['Value'] = new FieldType('string');
		$fields['ValueDescription'] = new FieldType('string');
		return $fields;
	}
}
