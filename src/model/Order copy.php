<?php
namespace VeraCoreAPI\model;

class Order extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Header'] = new FieldType('OrderHeader');
		$fields['Classification'] = new FieldType('OrderClassification');
		$fields['Shipping'] = new FieldType('OrderShipping');
		$fields['Money'] = new FieldType('OrderMoney');
		$fields['Payment'] = new FieldType('OrderPayment');
		$fields['OrderVariables'] = new ArrayFieldType('OrderVariable');
		$fields['OrderedBy'] = new FieldType('OrderedBy');
		$fields['ShipTo'] = new ArrayFieldType('OrderShipTo');
		$fields['BillTo'] = new FieldType('OrderBillTo');
		$fields['Offers'] = new ArrayFieldType('OfferOrdered');
		$fields['OrderRecurrenceSchedule'] = new FieldType('OrderRecurrenceSchedule');
		$fields['OrderBudget'] = new FieldType('OrderBudget');
		return $fields;
	}
}
