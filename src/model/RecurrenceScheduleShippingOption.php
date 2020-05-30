<?php
namespace VeraCoreAPI\model;

class RecurrenceScheduleShippingOption extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['RecurrenceSchedules'] = new FieldType('RecurrenceSchedules');
		$fields['ShippingOption'] = new FieldType('ShippingOption');
		return $fields;
	}
}
