<?php
namespace VeraCoreAPI\model;

class ProductBillFactor extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['FromQuantity'] = new FieldType('int');
		$fields['ToQuantity'] = new FieldType('int');
		$fields['BillFactor'] = new FieldType('double');
		return $fields;
	}
}
