<?php
namespace VeraCoreAPI\model;

class CustomizationProfile extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['RemoteOnly'] = new FieldType('boolean');
		$fields['ID'] = new FieldType('string');
		$fields['RemoteSystem'] = new FieldType('RemoteSystem');
		$fields['RCFld1'] = new FieldType('string');
		$fields['RCFld2'] = new FieldType('string');
		$fields['RCFld3'] = new FieldType('string');
		$fields['Routing'] = new FieldType('string');
		$fields['OrderButtonText'] = new FieldType('string');
		$fields['RemoteSystemPricing'] = new RestrictedFieldType('string', array(
			'OfferPricing',
			'RemotePriceAsUnitPrice',
			'RemotePriceAsFlatPrice'
		));
		$fields['CustomizationCode'] = new FieldType('CustomizationCode');
		$fields['PreviewButton'] = new FieldType('boolean');
		$fields['PreviewText'] = new FieldType('string');
		$fields['PreviewLink'] = new FieldType('string');
		$fields['AllowOrderQuantityChange'] = new FieldType('boolean');
		$fields['RemoteLink'] = new FieldType('string');
		return $fields;
	}
}
