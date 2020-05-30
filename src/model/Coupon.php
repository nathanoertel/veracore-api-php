<?php
namespace VeraCoreAPI\model;

class Coupon extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Code'] = new FieldType('string');
		return $fields;
	}
}
