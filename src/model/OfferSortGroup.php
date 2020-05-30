<?php
namespace VeraCoreAPI\model;

class OfferSortGroup extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Description'] = new FieldType('string');
		$fields['Level'] = new FieldType('OfferSortLevel');
		$fields['SortKey'] = new FieldType('string');
		$fields['ImagePath'] = new FieldType('string');
		$fields['ImageLocal'] = new FieldType('boolean');
		$fields['HeaderPath'] = new FieldType('string');
		$fields['HeaderLocal'] = new FieldType('boolean');
		$fields['HeaderText'] = new FieldType('string');
		$fields['FooterPath'] = new FieldType('string');
		$fields['FooterLocal'] = new FieldType('boolean');
		$fields['FooterText'] = new FieldType('string');
		$fields['SuppressImgText'] = new FieldType('boolean');
		$fields['PrefixHTML'] = new FieldType('string');
		$fields['SuffixHTML'] = new FieldType('string');
		$fields['ClassicViewListType'] = new FieldType('int');
		$fields['ShoppingCartViewListType'] = new FieldType('int');
		return $fields;
	}
}
