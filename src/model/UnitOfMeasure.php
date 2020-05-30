<?php
namespace VeraCoreAPI\model;

class UnitOfMeasure extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['ID'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		$fields['Removable'] = new FieldType('boolean');
		$fields['NeedsRemoval'] = new FieldType('boolean');
		$fields['WasModified'] = new FieldType('boolean');
		return $fields;
	}
}
