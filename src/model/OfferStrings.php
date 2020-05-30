<?php
namespace VeraCoreAPI\model;

class OfferStrings extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['InStock'] = new FieldType('string');
		$fields['OutOfStock'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['AdditionalSearchText'] = new FieldType('string');
		$fields['CommentsText'] = new FieldType('string');
		$fields['Version'] = new FieldType('string');
		return $fields;
	}
}
