<?php
namespace VeraCoreAPI\model;

class OfferPricing extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['DefaultPrice'] = new FieldType('decimal');
		$fields['PriceType'] = new RestrictedFieldType('string', array(
			'Each',
			'PerThousand'
		));
		$fields['ShippingAndHandlingCharge'] = new FieldType('decimal');
		$fields['ShippingAndHandlingChargeType'] = new RestrictedFieldType('string', array(
			'Each',
			'PerLine',
			'PerThousand'
		));
		$fields['ChargePerPdfDownload'] = new FieldType('decimal');
		$fields['ChargePerPptDownload'] = new FieldType('decimal');
		$fields['Taxable'] = new FieldType('boolean');
		$fields['ClusterSurcharge'] = new FieldType('boolean');
		$fields['PriceFamily'] = new FieldType('PriceFamily');
		$fields['PriceBreaks'] = new FieldType('PriceBreaks');
		return $fields;
	}
}
