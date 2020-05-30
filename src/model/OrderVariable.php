<?php
namespace VeraCoreAPI\model;

class OrderVariable extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['VariableField'] = new FieldType('VariableField');
		$fields['Value'] = new FieldType('string');
		$fields['ValueDescription'] = new FieldType('string');
		return $fields;
	}
}
