<?php
namespace VeraCoreAPI\model;

class Color extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ColorClass'] = new FieldType('ColorClass');
		$fields['Code'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['ImagePath'] = new FieldType('string');
		$fields['ImageLocal'] = new FieldType('boolean');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
