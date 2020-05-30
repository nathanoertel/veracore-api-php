<?php
namespace VeraCoreAPI\model;

class RawMaterial extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Component'] = new ArrayFieldType('ProductIDHeader');
		$fields['Quantity'] = new FieldType('int');
		$fields['Treatment'] = new RestrictedFieldType('string', array(
			'Essential',
			'NonEssential'
		));
		$fields['Instructions'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		$fields['WasModified'] = new FieldType('boolean');
		$fields['NeedsRemoval'] = new FieldType('boolean');
		return $fields;
	}
}
