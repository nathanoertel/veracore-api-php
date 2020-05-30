<?php
namespace VeraCoreAPI\model;

class AllowedOfferQuantity extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Quantity'] = new FieldType('int');
		$fields['Sequence'] = new FieldType('unsignedByte');
		return $fields;
	}
}
