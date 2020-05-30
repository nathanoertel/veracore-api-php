<?php
namespace VeraCoreAPI\model;

class OfferImage extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['MicroImagePath'] = new FieldType('string');
		$fields['ThumbnailImagePath'] = new FieldType('string');
		$fields['FullImagePath'] = new FieldType('string');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
