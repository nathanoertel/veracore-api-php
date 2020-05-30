<?php
namespace VeraCoreAPI\model;

class CustomCategory extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['CategoryDef'] = new FieldType('CustomCategoryDef');
		$fields['Description'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
