<?php
namespace VeraCoreAPI\model;

class ProductBillingContainers extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SkidQuantity'] = new FieldType('int');
		$fields['MasterCartonQuantity'] = new FieldType('int');
		$fields['InnerCartonQuantity'] = new FieldType('int');
		$fields['OuterSleeveQuantity'] = new FieldType('int');
		$fields['InnerSleeveQuantity'] = new FieldType('int');
		return $fields;
	}
}
