<?php
namespace VeraCoreAPI\model;

class OrderShipToKey extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Key'] = new FieldType('string');
		return $fields;
	}
}
