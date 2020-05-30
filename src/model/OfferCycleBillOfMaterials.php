<?php
namespace VeraCoreAPI\model;

class OfferCycleBillOfMaterials extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Sequence'] = new FieldType('int');
		$fields['CycleDate'] = new FieldType('dateTime');
		$fields['CBOffer'] = new FieldType('OfferID');
		return $fields;
	}
}
