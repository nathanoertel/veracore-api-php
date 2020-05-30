<?php
namespace VeraCoreAPI\model;

class PickPack extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['OrderShipTo'] = new FieldType('OrderShipTo');
		$fields['PPSBAT_Seqid'] = new FieldType('int');
		$fields['PickPackageDateTime'] = new FieldType('dateTime');
		$fields['SystemID'] = new FieldType('string');
		$fields['Status'] = new FieldType('string');
		$fields['MessagedDate'] = new FieldType('dateTime');
		$fields['ShipOrderID'] = new FieldType('string');
		$fields['PickedDate'] = new FieldType('dateTime');
		$fields['MerAmt'] = new FieldType('decimal');
		$fields['ShipHand'] = new FieldType('decimal');
		$fields['TaxAmt'] = new FieldType('decimal');
		$fields['PICPAK_DiscAmt'] = new FieldType('decimal');
		$fields['Hold'] = new FieldType('boolean');
		$fields['CREDBT_Seqid'] = new FieldType('int');
		$fields['SpecHand'] = new FieldType('decimal');
		$fields['AddlCharge'] = new FieldType('decimal');
		$fields['SUPPLR_Seqid'] = new FieldType('int');
		$fields['ShpConfEmail'] = new FieldType('boolean');
		$fields['NeedsInvoice'] = new FieldType('boolean');
		$fields['SOTYPE'] = new FieldType('string');
		$fields['CreditAmount'] = new FieldType('decimal');
		$fields['GCAmt'] = new FieldType('decimal');
		$fields['PICPAK_TaxTranID'] = new FieldType('string');
		$fields['ChargeComplete'] = new FieldType('boolean');
		$fields['OfferShipHand'] = new FieldType('decimal');
		$fields['RushHand'] = new FieldType('decimal');
		$fields['PackCharges'] = new FieldType('decimal');
		$fields['ShipCharges'] = new FieldType('decimal');
		$fields['NCAmount'] = new FieldType('decimal');
		$fields['NCUsed'] = new FieldType('decimal');
		$fields['BudgetAmount'] = new FieldType('decimal');
		$fields['FreightCode'] = new FieldType('FreightCode');
		$fields['InterceptComments'] = new FieldType('string');
		return $fields;
	}
}
