<?php
namespace VeraCoreAPI\model;

class OrderInqRecord extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['OrdHead'] = new FieldType('OrderHeadType');
		$fields['ShipToInfo'] = new FieldType('AddressType');
		$fields['OrderedBy'] = new FieldType('AddressType');
		$fields['BillToInfo'] = new FieldType('AddressType');
		$fields['OfferInfo'] = new ArrayFieldType('OfferType');
		$fields['BillOfMaterials'] = new ArrayFieldType('BOMProductType');
		$fields['ShippingOrders'] = new ArrayFieldType('PickPackType');
		return $fields;
	}
}
