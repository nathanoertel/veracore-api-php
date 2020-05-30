<?php
namespace VeraCoreAPI\model;

class OfferSortGroupXRef extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['SortGroup'] = new FieldType('OfferSortGroup');
		return $fields;
	}
}
