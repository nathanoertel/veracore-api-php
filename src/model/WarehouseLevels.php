<?php
namespace VeraCoreAPI\model;

class WarehouseLevels extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Warehouse'] = new FieldType('PMSystem');
		$fields['PartNumber'] = new FieldType('string');
		$fields['PartDescription'] = new FieldType('string');
		$fields['Size'] = new FieldType('string');
		$fields['Color'] = new FieldType('string');
		$fields['ProductType'] = new RestrictedFieldType('string', array(
			'Product',
			'Kit',
			'POD',
			'MOD',
			'EPOD'
		));
		$fields['OnHand'] = new FieldType('int');
		$fields['Reserved'] = new FieldType('int');
		$fields['Marked'] = new FieldType('int');
		$fields['Backordered'] = new FieldType('int');
		$fields['Needed'] = new FieldType('int');
		$fields['Unavailable'] = new FieldType('int');
		$fields['Expected'] = new FieldType('int');
		$fields['OnOrder'] = new FieldType('int');
		$fields['Available'] = new FieldType('int');
		$fields['TotalReserved'] = new FieldType('int');
		return $fields;
	}
}
