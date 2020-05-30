<?php
namespace VeraCoreAPI\model;

class OrderHeadType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['OrderId'] = new FieldType('string');
		$fields['EntryDate'] = new FieldType('dateTime');
		$fields['UploadDate'] = new FieldType('dateTime');
		$fields['View'] = new FieldType('string');
		$fields['Stream'] = new FieldType('string');
		$fields['ReferenceNo'] = new FieldType('string');
		$fields['CampaignId'] = new FieldType('string');
		$fields['PoNum'] = new FieldType('string');
		$fields['ResponseMethod'] = new FieldType('string');
		$fields['Source'] = new FieldType('string');
		$fields['SourceDetail'] = new FieldType('string');
		$fields['OrderComment'] = new FieldType('string');
		$fields['Carrier'] = new FieldType('string');
		$fields['Service'] = new FieldType('string');
		$fields['ShipComment'] = new FieldType('string');
		$fields['NeedBy'] = new FieldType('string');
		$fields['RushFlag'] = new FieldType('string');
		$fields['Status'] = new FieldType('OrderStatusType');
		$fields['PaymentType'] = new FieldType('string');
		$fields['PriceClass'] = new FieldType('string');
		$fields['CCNumber'] = new FieldType('string');
		$fields['ExpirationDate'] = new FieldType('string');
		$fields['ShipHandCharge'] = new FieldType('double');
		$fields['AdditionalCharge'] = new FieldType('double');
		$fields['DiscountPct'] = new FieldType('double');
		$fields['TaxPct'] = new FieldType('double');
		$fields['SpecialHandCharge'] = new FieldType('double');
		$fields['ShippingOption'] = new FieldType('string');
		$fields['ShippingOptionCharge'] = new FieldType('double');
		return $fields;
	}
}
