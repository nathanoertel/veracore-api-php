<?php
namespace VeraCoreAPI\model;

class FreightCarrier extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Name'] = new FieldType('string');
		return $fields;
	}
}
