<?php
namespace VeraCoreAPI\model;

class CustomAssemblyGroup extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Heading'] = new FieldType('string');
		$fields['MinimumQuantity'] = new FieldType('int');
		$fields['MaximumQuantity'] = new FieldType('int');
		$fields['Order'] = new FieldType('int');
		$fields['GroupType'] = new FieldType('int');
		return $fields;
	}
}
