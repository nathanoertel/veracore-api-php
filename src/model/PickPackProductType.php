<?php
namespace VeraCoreAPI\model;

class PickPackProductType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ProductId'] = new FieldType('string');
		$fields['ProductDesc'] = new FieldType('string');
		$fields['Revision'] = new FieldType('string');
		$fields['ToShipQty'] = new FieldType('int');
		return $fields;
	}
}
