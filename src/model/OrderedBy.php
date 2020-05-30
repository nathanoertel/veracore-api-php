<?php
namespace VeraCoreAPI\model;

class OrderedBy extends OrderMailer {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ORDOBY'] = new FieldType('ORDOBYID');
		$fields['FullName'] = new FieldType('string');
		$fields['FullNameWithSuffix'] = new FieldType('string');
		$fields['CityStateZip'] = new FieldType('string');
		$fields['CityStateZipCountry'] = new FieldType('string');
		$fields['CompoundAddress'] = new FieldType('string');
		return $fields;
	}
}
