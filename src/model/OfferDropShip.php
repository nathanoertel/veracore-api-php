<?php
namespace VeraCoreAPI\model;

class OfferDropShip extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['CheckOutText'] = new FieldType('string');
		$fields['Weight'] = new FieldType('double');
		$fields['WeightType'] = new RestrictedFieldType('string', array(
			'Oz',
			'Lbs'
		));
		return $fields;
	}
}
