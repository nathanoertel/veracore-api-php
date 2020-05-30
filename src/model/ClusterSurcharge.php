<?php
namespace VeraCoreAPI\model;

class ClusterSurcharge extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Offer'] = new FieldType('Offer');
		$fields['Product'] = new FieldType('Product');
		$fields['Surcharge'] = new FieldType('decimal');
		$fields['SurchargeText'] = new FieldType('string');
		return $fields;
	}
}
