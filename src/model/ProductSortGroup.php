<?php
namespace VeraCoreAPI\model;

class ProductSortGroup extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['SortLevel'] = new FieldType('ProductSortLevel');
		$fields['SortKey'] = new FieldType('string');
		return $fields;
	}
}
