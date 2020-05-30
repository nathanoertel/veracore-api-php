<?php
namespace VeraCoreAPI\model;

class ProductAvailabilities extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Warehouses'] = new ArrayFieldType('WarehouseLevels');
		return $fields;
	}
}
