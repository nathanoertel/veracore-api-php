<?php
namespace VeraCoreAPI\model;

class Job extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['PROJCT_Seqid'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['Instructions'] = new FieldType('string');
		$fields['OrderDate'] = new FieldType('dateTime');
		$fields['ReadyDate'] = new FieldType('dateTime');
		$fields['ReleaseSooner'] = new FieldType('short');
		$fields['ReadyStatus'] = new FieldType('short');
		$fields['JobStatus'] = new FieldType('string');
		$fields['WorkStatus'] = new FieldType('string');
		$fields['MailDate'] = new FieldType('dateTime');
		return $fields;
	}
}
