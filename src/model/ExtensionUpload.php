<?php
namespace VeraCoreAPI\model;

class ExtensionUpload extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['VariableField'] = new FieldType('int');
		$fields['FileExtension'] = new FieldType('string');
		return $fields;
	}
}
