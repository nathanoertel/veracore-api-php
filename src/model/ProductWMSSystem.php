<?php
namespace VeraCoreAPI\model;

class ProductWMSSystem extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['System'] = new FieldType('PMSystem');
		$fields['ReorderPoint'] = new FieldType('int');
		$fields['ReorderAmount'] = new FieldType('int');
		$fields['ReorderComments'] = new FieldType('string');
		$fields['CountFrequency'] = new RestrictedFieldType('string', array(
			'Never',
			'OnDemand',
			'Daily',
			'Weekly',
			'BiWeekly',
			'Monthly',
			'BiMonthly',
			'Quarterly',
			'SemiAnnually',
			'Annually'
		));
		$fields['Reserved'] = new FieldType('int');
		$fields['Tie'] = new FieldType('int');
		$fields['High'] = new FieldType('int');
		$fields['Active'] = new FieldType('boolean');
		$fields['Deleted'] = new FieldType('boolean');
		$fields['IsDefault'] = new FieldType('boolean');
		return $fields;
	}
}
