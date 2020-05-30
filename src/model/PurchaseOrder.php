<?php
namespace VeraCoreAPI\model;

class PurchaseOrder extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ReferenceNumber'] = new FieldType('string');
		$fields['Owner'] = new FieldType('Owner');
		$fields['PONumber'] = new FieldType('string');
		$fields['DateRecorded'] = new FieldType('dateTime');
		$fields['ApproximateArrivalDate'] = new FieldType('dateTime');
		$fields['FromWhere'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['Job'] = new FieldType('int');
		$fields['Project'] = new FieldType('int');
		$fields['JobPackage'] = new FieldType('int');
		$fields['Vendor'] = new FieldType('Vendor');
		$fields['System'] = new FieldType('PMSystem');
		$fields['ShipTo'] = new FieldType('string');
		$fields['Address1'] = new FieldType('string');
		$fields['Address2'] = new FieldType('string');
		$fields['Address3'] = new FieldType('string');
		$fields['City'] = new FieldType('string');
		$fields['State'] = new FieldType('string');
		$fields['PostalCode'] = new FieldType('string');
		$fields['Country'] = new FieldType('string');
		$fields['UTCDateRecorded'] = new FieldType('dateTime');
		$fields['Products'] = new ArrayFieldType('PurchaseOrderProduct');
		return $fields;
	}
}
