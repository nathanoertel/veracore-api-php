<?php
namespace VeraCoreAPI\model;

class PaymentType extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Description'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
