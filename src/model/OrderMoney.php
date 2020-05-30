<?php
namespace VeraCoreAPI\model;

class OrderMoney extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PriceClass'] = new FieldType('PriceClass');
		$fields['ShippingHandlingCharge'] = new FieldType('decimal');
		$fields['RushHandlingCharge'] = new FieldType('decimal');
		$fields['NoChargeType'] = new FieldType('NoChargeType');
		$fields['DiscountAmount'] = new FieldType('decimal');
		$fields['DiscountPercent'] = new FieldType('float');
		$fields['DiscountCode'] = new FieldType('DiscountCode');
		$fields['Coupon'] = new FieldType('Coupon');
		$fields['SpecialHandlingCharge'] = new FieldType('decimal');
		$fields['CreditAmount'] = new FieldType('decimal');
		$fields['GiftCertificate'] = new FieldType('GiftCertificate');
		$fields['GiftCertificateAmount'] = new FieldType('decimal');
		$fields['TaxPercent'] = new FieldType('decimal');
		$fields['NoChargeAmount'] = new FieldType('decimal');
		$fields['TaxAmount'] = new FieldType('decimal');
		return $fields;
	}
}
