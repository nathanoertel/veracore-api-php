<?php
namespace VeraCoreAPI\model;

class ProductKit extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Composition'] = new FieldType('string');
		$fields['StartDate'] = new FieldType('dateTime');
		$fields['EndDate'] = new FieldType('dateTime');
		$fields['Weight'] = new FieldType('double');
		$fields['WeightType'] = new RestrictedFieldType('string', array(
			'Oz',
			'Lbs'
		));
		$fields['Status'] = new FieldType('VersionStatus');
		$fields['Current'] = new FieldType('boolean');
		$fields['Components'] = new ArrayFieldType('KitComponent');
		$fields['Used'] = new FieldType('boolean');
		return $fields;
	}
}
