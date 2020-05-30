<?php
namespace VeraCoreAPI\model;

class ExpectedArrivalComponent extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ExpectedArrival'] = new FieldType('ExpectedArrival');
		$fields['ProductVersion'] = new FieldType('ProductVersion');
		$fields['Quantity'] = new FieldType('int');
		$fields['ReceiptDate'] = new FieldType('dateTime');
		$fields['ReceiptQuantity'] = new FieldType('int');
		$fields['IsComplete'] = new FieldType('boolean');
		$fields['ASNHDRSeqID'] = new FieldType('int');
		$fields['IsCancel'] = new FieldType('boolean');
		return $fields;
	}
}
