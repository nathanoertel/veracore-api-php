<?php
namespace VeraCoreAPI\model;

class ProductAcquisition extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['AcquisitionType'] = new RestrictedFieldType('string', array(
			'Unknown',
			'Make',
			'Buy',
			'Receive'
		));
		$fields['AcquisitionDate'] = new FieldType('dateTime');
		$fields['AcquisitionFrom'] = new FieldType('string');
		$fields['AcquisitionComments'] = new FieldType('string');
		return $fields;
	}
}
