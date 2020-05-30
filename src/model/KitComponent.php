<?php
namespace VeraCoreAPI\model;

class KitComponent extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Product'] = new FieldType('Product');
		$fields['Quantity'] = new FieldType('int');
		$fields['Instructions'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		$fields['Importance'] = new RestrictedFieldType('string', array(
			'Essential',
			'NonEssential'
		));
		return $fields;
	}
}
