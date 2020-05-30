<?php
namespace VeraCoreAPI\model;

class OfferIDHeader extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		return $fields;
	}
}
