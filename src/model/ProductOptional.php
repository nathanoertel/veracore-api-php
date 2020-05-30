<?php
namespace VeraCoreAPI\model;

class ProductOptional extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['CountryOrigin'] = new FieldType('string');
		$fields['TariffCode'] = new FieldType('string');
		$fields['CustomsValue'] = new FieldType('decimal');
		$fields['Value'] = new FieldType('decimal');
		$fields['InsuranceValue'] = new FieldType('decimal');
		$fields['DefaultPrice'] = new FieldType('decimal');
		$fields['DefaultPriceType'] = new RestrictedFieldType('string', array(
			'Each',
			'PerPack'
		));
		$fields['ReturnTreatment'] = new RestrictedFieldType('string', array(
			'CaseByCase',
			'NotEligibleForReuse',
			'MustBeEvaluated'
		));
		$fields['SignatureRequired'] = new FieldType('SignatureRequired');
		$fields['CommodityDescription'] = new FieldType('string');
		$fields['NMFCNo'] = new FieldType('string');
		$fields['FreightClass'] = new FieldType('string');
		return $fields;
	}
}
