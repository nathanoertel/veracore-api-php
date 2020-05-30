<?php
namespace VeraCoreAPI\model;

class OfferID extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Header'] = new FieldType('OfferIDHeader');
		return $fields;
	}
}
