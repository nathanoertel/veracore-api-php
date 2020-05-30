<?php
namespace VeraCoreAPI\model;

class ResponseMedia extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Description'] = new FieldType('string');
		return $fields;
	}
}
