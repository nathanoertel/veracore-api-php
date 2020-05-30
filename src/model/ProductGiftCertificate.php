<?php
namespace VeraCoreAPI\model;

class ProductGiftCertificate extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['IsGiftCertificate'] = new FieldType('boolean');
		$fields['Amount'] = new FieldType('decimal');
		$fields['ExpirationDays'] = new FieldType('int');
		return $fields;
	}
}
