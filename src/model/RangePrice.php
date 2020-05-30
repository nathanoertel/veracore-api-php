<?php
namespace VeraCoreAPI\model;

class RangePrice extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Start'] = new FieldType('int');
		$fields['End'] = new FieldType('int');
		$fields['Price'] = new FieldType('decimal');
		return $fields;
	}
}
