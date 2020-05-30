<?php
namespace VeraCoreAPI\model;

class UserCategoryRestriction extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['CustomCategory'] = new FieldType('CustomCategory');
		return $fields;
	}
}
