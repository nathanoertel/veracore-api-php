<?php
namespace VeraCoreAPI\model;

class OfferScheduleParameters extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['RecurrenceSchedules'] = new FieldType('RecurrenceSchedules');
		$fields['OverrideDescription'] = new FieldType('string');
		$fields['DurationType'] = new RestrictedFieldType('string', array(
			'Infinitely',
			'NumberOfCycles',
			'EndDate'
		));
		$fields['MinimumRecurrences'] = new FieldType('int');
		$fields['MaximumRecurrences'] = new FieldType('int');
		$fields['RecurrenceIncrement'] = new FieldType('int');
		$fields['LastCycleDate'] = new FieldType('dateTime');
		$fields['DiscountPercentage'] = new FieldType('decimal');
		$fields['DiscountText'] = new FieldType('string');
		return $fields;
	}
}
