<?php
namespace VeraCoreAPI\model;

class OfferSort extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['BranchCount'] = new FieldType('int');
		$fields['SortGroup'] = new FieldType('OfferSortGroup');
		$fields['SortGroupXRef'] = new FieldType('OfferSortGroupXRef');
		$fields['Feature'] = new FieldType('boolean');
		$fields['FeatureEndDate'] = new FieldType('dateTime');
		return $fields;
	}
}
