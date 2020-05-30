<?php
namespace VeraCoreAPI\model;

class OfferRestriction extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['RestrictionType'] = new FieldType('RestrictionType');
		$fields['Limit'] = new FieldType('int');
		$fields['Suppress'] = new RestrictedFieldType('string', array(
			'No',
			'Yes',
			'ViewOnly'
		));
		$fields['AllowOrdering'] = new FieldType('boolean');
		$fields['SuppressDisplay'] = new FieldType('boolean');
		$fields['ViewOnly'] = new FieldType('boolean');
		$fields['PaymentAlwaysRequired'] = new FieldType('boolean');
		$fields['Comments'] = new FieldType('string');
		return $fields;
	}
}
