<?php
namespace VeraCoreAPI\model;

class Size extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['Code'] = new FieldType('string');
		$fields['SizeClass'] = new FieldType('SizeClass');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
