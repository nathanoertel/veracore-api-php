<?php
namespace VeraCoreAPI\model;

class BOMProductType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ProductId'] = new FieldType('string');
		$fields['ProductDesc'] = new FieldType('string');
		$fields['OrderQty'] = new FieldType('int');
		$fields['ReservedQty'] = new FieldType('int');
		$fields['MarkedQty'] = new FieldType('int');
		$fields['PulledQty'] = new FieldType('int');
		$fields['CanceledQty'] = new FieldType('int');
		$fields['BackorderQty'] = new FieldType('int');
		$fields['ProductDocID'] = new FieldType('string');
		return $fields;
	}
}
