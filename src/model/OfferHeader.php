<?php
namespace VeraCoreAPI\model;

class OfferHeader extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['SortKey'] = new FieldType('string');
		$fields['DeletedDateTime'] = new FieldType('dateTime');
		return $fields;
	}
}
