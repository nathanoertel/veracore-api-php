<?php
namespace VeraCoreAPI\model;

class ApprovalGroupUser extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ApprovalGroup'] = new FieldType('ApprovalGroup');
		return $fields;
	}
}
