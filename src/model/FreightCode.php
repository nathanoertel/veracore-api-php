<?php
namespace VeraCoreAPI\model;

class FreightCode extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['CarrierCode'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['FreightCarrier'] = new FieldType('FreightCarrier');
		$fields['FreightService'] = new FieldType('FreightService');
		$fields['Default'] = new FieldType('short');
		$fields['SCACCode'] = new FieldType('string');
		$fields['ContinentalUS'] = new FieldType('boolean');
		$fields['Canada'] = new FieldType('boolean');
		$fields['Mexico'] = new FieldType('boolean');
		$fields['Alaska'] = new FieldType('boolean');
		$fields['Hawaii'] = new FieldType('boolean');
		$fields['PuertoRico'] = new FieldType('boolean');
		$fields['International'] = new FieldType('boolean');
		$fields['DeliveryDays'] = new FieldType('int');
		$fields['GuaranteedDeliveryTime'] = new FieldType('dateTime');
		$fields['WeightType'] = new RestrictedFieldType('string', array(
			'Oz',
			'Lbs'
		));
		$fields['MinimumWeight'] = new FieldType('double');
		$fields['MaximumWeight'] = new FieldType('double');
		$fields['MaxDimensionalWeight'] = new FieldType('double');
		$fields['Metric'] = new FieldType('boolean');
		$fields['MaximumWidth'] = new FieldType('double');
		$fields['MaximumLength'] = new FieldType('double');
		$fields['MaximumHeight'] = new FieldType('double');
		$fields['MaximumLengthGirth'] = new FieldType('double');
		$fields['Commercial'] = new FieldType('boolean');
		$fields['Residential'] = new FieldType('boolean');
		$fields['RuralRoutes'] = new FieldType('boolean');
		$fields['PostOfficeBoxes'] = new FieldType('boolean');
		$fields['SaturdayDelivery'] = new FieldType('boolean');
		$fields['Active'] = new FieldType('boolean');
		$fields['PromailDistributed'] = new FieldType('boolean');
		$fields['SystemID'] = new FieldType('string');
		$fields['XmlServiceType'] = new FieldType('string');
		$fields['SmartPost'] = new FieldType('boolean');
		$fields['SmartPostIndiciaType'] = new FieldType('string');
		$fields['SmartPostAncillaryEndorsement'] = new FieldType('string');
		return $fields;
	}
}
