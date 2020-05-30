<?php
namespace VeraCoreAPI\model;

class Product extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ParentSystem'] = new FieldType('PMSystem');
		$fields['Valuation'] = new FieldType('ProductValuation');
		$fields['Acquisition'] = new FieldType('ProductAcquisition');
		$fields['GiftCertificate'] = new FieldType('ProductGiftCertificate');
		$fields['VersionTrack'] = new FieldType('ProductVersionTrack');
		$fields['WarehouseSystems'] = new ArrayFieldType('ProductWMSSystem');
		$fields['SerialNumber'] = new FieldType('ProductSN');
		$fields['OptionalInfo'] = new FieldType('ProductOptional');
		$fields['BillFactors'] = new ArrayFieldType('ProductBillFactor');
		$fields['Header'] = new FieldType('ProductHeader');
		$fields['Sort'] = new FieldType('ProductSort');
		$fields['Characteristics'] = new FieldType('ProductCharacteristics');
		$fields['DefaultVersion'] = new FieldType('ProductVersion');
		$fields['DefaultKit'] = new FieldType('ProductKit');
		$fields['Versions'] = new ArrayFieldType('ProductVersion');
		$fields['MainSystemID'] = new FieldType('string');
		$fields['KitCompositions'] = new ArrayFieldType('ProductKit');
		$fields['Variables'] = new ArrayFieldType('ProductVariable');
		$fields['Activation'] = new ArrayFieldType('ProductActivation');
		$fields['RawMaterials'] = new ArrayFieldType('RawMaterial');
		$fields['OnOrder'] = new ArrayFieldType('OnOrder');
		$fields['UniversalProductCodes'] = new ArrayFieldType('UniversalProductCode');
		$fields['Deactivation'] = new ArrayFieldType('dateTime');
		$fields['ProductBillingContainers'] = new FieldType('ProductBillingContainers');
		return $fields;
	}
}
