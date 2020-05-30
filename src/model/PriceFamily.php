<?php
namespace VeraCoreAPI\model;

class PriceFamily extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['AlertPercent'] = new FieldType('decimal');
		$fields['Text1'] = new FieldType('string');
		$fields['DataSelect1'] = new RestrictedFieldType('string', array(
			'NotUsed',
			'QuantityNeededForNextBreak',
			'UnitPriceAtNextBreak',
			'UnitPriceSavingsAtNextBreak'
		));
		$fields['Text2'] = new FieldType('string');
		$fields['DataSelect2'] = new RestrictedFieldType('string', array(
			'NotUsed',
			'QuantityNeededForNextBreak',
			'UnitPriceAtNextBreak',
			'UnitPriceSavingsAtNextBreak'
		));
		$fields['Text3'] = new FieldType('string');
		$fields['DataSelect3'] = new RestrictedFieldType('string', array(
			'NotUsed',
			'QuantityNeededForNextBreak',
			'UnitPriceAtNextBreak',
			'UnitPriceSavingsAtNextBreak'
		));
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
