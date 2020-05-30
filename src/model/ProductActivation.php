<?php
namespace VeraCoreAPI\model;

class ProductActivation extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['OMSSystem'] = new FieldType('OMSSystem');
		$fields['Cluster'] = new FieldType('ProductCluster');
		$fields['Active'] = new FieldType('boolean');
		$fields['Discontinued'] = new FieldType('boolean');
		$fields['ReplacementProduct'] = new FieldType('Product');
		$fields['RecallSO'] = new FieldType('boolean');
		$fields['OfferTreat'] = new FieldType('boolean');
		$fields['KitTreat'] = new FieldType('boolean');
		$fields['BundleQuantity'] = new FieldType('int');
		$fields['PackCharge'] = new FieldType('decimal');
		return $fields;
	}
}
