<?php
namespace VeraCoreAPI\model;

class OfferType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['OfferId'] = new FieldType('string');
		$fields['OfferDesc'] = new FieldType('string');
		$fields['OfferDocID'] = new FieldType('string');
		$fields['OrderQty'] = new FieldType('int');
		$fields['UnitPrice'] = new FieldType('double');
		return $fields;
	}
}
