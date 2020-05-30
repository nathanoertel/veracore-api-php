<?php
namespace VeraCoreAPI\model;

class GiftCertificate extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['UID'] = new FieldType('string');
		$fields['Amount'] = new FieldType('decimal');
		return $fields;
	}
}
