<?php
namespace VeraCoreAPI\model;

class PriceBreaks extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PricingStructure'] = new FieldType('PricingStructure');
		$fields['QuantityBreakType'] = new RestrictedFieldType('string', array(
			'PerOffer',
			'PerLineItem',
			'PriceFamily'
		));
		$fields['Breaks'] = new ArrayFieldType('PricingDetail');
		return $fields;
	}
}
