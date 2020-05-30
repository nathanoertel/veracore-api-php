<?php
namespace VeraCoreAPI\model;

class ProductValuation extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Valued'] = new FieldType('boolean');
		$fields['ReceiptValution'] = new RestrictedFieldType('string', array(
			'Manual',
			'Automatic'
		));
		return $fields;
	}
}
