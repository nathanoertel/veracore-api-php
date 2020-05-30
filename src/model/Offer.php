<?php
namespace VeraCoreAPI\model;

class Offer extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Header'] = new FieldType('OfferHeader');
		$fields['Info'] = new FieldType('OfferInfo');
		$fields['Status'] = new FieldType('OfferStatus');
		$fields['Settings'] = new FieldType('OfferSettings');
		$fields['Strings'] = new FieldType('OfferStrings');
		$fields['Pricing'] = new FieldType('OfferPricing');
		$fields['Recurrence'] = new FieldType('OfferRecurrence');
		$fields['Customization'] = new FieldType('OfferCustomization');
		$fields['Links'] = new FieldType('OfferLinks');
		$fields['Images'] = new FieldType('OfferImages');
		$fields['Categorization'] = new FieldType('OfferCategorization');
		$fields['DropShip'] = new FieldType('OfferDropShip');
		$fields['EDelivery'] = new FieldType('EDelivery');
		$fields['Restrictions'] = new ArrayFieldType('OfferRestriction');
		$fields['Components'] = new ArrayFieldType('OfferComponent');
		$fields['DropShipParts'] = new ArrayFieldType('SupplierPart');
		$fields['Categories'] = new ArrayFieldType('OfferCategory');
		$fields['Upsells'] = new ArrayFieldType('Upsell');
		$fields['ClusterSurcharges'] = new ArrayFieldType('ClusterSurcharge');
		$fields['ScheduleParameters'] = new ArrayFieldType('OfferScheduleParameters');
		$fields['CycleBillOfMaterials'] = new ArrayFieldType('OfferCycleBillOfMaterials');
		$fields['CustomAssemblySurcharges'] = new ArrayFieldType('ClusterSurcharge');
		return $fields;
	}
}
