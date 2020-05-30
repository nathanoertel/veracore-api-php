<?php
namespace VeraCoreAPI\model;

class UniversalProductCode extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Product'] = new FieldType('Product');
		$fields['Code'] = new FieldType('string');
		$fields['UnitQuantity'] = new FieldType('int');
		return $fields;
	}
}
