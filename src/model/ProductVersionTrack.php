<?php
namespace VeraCoreAPI\model;

class ProductVersionTrack extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['VersionTrack'] = new FieldType('boolean');
		$fields['VersionSequence'] = new RestrictedFieldType('string', array(
			'FirstAvailable',
			'Manual'
		));
		$fields['InactiveVersionDays'] = new FieldType('int');
		return $fields;
	}
}
