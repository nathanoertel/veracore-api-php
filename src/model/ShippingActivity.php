<?php
namespace VeraCoreAPI\model;

class ShippingActivity extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ShipDate'] = new FieldType('string');
		$fields['OrderId'] = new FieldType('string');
		$fields['PickPackId'] = new FieldType('string');
		$fields['Type'] = new FieldType('string');
		$fields['LinesShipped'] = new FieldType('int');
		$fields['PiecesShipped'] = new FieldType('int');
		$fields['NumberofPackages'] = new FieldType('int');
		$fields['TotalWeight'] = new FieldType('double');
		$fields['PublishedFreight'] = new FieldType('decimal');
		$fields['ActualFreight'] = new FieldType('decimal');
		$fields['MarkedUpFreight'] = new FieldType('decimal');
		$fields['ShippingOrderType'] = new FieldType('string');
		return $fields;
	}
}
