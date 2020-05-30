<?php
namespace VeraCoreAPI\model;

class ProductCluster extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['PartNumber'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['IsProductList'] = new FieldType('boolean');
		$fields['OrderingMode'] = new RestrictedFieldType('string', array(
			'DropDown',
			'TableListing',
			'IDAndDescriptionTableListing'
		));
		$fields['DropDownText'] = new FieldType('string');
		$fields['ProductIDHeader'] = new FieldType('string');
		return $fields;
	}
}
