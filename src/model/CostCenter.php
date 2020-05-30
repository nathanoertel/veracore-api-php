<?php
namespace VeraCoreAPI\model;

class CostCenter extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		$fields['Removable'] = new FieldType('boolean');
		return $fields;
	}
}
