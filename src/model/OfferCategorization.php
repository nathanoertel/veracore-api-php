<?php
namespace VeraCoreAPI\model;

class OfferCategorization extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['FeaturedOnMain'] = new FieldType('boolean');
		$fields['MainFeatureEndDate'] = new FieldType('dateTime');
		$fields['SortGroupings'] = new ArrayFieldType('ArrayOfOfferSort');
		$fields['CustomCategories'] = new ArrayFieldType('OfferCategory');
		return $fields;
	}
}
