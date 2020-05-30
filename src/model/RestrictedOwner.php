<?php
namespace VeraCoreAPI\model;

class RestrictedOwner extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Owner'] = new FieldType('Owner');
		$fields['Access'] = new FieldType('boolean');
		return $fields;
	}
}
