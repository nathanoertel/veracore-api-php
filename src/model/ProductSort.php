<?php
namespace VeraCoreAPI\model;

class ProductSort extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ProductType'] = new FieldType('ProductType');
		$fields['SortGroup1'] = new FieldType('ProductSortGroup');
		$fields['SortGroup2'] = new FieldType('ProductSortGroup');
		$fields['SortGroup3'] = new FieldType('ProductSortGroup');
		$fields['SortGroup4'] = new FieldType('ProductSortGroup');
		return $fields;
	}
}
