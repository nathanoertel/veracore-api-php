<?php
namespace VeraCoreAPI\model;

class ProductIDSort extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ProductType'] = new FieldType('ProductType');
		return $fields;
	}
}
