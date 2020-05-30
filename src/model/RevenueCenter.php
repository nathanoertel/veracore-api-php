<?php
namespace VeraCoreAPI\model;

class RevenueCenter extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['GLCode'] = new FieldType('GLCode');
		$fields['IsDefault'] = new FieldType('boolean');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
