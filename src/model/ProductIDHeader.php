<?php
namespace VeraCoreAPI\model;

class ProductIDHeader extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['PartNumber'] = new FieldType('string');
		$fields['Owner'] = new FieldType('Owner');
		$fields['Description'] = new FieldType('string');
		return $fields;
	}
}
