<?php
namespace VeraCoreAPI\model;

class DiscountCode extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		return $fields;
	}
}
