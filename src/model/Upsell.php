<?php
namespace VeraCoreAPI\model;

class Upsell extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['UpsellOffer'] = new FieldType('OfferID');
		$fields['ShowOnOfferDetail'] = new FieldType('boolean');
		$fields['OfferDetailComments'] = new FieldType('string');
		$fields['ShowOnSplash'] = new FieldType('boolean');
		$fields['SplashComments'] = new FieldType('string');
		$fields['NeedsRemoval'] = new FieldType('boolean');
		return $fields;
	}
}
