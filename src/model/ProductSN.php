<?php
namespace VeraCoreAPI\model;

class ProductSN extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SerialNumbers'] = new RestrictedFieldType('string', array(
			'NoSerialNumbers',
			'ShippingTime',
			'TrackedInWMS',
			'TableValidationShipTime'
		));
		$fields['SNCasePacks'] = new FieldType('boolean');
		$fields['CasePackQuantity'] = new FieldType('int');
		return $fields;
	}
}
