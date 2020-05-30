<?php
namespace VeraCoreAPI\model;

class ProductHeader extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['PartNumber'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['LeadDays'] = new FieldType('int');
		$fields['BuildType'] = new RestrictedFieldType('string', array(
			'Product',
			'Kit',
			'POD',
			'MOD',
			'EPOD'
		));
		$fields['UsageCode'] = new RestrictedFieldType('string', array(
			'ExclusiveToOwner',
			'AllLocationsForClient',
			'AnyClient'
		));
		$fields['OfferFlag'] = new FieldType('boolean');
		$fields['UserDate'] = new FieldType('dateTime');
		$fields['Owner'] = new FieldType('Owner');
		$fields['CostCenter'] = new FieldType('CostCenter');
		$fields['JobTemplate'] = new FieldType('Job');
		$fields['ProductHistoryDetailLevel'] = new RestrictedFieldType('string', array(
			'OnePerTransaction',
			'OnePerTransactionTypePerDay'
		));
		$fields['CreatedByUserType'] = new RestrictedFieldType('string', array(
			'WebService',
			'Client',
			'NonClient'
		));
		return $fields;
	}
}
