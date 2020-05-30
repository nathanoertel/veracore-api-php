<?php
namespace VeraCoreAPI\model;

class ProductVariable extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['VariableField'] = new FieldType('VariableField');
		$fields['Value'] = new FieldType('string');
		return $fields;
	}
}
