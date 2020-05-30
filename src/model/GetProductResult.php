<?php
namespace VeraCoreAPI\model;

class GetProductResult extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['product'] = new FieldType('Product');
		$fields['offer'] = new FieldType('Offer');
		return $fields;
	}
}
