<?php
namespace VeraCoreAPI\model;

class OrderShipping extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['FreightCarrier'] = new FieldType('FreightCarrier');
		$fields['FreightService'] = new FieldType('FreightService');
		$fields['FreightAccount'] = new FieldType('FreightAccount');
		$fields['ShippingOption'] = new FieldType('ShippingOption');
		$fields['FreightCode'] = new FieldType('string');
		$fields['FreightCodeDescription'] = new FieldType('string');
		$fields['ShipComments'] = new FieldType('string');
		$fields['NeededBy'] = new FieldType('string');
		$fields['Rush'] = new FieldType('boolean');
		$fields['ReleaseDate'] = new FieldType('dateTime');
		$fields['ThirdPartyType'] = new FieldType('int');
		$fields['ThirdAccountNumber'] = new FieldType('string');
		$fields['NCShip'] = new FieldType('boolean');
		$fields['NCPack'] = new FieldType('boolean');
		$fields['NCOffers'] = new FieldType('boolean');
		$fields['NCHandling'] = new FieldType('boolean');
		$fields['NCOffShipHandling'] = new FieldType('boolean');
		$fields['NCSpecialHandling'] = new FieldType('boolean');
		$fields['NCRush'] = new FieldType('boolean');
		return $fields;
	}
}
