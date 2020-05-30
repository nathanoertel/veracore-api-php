<?php
namespace VeraCoreAPI\model;

class SupplierPart extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Supplier'] = new FieldType('DropShipSupplier');
		$fields['StartDate'] = new FieldType('dateTime');
		$fields['EndDate'] = new FieldType('dateTime');
		$fields['PartNumber'] = new FieldType('string');
		return $fields;
	}
}
