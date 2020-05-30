<?php
namespace VeraCoreAPI\model;

class OMSSystem extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['System'] = new FieldType('PMSystem');
		return $fields;
	}
}
