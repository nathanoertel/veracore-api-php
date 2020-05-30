<?php
namespace VeraCoreAPI\model;

class FreightAccount extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['FreightCarrier'] = new FieldType('FreightCarrier');
		$fields['Person'] = new FieldType('Person');
		$fields['ThirdAcctNo'] = new FieldType('string');
		$fields['NonResident'] = new FieldType('boolean');
		return $fields;
	}
}
