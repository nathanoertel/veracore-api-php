<?php
namespace VeraCoreAPI\model;

class CategoryGroupDetail extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['CategoryGroup'] = new FieldType('CategoryGroup');
		$fields['SortGroup'] = new FieldType('OfferSortGroupXRef');
		$fields['AccessFlag'] = new RestrictedFieldType('string', array(
			'No',
			'Yes',
			'Restricted'
		));
		return $fields;
	}
}
