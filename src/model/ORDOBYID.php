<?php
namespace VeraCoreAPI\model;

class ORDOBYID extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['CustomerID'] = new FieldType('string');
		return $fields;
	}
}
