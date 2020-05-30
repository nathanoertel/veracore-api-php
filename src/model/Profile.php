<?php
namespace VeraCoreAPI\model;

class Profile extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['SystemCategory'] = new FieldType('PMSystemCategory');
		return $fields;
	}
}
