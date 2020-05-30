<?php
namespace VeraCoreAPI\model;

class RestrictionType extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['BudgetTax'] = new FieldType('boolean');
		$fields['BudgetSH'] = new FieldType('boolean');
		return $fields;
	}
}
