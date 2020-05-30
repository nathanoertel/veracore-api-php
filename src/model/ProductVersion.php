<?php
namespace VeraCoreAPI\model;

class ProductVersion extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Product'] = new ArrayFieldType('ProductIDHeader');
		$fields['UID'] = new FieldType('string');
		$fields['Date'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['StartDate'] = new FieldType('dateTime');
		$fields['EndDate'] = new FieldType('dateTime');
		$fields['Weight'] = new FieldType('double');
		$fields['WeightType'] = new RestrictedFieldType('string', array(
			'Oz',
			'Lbs'
		));
		$fields['Version'] = new FieldType('string');
		$fields['Status'] = new FieldType('VersionStatus');
		$fields['Disposition'] = new FieldType('VersionDisposition');
		$fields['Order'] = new FieldType('int');
		$fields['HasWarehouseTransactions'] = new FieldType('boolean');
		return $fields;
	}
}
