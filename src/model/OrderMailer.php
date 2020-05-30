<?php
namespace VeraCoreAPI\model;

class OrderMailer extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Prefix'] = new FieldType('string');
		$fields['FirstName'] = new FieldType('string');
		$fields['MiddleInitial'] = new FieldType('string');
		$fields['LastName'] = new FieldType('string');
		$fields['Suffix'] = new FieldType('string');
		$fields['CompanyName'] = new FieldType('string');
		$fields['Title'] = new FieldType('string');
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
		$fields['UID'] = new FieldType('string');
		$fields['TaxExempt'] = new FieldType('boolean');
		$fields['TaxExemptID'] = new FieldType('string');
		$fields['TaxExemptApproved'] = new FieldType('boolean');
		$fields['Commercial'] = new FieldType('boolean');
		$fields['Variables'] = new ArrayFieldType('PersonVariable');
		return $fields;
	}
}
