<?php
namespace VeraCoreAPI\model;

class ProductSortLevel extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['Order'] = new FieldType('int');
		$fields['SortGroupType'] = new FieldType('SortGroupType');
		$fields['IsActive'] = new FieldType('boolean');
		$fields['IsEnabled'] = new FieldType('boolean');
		return $fields;
	}
}
