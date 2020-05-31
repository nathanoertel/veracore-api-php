<?php
namespace VeraCoreAPI\model;

class OfferOrdered extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Offer'] = new FieldType('OfferID');
		$fields['Quantity'] = new FieldType('int');
		$fields['CanceledQuantity'] = new FieldType('int');
		$fields['OrderShipTo'] = new FieldType('OrderShipToKey');
		$fields['OrderShipToKey'] = new FieldType('OrderShipToKey');
		$fields['PriceType'] = new FieldType('unsignedByte');
		$fields['UnitPrice'] = new FieldType('decimal');
		$fields['ShipType'] = new FieldType('short');
		$fields['ShippingHandling'] = new FieldType('decimal');
		$fields['Discounts'] = new FieldType('decimal');
		$fields['DiscountPercent'] = new FieldType('int');
		$fields['DocumentID'] = new FieldType('string');
		$fields['SeqID'] = new FieldType('int');
		$fields['CloneLine'] = new FieldType('int');
		$fields['Unapproved'] = new FieldType('boolean');
		$fields['ShipToKey'] = new FieldType('string');
		$fields['FgnOrder'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['RCOrderKey'] = new FieldType('string');
		$fields['Recurring'] = new FieldType('boolean');
		$fields['LineNumber'] = new FieldType('long');
		$fields['ProofLink'] = new FieldType('string');
		$fields['Variables'] = new ArrayFieldType('OfferVariable');
		$fields['ProductDetails'] = new ArrayFieldType('OrderProductDetail');
		$fields['LineTaxPercent'] = new FieldType('decimal');
		$fields['ShippingHandlingTaxPercent'] = new FieldType('decimal');
		$fields['LineTaxAmount'] = new FieldType('decimal');
		return $fields;
	}
}
