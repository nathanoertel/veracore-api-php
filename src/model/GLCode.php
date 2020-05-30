<?php
namespace VeraCoreAPI\model;

class GLCode extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['Type'] = new RestrictedFieldType('string', array(
			'Sales',
			'Cash',
			'OrderDiscounts',
			'PaymentDiscounts',
			'AR',
			'Tax',
			'Credits',
			'ShippingHandling',
			'GiftCertificatesRedeemed',
			'RushCharge',
			'OfferShippingHandling',
			'PackageCharge',
			'BillBack',
			'SpecialHandling',
			'NoChargeDiscounts',
			'OverUnderPayments',
			'OrderReturns'
		));
		$fields['Removable'] = new FieldType('boolean');
		$fields['NeedsRemoval'] = new FieldType('boolean');
		$fields['WasModified'] = new FieldType('boolean');
		return $fields;
	}
}
