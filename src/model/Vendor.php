<?php
namespace VeraCoreAPI\model;

class Vendor extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Name'] = new FieldType('string');
		$fields['Contact'] = new FieldType('string');
		$fields['Address1'] = new FieldType('string');
		$fields['Address2'] = new FieldType('string');
		$fields['Address3'] = new FieldType('string');
		$fields['City'] = new FieldType('string');
		$fields['State'] = new FieldType('string');
		$fields['PostalCode'] = new FieldType('string');
		$fields['Country'] = new FieldType('string');
		$fields['Email'] = new FieldType('string');
		$fields['Status'] = new RestrictedFieldType('string', array(
			'Active',
			'Inactive',
			'Historical'
		));
		$fields['Hold'] = new FieldType('boolean');
		$fields['Comments'] = new FieldType('string');
		$fields['OMSSystem'] = new FieldType('OMSSystem');
		$fields['Phone'] = new FieldType('string');
		$fields['Fax'] = new FieldType('string');
		$fields['MinimumPurchaseAmount'] = new FieldType('decimal');
		return $fields;
	}
}
