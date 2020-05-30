<?php
namespace VeraCoreAPI\model;

class Person extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Name'] = new FieldType('PersonName');
		$fields['CompanyInfo'] = new FieldType('PersonCompany');
		$fields['Address'] = new FieldType('PersonAddress');
		$fields['ContactInfo'] = new FieldType('PersonContact');
		$fields['BillingInfo'] = new FieldType('PersonBilling');
		$fields['Variables'] = new ArrayFieldType('PersonVariable');
		return $fields;
	}
}
