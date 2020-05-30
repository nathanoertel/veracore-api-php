<?php
namespace VeraCoreAPI\model;

class OrderBudget extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Person'] = new FieldType('Person');
		return $fields;
	}
}
