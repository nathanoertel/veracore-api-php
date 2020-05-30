<?php
namespace VeraCoreAPI\model;

class PersonCompany extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Name'] = new FieldType('string');
		$fields['Title'] = new FieldType('string');
		$fields['Store'] = new FieldType('int');
		$fields['DefaultShippingOption'] = new FieldType('ShippingOption');
		return $fields;
	}
}
