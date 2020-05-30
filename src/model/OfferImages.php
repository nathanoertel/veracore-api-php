<?php
namespace VeraCoreAPI\model;

class OfferImages extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['LocalImages'] = new FieldType('boolean');
		$fields['FullImageText'] = new FieldType('string');
		$fields['Directory'] = new FieldType('string');
		$fields['ThumbnailFilename'] = new FieldType('string');
		$fields['FullImageFilename'] = new FieldType('string');
		$fields['MicroImages'] = new ArrayFieldType('OfferImage');
		$fields['RemovedImages'] = new ArrayFieldType('OfferImage');
		return $fields;
	}
}
