<?php
namespace VeraCoreAPI\model;

class PMSystem extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ID'] = new FieldType('string');
		$fields['OverrideAllowHistoricalConnection'] = new FieldType('boolean');
		return $fields;
	}
}
