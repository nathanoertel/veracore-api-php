<?php
namespace VeraCoreAPI\model;

class OfferCustomization extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['RemoteOnly'] = new FieldType('boolean');
		$fields['LinkToRemote'] = new FieldType('string');
		$fields['OrderButtonText'] = new FieldType('string');
		$fields['AllowOrderQuantityChange'] = new FieldType('boolean');
		$fields['RemotePriceTreatment'] = new RestrictedFieldType('string', array(
			'OfferPricing',
			'RemotePriceAsUnitPrice',
			'RemotePriceAsFlatPrice'
		));
		$fields['CustomizationCode'] = new FieldType('CustomizationCode');
		$fields['PreviewButton'] = new FieldType('boolean');
		$fields['PreviewText'] = new FieldType('string');
		$fields['PreviewLink'] = new FieldType('string');
		$fields['PFAllowReorder'] = new FieldType('boolean');
		$fields['PFReorderExpDays'] = new FieldType('int');
		$fields['ReorderBtnText'] = new FieldType('string');
		$fields['ReorderLinkText'] = new FieldType('string');
		$fields['PrevOrdersText'] = new FieldType('string');
		$fields['RemoteSystemParameter1'] = new FieldType('string');
		$fields['RemoteSystemParameter2'] = new FieldType('string');
		$fields['RemoteSystemParameter3'] = new FieldType('string');
		$fields['RemoteSystem'] = new FieldType('RemoteSystem');
		$fields['Routing'] = new FieldType('string');
		$fields['CustomizationProfile'] = new FieldType('CustomizationProfile');
		return $fields;
	}
}
