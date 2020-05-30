<?php
namespace VeraCoreAPI\model;

class OfferCategory extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Category'] = new FieldType('CustomCategory');
		return $fields;
	}
}
