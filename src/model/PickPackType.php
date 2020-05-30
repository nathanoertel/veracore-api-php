<?php
namespace VeraCoreAPI\model;

class PickPackType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PickSlipID'] = new FieldType('string');
		$fields['PickPackId'] = new FieldType('string');
		$fields['Status'] = new FieldType('string');
		$fields['DatePicked'] = new FieldType('dateTime');
		$fields['MerchAmt'] = new FieldType('double');
		$fields['ShipHandAmt'] = new FieldType('double');
		$fields['TaxAmt'] = new FieldType('double');
		$fields['DiscountAmt'] = new FieldType('double');
		$fields['HoldFlag'] = new FieldType('string');
		$fields['SpecialHandling'] = new FieldType('double');
		$fields['AdditionalCharge'] = new FieldType('double');
		$fields['PickPackProducts'] = new ArrayFieldType('PickPackProductType');
		$fields['Packages'] = new ArrayFieldType('PackagesType');
		return $fields;
	}
}
