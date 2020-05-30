<?php
namespace VeraCoreAPI\model;

class PersonAddress extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Address1'] = new FieldType('string');
		$fields['Address2'] = new FieldType('string');
		$fields['Address3'] = new FieldType('string');
		$fields['City'] = new FieldType('string');
		$fields['State'] = new FieldType('string');
		$fields['PostalCode'] = new FieldType('string');
		$fields['Country'] = new FieldType('string');
		$fields['Commercial'] = new FieldType('boolean');
		$fields['CityStateZip'] = new FieldType('string');
		$fields['CityStateZipCountry'] = new FieldType('string');
		$fields['CompoundAddress'] = new FieldType('string');
		return $fields;
	}
}
