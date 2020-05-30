<?php
namespace VeraCoreAPI\model;

class CategoryGroup extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['Details'] = new ArrayFieldType('CategoryGroupDetail');
		return $fields;
	}
}
