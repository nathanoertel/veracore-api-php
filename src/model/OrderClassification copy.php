<?php
namespace VeraCoreAPI\model;

class OrderClassification extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['CampaignID'] = new FieldType('string');
		$fields['ResponseMedia'] = new FieldType('ResponseMedia');
		$fields['Source'] = new FieldType('Source');
		$fields['Issue'] = new FieldType('SourceDetail');
		$fields['CustomerProject'] = new FieldType('CustomerProject');
		$fields['CustomerCode'] = new FieldType('string');
		$fields['Store'] = new FieldType('string');
		$fields['Department'] = new FieldType('string');
		$fields['DistributionCenter'] = new FieldType('string');
		$fields['Vendor'] = new FieldType('string');
		return $fields;
	}
}
