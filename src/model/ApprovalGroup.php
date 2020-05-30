<?php
namespace VeraCoreAPI\model;

class ApprovalGroup extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['IsFinalApproval'] = new FieldType('boolean');
		$fields['Sequence'] = new FieldType('int');
		return $fields;
	}
}
