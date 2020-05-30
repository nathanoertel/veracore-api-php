<?php
namespace VeraCoreAPI\model;

class SourceDetail extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Issue'] = new FieldType('string');
		return $fields;
	}
}
