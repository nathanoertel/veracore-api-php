<?php
namespace VeraCoreAPI\model;

class OfferInfo extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['BillOfMaterials'] = new RestrictedFieldType('string', array(
			'ProductList',
			'CustomAssembly',
			'DropShip',
			'EDelivery'
		));
		$fields['CustomAssembly'] = new FieldType('boolean');
		$fields['DropShip'] = new RestrictedFieldType('string', array(
			'DropShip',
			'EDelivery'
		));
		$fields['RevenueCenter'] = new FieldType('RevenueCenter');
		$fields['ProductImages'] = new FieldType('boolean');
		return $fields;
	}
}
