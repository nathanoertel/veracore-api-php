<?php
namespace VeraCoreAPI\model;

class OfferRecurrence extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Recurrence'] = new RestrictedFieldType('string', array(
			'None',
			'Automatic',
			'ListOfSchedules'
		));
		$fields['RecurrenceSchedules'] = new FieldType('RecurrenceSchedules');
		$fields['NumberOfRecurrences'] = new FieldType('int');
		$fields['RecurrenceBillOfMaterialsType'] = new RestrictedFieldType('string', array(
			'HardBOM',
			'RollingBOM',
			'BOMPerCycle'
		));
		$fields['RecurrenceStartDate'] = new FieldType('dateTime');
		$fields['RecurrenceNone'] = new FieldType('string');
		$fields['AllowSuspension'] = new FieldType('boolean');
		$fields['MassRelease'] = new FieldType('boolean');
		$fields['HasOrders'] = new FieldType('boolean');
		return $fields;
	}
}
