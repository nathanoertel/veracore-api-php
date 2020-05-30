<?php
namespace VeraCoreAPI\model;

class PMSystemCategory extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		$fields['Abbreviation'] = new FieldType('string');
		return $fields;
	}
}
