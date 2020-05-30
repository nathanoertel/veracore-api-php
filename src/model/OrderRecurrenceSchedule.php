<?php
namespace VeraCoreAPI\model;

class OrderRecurrenceSchedule extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['RecurrenceSchedules'] = new FieldType('RecurrenceSchedules');
		$fields['RecurrenceOfferFlag'] = new FieldType('boolean');
		$fields['RecurrenceShippingOption'] = new FieldType('ShippingOption');
		$fields['RecurrenceSpecialHandlingCharge'] = new FieldType('decimal');
		$fields['NumberRecurrence'] = new FieldType('int');
		return $fields;
	}
}
