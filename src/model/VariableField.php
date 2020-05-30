<?php
namespace VeraCoreAPI\model;

class VariableField extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['FieldName'] = new FieldType('string');
		$fields['UserDefinedChoice'] = new FieldType('UserDefinedChoice');
		$fields['UserDefinedChoiceName'] = new FieldType('string');
		$fields['ExtensionUploads'] = new ArrayFieldType('ExtensionUpload');
		return $fields;
	}
}
