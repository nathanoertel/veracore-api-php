<?php
namespace VeraCoreAPI\model;

class RecurrenceSchedules extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['Definition'] = new FieldType('string');
		$fields['DefinitionDetail'] = new FieldType('string');
		$fields['Schedule'] = new RestrictedFieldType('string', array(
			'EveryXDays',
			'EveryXWeeks',
			'EveryXMonths'
		));
		$fields['ScheduleCount'] = new FieldType('int');
		$fields['Cycle'] = new RestrictedFieldType('string', array(
			'Rolling',
			'Custom'
		));
		$fields['StartCycleDate'] = new FieldType('dateTime');
		$fields['DaysToJoin'] = new FieldType('int');
		$fields['MonthlyRecurrenceType'] = new RestrictedFieldType('string', array(
			'DayOfMonth',
			'WeekOfMonthAndDayOfWeek'
		));
		$fields['MinimumRecurrences'] = new FieldType('int');
		$fields['MaximumRecurrences'] = new FieldType('int');
		$fields['RecurrenceIncrement'] = new FieldType('int');
		$fields['AllowInfiniteRecurrence'] = new FieldType('boolean');
		$fields['InfiniteTag'] = new FieldType('string');
		$fields['DurationTag'] = new FieldType('string');
		$fields['ExpirationDate'] = new FieldType('dateTime');
		$fields['NextCycleDate'] = new FieldType('dateTime');
		$fields['HasValidCycleDate'] = new FieldType('boolean');
		$fields['AnyOffer'] = new FieldType('boolean');
		$fields['RecurrenceScheduleShippingOptions'] = new ArrayFieldType('RecurrenceScheduleShippingOption');
		return $fields;
	}
}
