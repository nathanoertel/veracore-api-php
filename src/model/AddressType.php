<?php
namespace VeraCoreAPI\model;

class AddressType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['UniqueId'] = new FieldType('string');
		$fields['Contact'] = new FieldType('string');
		$fields['Company'] = new FieldType('string');
		$fields['Address1'] = new FieldType('string');
		$fields['Address2'] = new FieldType('string');
		$fields['Address3'] = new FieldType('string');
		$fields['City'] = new FieldType('string');
		$fields['State'] = new FieldType('string');
		$fields['PostalCode'] = new FieldType('string');
		$fields['Country'] = new FieldType('string');
		$fields['Phone'] = new FieldType('string');
		$fields['Fax'] = new FieldType('string');
		$fields['Email'] = new FieldType('string');
		return $fields;
	}
}
