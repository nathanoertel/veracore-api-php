<?php
namespace VeraCoreAPI\model;

class PersonBilling extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['TaxExempt'] = new FieldType('boolean');
		$fields['TaxExemptID'] = new FieldType('string');
		$fields['TaxExemptApproved'] = new FieldType('boolean');
		$fields['RestrictionType1'] = new FieldType('RestrictionType');
		$fields['RestrictionType2'] = new FieldType('RestrictionType');
		$fields['PriceClass'] = new FieldType('PriceClass');
		$fields['MailerClass'] = new FieldType('MailerClass');
		return $fields;
	}
}
