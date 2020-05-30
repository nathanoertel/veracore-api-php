<?php
namespace VeraCoreAPI\model;

class OfferSettings extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Limit'] = new FieldType('int');
		$fields['Minimum'] = new FieldType('int');
		$fields['UnitOfMeasure'] = new FieldType('UnitOfMeasure');
		$fields['ShipSeperately'] = new FieldType('boolean');
		$fields['CaptureComments'] = new FieldType('boolean');
		$fields['DisplayAvailable'] = new RestrictedFieldType('string', array(
			'Suppress',
			'AvailableBalance',
			'InStockOutOfStockOnly',
			'AvailableBalanceOutOfStock'
		));
		$fields['OrderUnavailableAction'] = new RestrictedFieldType('string', array(
			'AllowOrdering',
			'DisplayOfferNoOrdering',
			'SuppressWhenOutOfStock',
			'YesMaximumOrderQtyAsAvailableQty'
		));
		$fields['OnlyAllowedQuantities'] = new FieldType('boolean');
		$fields['AllowedQuantities'] = new ArrayFieldType('AllowedOfferQuantity');
		$fields['NoShCharges'] = new FieldType('boolean');
		$fields['NoShFields'] = new FieldType('boolean');
		$fields['ShipsSeparatelyCategory'] = new FieldType('ShippingCategory');
		return $fields;
	}
}
