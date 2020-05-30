<?php
namespace VeraCoreAPI\model;

class OrderBillTo extends OrderMailer {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Flag'] = new RestrictedFieldType('string', array(
			'Other',
			'OrderedBy',
			'DoNotUse',
			'ShipTo'
		));
		$fields['FullName'] = new FieldType('string');
		$fields['FullNameWithSuffix'] = new FieldType('string');
		$fields['CityStateZip'] = new FieldType('string');
		$fields['CityStateZipCountry'] = new FieldType('string');
		$fields['CompoundAddress'] = new FieldType('string');
		return $fields;
	}
}
