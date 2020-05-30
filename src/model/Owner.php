<?php
namespace VeraCoreAPI\model;

class Owner extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['SortGroupType'] = new FieldType('SortGroupType');
		$fields['ID'] = new FieldType('string');
		$fields['CompanyName'] = new FieldType('string');
		$fields['BillCode'] = new FieldType('BillingCode');
		$fields['ProductHistoryTransactionType'] = new RestrictedFieldType('string', array(
			'OnePerTransaction',
			'OnePerDay'
		));
		return $fields;
	}
}
