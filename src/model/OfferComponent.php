<?php
namespace VeraCoreAPI\model;

class OfferComponent extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Product'] = new ArrayFieldType('ProductIDHeader');
		$fields['Cluster'] = new FieldType('ProductCluster');
		$fields['PTASKS'] = new FieldType('int');
		$fields['Quantity'] = new FieldType('int');
		$fields['Instructions'] = new FieldType('string');
		$fields['BackorderTreatment'] = new RestrictedFieldType('string', array(
			'SystemDefault',
			'ShipInStockBackorderRest',
			'BackorderWholeOrder',
			'ShipInStockCancelRest',
			'BackorderEntireOfferLine',
			'ShipCompleteReserveAvailable',
			'ShipCompleteOffersReserveAvailable'
		));
		$fields['CustomAssemblyGroup'] = new FieldType('CustomAssemblyGroup');
		$fields['Required'] = new FieldType('boolean');
		$fields['IsPrimaryRevenue'] = new FieldType('boolean');
		$fields['RevenueAmount'] = new FieldType('decimal');
		$fields['RevenueCenter'] = new FieldType('RevenueCenter');
		$fields['UserSpecifiedQuantities'] = new FieldType('boolean');
		$fields['ExcludeFromAvailability'] = new FieldType('boolean');
		$fields['DoNotShipAlone'] = new FieldType('boolean');
		$fields['CADefault'] = new FieldType('boolean');
		$fields['Sequence'] = new FieldType('int');
		$fields['CustomizationProfile'] = new FieldType('CustomizationProfile');
		$fields['Surcharge'] = new FieldType('ClusterSurcharge');
		return $fields;
	}
}
