<?php
namespace VeraCoreAPI\model;

class PackagesType extends MarshalByRefObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['PackageType'] = new FieldType('string');
		$fields['DatePacked'] = new FieldType('dateTime');
		$fields['DateShipped'] = new FieldType('dateTime');
		$fields['DateVoided'] = new FieldType('dateTime');
		$fields['Carrier'] = new FieldType('string');
		$fields['Service'] = new FieldType('string');
		$fields['ActualService'] = new FieldType('string');
		$fields['Weight'] = new FieldType('double');
		$fields['ActualFreight'] = new FieldType('double');
		$fields['ActualAdditionalChg'] = new FieldType('double');
		$fields['TrackingId'] = new FieldType('string');
		$fields['PickUpId'] = new FieldType('string');
		$fields['InsuredValue'] = new FieldType('double');
		return $fields;
	}
}
