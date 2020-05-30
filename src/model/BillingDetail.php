<?php
namespace VeraCoreAPI\model;

class BillingDetail extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ShippingDate'] = new FieldType('dateTime');
		$fields['OrderID'] = new FieldType('string');
		$fields['ShippingOrderID'] = new FieldType('int');
		$fields['PickPackID'] = new FieldType('string');
		$fields['LineItemQty'] = new FieldType('int');
		$fields['ChargePerLine'] = new FieldType('decimal');
		$fields['PackageQty'] = new FieldType('int');
		$fields['PackageCost'] = new FieldType('decimal');
		$fields['CreditCardTransQty'] = new FieldType('int');
		$fields['CreditCardTransCost'] = new FieldType('decimal');
		$fields['BillingUnitsQty'] = new FieldType('int');
		$fields['BillingUnitsCost'] = new FieldType('decimal');
		$fields['BundleCost'] = new FieldType('decimal');
		$fields['PublishedFreight'] = new FieldType('decimal');
		$fields['ActualFreight'] = new FieldType('decimal');
		$fields['MarkedUpFreight'] = new FieldType('decimal');
		$fields['ChargePerShipment'] = new FieldType('decimal');
		$fields['TotalMerchandiseCharge'] = new FieldType('decimal');
		$fields['ProjectID'] = new FieldType('string');
		$fields['ProjectDescription'] = new FieldType('string');
		$fields['OrderReferenceNumber'] = new FieldType('string');
		$fields['OrdersPONumber'] = new FieldType('string');
		$fields['OBYName'] = new FieldType('string');
		$fields['OBYCOMPANY'] = new FieldType('string');
		$fields['OBYADDR1'] = new FieldType('string');
		$fields['OBYADDR2'] = new FieldType('string');
		$fields['OBYADDR3'] = new FieldType('string');
		$fields['OBYCITY'] = new FieldType('string');
		$fields['OBYST'] = new FieldType('string');
		$fields['OBYZIP'] = new FieldType('string');
		$fields['OBYCOUNTRY'] = new FieldType('string');
		$fields['STOName'] = new FieldType('string');
		$fields['STOCOMPANY'] = new FieldType('string');
		$fields['STOADDR1'] = new FieldType('string');
		$fields['STOADDR2'] = new FieldType('string');
		$fields['STOADDR3'] = new FieldType('string');
		$fields['STOCITY'] = new FieldType('string');
		$fields['STOST'] = new FieldType('string');
		$fields['STOZIP'] = new FieldType('string');
		$fields['STOCOUNTRY'] = new FieldType('string');
		$fields['BTOName'] = new FieldType('string');
		$fields['BTOCOMPANY'] = new FieldType('string');
		$fields['BTOADDR1'] = new FieldType('string');
		$fields['BTOADDR2'] = new FieldType('string');
		$fields['BTOADDR3'] = new FieldType('string');
		$fields['BTOCITY'] = new FieldType('string');
		$fields['BTOST'] = new FieldType('string');
		$fields['BTOZIP'] = new FieldType('string');
		$fields['BTOCOUNTRY'] = new FieldType('string');
		$fields['SOURCE'] = new FieldType('string');
		$fields['OrderStream'] = new FieldType('string');
		$fields['ShippingHandlingCharges'] = new FieldType('decimal');
		$fields['VarFld1'] = new FieldType('string');
		$fields['VarVal1'] = new FieldType('string');
		$fields['VarFld2'] = new FieldType('string');
		$fields['VarVal2'] = new FieldType('string');
		$fields['VarFld3'] = new FieldType('string');
		$fields['VarVal3'] = new FieldType('string');
		$fields['VarFld4'] = new FieldType('string');
		$fields['VarVal4'] = new FieldType('string');
		$fields['VarFld5'] = new FieldType('string');
		$fields['VarVal5'] = new FieldType('string');
		$fields['VarFld6'] = new FieldType('string');
		$fields['VarVal6'] = new FieldType('string');
		$fields['VarFld7'] = new FieldType('string');
		$fields['VarVal7'] = new FieldType('string');
		$fields['VarFld8'] = new FieldType('string');
		$fields['VarVal8'] = new FieldType('string');
		$fields['VarFld9'] = new FieldType('string');
		$fields['VarVal9'] = new FieldType('string');
		$fields['VarFld10'] = new FieldType('string');
		$fields['VarVal10'] = new FieldType('string');
		$fields['FirstShipCarrier'] = new FieldType('string');
		$fields['FirstShipSvc'] = new FieldType('string');
		$fields['BUKey'] = new FieldType('int');
		$fields['ShipmentOrderType'] = new FieldType('string');
		$fields['RushOrder'] = new FieldType('string');
		$fields['RushSurcharge'] = new FieldType('decimal');
		return $fields;
	}
}