<?php
namespace VeraCoreAPI\model;

class ShippingCharges extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PPSlip'] = new FieldType('string');
		$fields['OrderId'] = new FieldType('string');
		$fields['level1Name'] = new FieldType('string');
		$fields['level1Company'] = new FieldType('string');
		$fields['level2Name'] = new FieldType('string');
		$fields['level2Company'] = new FieldType('string');
		$fields['level3Name'] = new FieldType('string');
		$fields['level3Company'] = new FieldType('string');
		$fields['level4Name'] = new FieldType('string');
		$fields['level4Company'] = new FieldType('string');
		$fields['level5Name'] = new FieldType('string');
		$fields['level5Company'] = new FieldType('string');
		$fields['DateShipped'] = new FieldType('dateTime');
		$fields['FreightCarrier'] = new FieldType('string');
		$fields['FreightDescription'] = new FieldType('string');
		$fields['TrackingID'] = new FieldType('string');
		$fields['PackageType'] = new FieldType('string');
		$fields['PackageWeight'] = new FieldType('float');
		$fields['FreightCost'] = new FieldType('decimal');
		$fields['PickupNumber'] = new FieldType('string');
		$fields['OrderedBYFirstName'] = new FieldType('string');
		$fields['OrderedBYLastName'] = new FieldType('string');
		$fields['OrderedBYCompany'] = new FieldType('string');
		$fields['OrderedBYAddress1'] = new FieldType('string');
		$fields['OrderedBYAddress2'] = new FieldType('string');
		$fields['OrderedBYAddress3'] = new FieldType('string');
		$fields['OrderedBYCity'] = new FieldType('string');
		$fields['OrderedBYState'] = new FieldType('string');
		$fields['OrderedBYZipCode'] = new FieldType('string');
		$fields['OrderedBYCountry'] = new FieldType('string');
		$fields['OrderedBYPhone'] = new FieldType('string');
		$fields['OrderedBYFax'] = new FieldType('string');
		$fields['OrderedBYEmail'] = new FieldType('string');
		$fields['OrderedbyUID'] = new FieldType('string');
		$fields['ShippedToFirstName'] = new FieldType('string');
		$fields['ShippedToLastName'] = new FieldType('string');
		$fields['ShippedToCompany'] = new FieldType('string');
		$fields['ShippedToAddress1'] = new FieldType('string');
		$fields['ShippedToAddress2'] = new FieldType('string');
		$fields['ShippedToAddress3'] = new FieldType('string');
		$fields['ShippedToCity'] = new FieldType('string');
		$fields['ShippedToState'] = new FieldType('string');
		$fields['ShippedToZipCode'] = new FieldType('string');
		$fields['ShippedToCountry'] = new FieldType('string');
		$fields['ShippedToPhone'] = new FieldType('string');
		$fields['ShippedToFax'] = new FieldType('string');
		$fields['ShippedToEmail'] = new FieldType('string');
		$fields['ShippedToUID'] = new FieldType('string');
		$fields['Ref'] = new FieldType('string');
		$fields['Po'] = new FieldType('string');
		$fields['Source'] = new FieldType('int');
		$fields['SourceDescription'] = new FieldType('string');
		$fields['RspnmdNumber'] = new FieldType('int');
		$fields['Rspnmd'] = new FieldType('string');
		$fields['CstprjID'] = new FieldType('int');
		$fields['Cstprj'] = new FieldType('string');
		$fields['CatAccess'] = new FieldType('string');
		$fields['PackCost'] = new FieldType('decimal');
		$fields['OBYMailerClass'] = new FieldType('string');
		$fields['STOMailerClass'] = new FieldType('string');
		$fields['ShipHyperlink'] = new FieldType('string');
		$fields['ShippingOrderType'] = new FieldType('string');
		$fields['CarrierCode'] = new FieldType('string');
		$fields['FreightService'] = new FieldType('string');
		return $fields;
	}
}
