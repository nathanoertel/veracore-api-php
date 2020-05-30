<?php
namespace VeraCoreAPI\model;

class OrderStatusType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Unapproved'] = new FieldType('boolean');
		$fields['Unprocessed'] = new FieldType('boolean');
		$fields['Accepted'] = new FieldType('boolean');
		$fields['Hold'] = new FieldType('boolean');
		$fields['DeniedCredit'] = new FieldType('boolean');
		$fields['Processed'] = new FieldType('boolean');
		$fields['Pending'] = new FieldType('boolean');
		$fields['Picked'] = new FieldType('boolean');
		$fields['Backordered'] = new FieldType('boolean');
		$fields['Shipped'] = new FieldType('boolean');
		$fields['Canceled'] = new FieldType('boolean');
		$fields['Complete'] = new FieldType('boolean');
		return $fields;
	}
}
