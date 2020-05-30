<?php
namespace VeraCoreAPI\model;

class PricingDetail extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PricingStructure'] = new FieldType('PricingStructure');
		$fields['PriceClass'] = new FieldType('PriceClass');
		$fields['Start'] = new FieldType('int');
		$fields['End'] = new FieldType('string');
		$fields['Price'] = new FieldType('decimal');
		return $fields;
	}
}
