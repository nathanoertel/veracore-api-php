<?php
namespace VeraCoreAPI\model;

class DropShipSupplier extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Name'] = new FieldType('string');
		$fields['AccountNo'] = new FieldType('string');
		$fields['Reference'] = new FieldType('string');
		$fields['CommunicationMethod'] = new FieldType('int');
		$fields['ShippingMethod'] = new FieldType('int');
		$fields['XMLLink'] = new FieldType('string');
		$fields['DirectoryName'] = new FieldType('string');
		$fields['PhysicalDirectory'] = new FieldType('string');
		$fields['EmailAddress'] = new FieldType('string');
		$fields['CCEmailAddress'] = new FieldType('string');
		$fields['BCCEmailAddress'] = new FieldType('string');
		$fields['Address1'] = new FieldType('string');
		$fields['Address2'] = new FieldType('string');
		$fields['Address3'] = new FieldType('string');
		$fields['City'] = new FieldType('string');
		$fields['State'] = new FieldType('string');
		$fields['PostalCode'] = new FieldType('string');
		$fields['CountryCode'] = new FieldType('string');
		$fields['Phone'] = new FieldType('string');
		$fields['UpsShipperNo'] = new FieldType('string');
		$fields['UpsPickUpCode'] = new FieldType('string');
		$fields['UPSTareWeight'] = new FieldType('int');
		$fields['UPSPackageType'] = new FieldType('string');
		$fields['UPSRateType'] = new FieldType('unsignedByte');
		$fields['FEDEXAccountNumber'] = new FieldType('string');
		$fields['FEDEXMeterNumber'] = new FieldType('string');
		$fields['FEDEXServiceType'] = new FieldType('string');
		$fields['FEDEXPackagingType'] = new FieldType('string');
		$fields['FEDEXTareWeight'] = new FieldType('int');
		$fields['TimeZone'] = new FieldType('int');
		$fields['FEDEXSmartPostHubID'] = new FieldType('string');
		$fields['DefaultDropShipImportDir'] = new FieldType('string');
		return $fields;
	}
}
