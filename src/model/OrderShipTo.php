<?php
namespace VeraCoreAPI\model;

class OrderShipTo extends OrderMailer {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Flag'] = new RestrictedFieldType('string', array(
			'Other',
			'OrderedBy'
		));
		$fields['Key'] = new FieldType('string');
		$fields['NeededBy'] = new FieldType('string');
		$fields['ReleaseDate'] = new FieldType('dateTime');
		$fields['Rush'] = new FieldType('boolean');
		$fields['RushHandling'] = new FieldType('decimal');
		$fields['Comments'] = new FieldType('string');
		$fields['FreightCarrier'] = new FieldType('FreightCarrier');
		$fields['FreightService'] = new FieldType('FreightService');
		$fields['ThirdPartyType'] = new FieldType('int');
		$fields['ThirdPartyAccountNumber'] = new FieldType('string');
		$fields['FreightCode'] = new FieldType('string');
		$fields['FreightCodeDescription'] = new FieldType('string');
		$fields['SpecialHandling'] = new FieldType('ShippingOption');
		$fields['SpecialHandlingCharge'] = new FieldType('decimal');
		$fields['ShippingHandlingCharge'] = new FieldType('decimal');
		$fields['FullName'] = new FieldType('string');
		$fields['FullNameWithSuffix'] = new FieldType('string');
		$fields['CityStateZip'] = new FieldType('string');
		$fields['CityStateZipCountry'] = new FieldType('string');
		$fields['CompoundAddress'] = new FieldType('string');
		$fields['PickPacks'] = new ArrayFieldType('PickPack');
		$fields['ShippingHandlingTaxAmount'] = new FieldType('decimal');
		$fields['ShippingHandlingTaxPercent'] = new FieldType('decimal');
		return $fields;
	}
}
