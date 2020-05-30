<?php
namespace VeraCoreAPI\model;

class ProductReturns extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['OrderId'] = new FieldType('string');
		$fields['PickSlip'] = new FieldType('string');
		$fields['DateOrdered'] = new FieldType('dateTime');
		$fields['FirstShip'] = new FieldType('dateTime');
		$fields['DateReturned'] = new FieldType('dateTime');
		$fields['ProductId'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['ProductVersion'] = new FieldType('string');
		$fields['Size'] = new FieldType('string');
		$fields['Color'] = new FieldType('string');
		$fields['OrderReasonCode'] = new FieldType('string');
		$fields['ProductReasonCode'] = new FieldType('string');
		$fields['ShipQty'] = new FieldType('int');
		$fields['ReturnQty'] = new FieldType('int');
		$fields['ProductReturnComment'] = new FieldType('string');
		$fields['OrderReturnComment'] = new FieldType('string');
		$fields['ReceivedAs'] = new FieldType('string');
		$fields['PackQuantity'] = new FieldType('int');
		$fields['PackDescription'] = new FieldType('string');
		$fields['OrderedByCompany'] = new FieldType('string');
		$fields['OrderedByName'] = new FieldType('string');
		$fields['OrderedByTitle'] = new FieldType('string');
		$fields['OrderedByAddress1'] = new FieldType('string');
		$fields['OrderedByAddress2'] = new FieldType('string');
		$fields['OrderedByAddress3'] = new FieldType('string');
		$fields['OrderedByCity'] = new FieldType('string');
		$fields['OrderedByState'] = new FieldType('string');
		$fields['OrderedByZipcode'] = new FieldType('string');
		$fields['OrderedByCountry'] = new FieldType('string');
		$fields['ShipToCompany'] = new FieldType('string');
		$fields['ShipToName'] = new FieldType('string');
		$fields['ShipToAddress1'] = new FieldType('string');
		$fields['ShipToAddress2'] = new FieldType('string');
		$fields['ShipToAddress3'] = new FieldType('string');
		$fields['ShipToCity'] = new FieldType('string');
		$fields['ShipToState'] = new FieldType('string');
		$fields['ShipToZipcode'] = new FieldType('string');
		$fields['ShipToCountry'] = new FieldType('string');
		$fields['OwnerID'] = new FieldType('int');
		$fields['ReferenceNumber'] = new FieldType('string');
		$fields['Disposition'] = new FieldType('string');
		$fields['EvaluationDate'] = new FieldType('dateTime');
		$fields['EvaluationComments'] = new FieldType('string');
		return $fields;
	}
}
