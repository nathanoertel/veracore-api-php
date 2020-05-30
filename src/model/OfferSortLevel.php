<?php
namespace VeraCoreAPI\model;

class OfferSortLevel extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Description'] = new FieldType('string');
		return $fields;
	}
}
