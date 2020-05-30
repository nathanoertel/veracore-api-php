<?php
namespace VeraCoreAPI\model;

class RemoteSystem extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['Description'] = new FieldType('string');
		$fields['NDUrl'] = new FieldType('string');
		$fields['NDReturnParameter'] = new FieldType('string');
		$fields['NDParameter1'] = new FieldType('string');
		$fields['NDParameter1Description'] = new FieldType('string');
		$fields['NDParameter2'] = new FieldType('string');
		$fields['NDParameter2Description'] = new FieldType('string');
		$fields['NDParameter3'] = new FieldType('string');
		$fields['NDParameter3Description'] = new FieldType('string');
		$fields['ReturnDocParameter'] = new FieldType('string');
		$fields['ReturnQuantityParameter'] = new FieldType('string');
		$fields['EditUrl'] = new FieldType('string');
		$fields['EditReturnParameter'] = new FieldType('string');
		$fields['EditUIDParameter'] = new FieldType('string');
		$fields['EditDocIDParameter'] = new FieldType('string');
		$fields['ProofUrl'] = new FieldType('string');
		$fields['ProofDocIDParameter'] = new FieldType('string');
		$fields['ProofOfferIDParameter'] = new FieldType('string');
		$fields['FinalUrl'] = new FieldType('string');
		$fields['FinalDocIdParameter'] = new FieldType('string');
		$fields['FinalOfferIDParameter'] = new FieldType('string');
		$fields['NeedsTicket'] = new FieldType('boolean');
		$fields['TicketRSP'] = new FieldType('string');
		$fields['EnterDocUrl'] = new FieldType('string');
		$fields['EnterDocParameter'] = new FieldType('string');
		$fields['PriceParameter'] = new FieldType('string');
		$fields['PassUserInfo'] = new FieldType('boolean');
		$fields['OrderLink'] = new FieldType('string');
		$fields['OrderDocParameter'] = new FieldType('string');
		$fields['OrderUserParameter'] = new FieldType('string');
		$fields['FinalTicketUrl'] = new FieldType('string');
		$fields['ReorderUrl'] = new FieldType('string');
		$fields['ReorderReturnParameter'] = new FieldType('string');
		$fields['ReorderUIDParameter'] = new FieldType('string');
		$fields['ReorderDocIDParameter'] = new FieldType('string');
		$fields['OrderService'] = new FieldType('string');
		$fields['OrderAction'] = new FieldType('string');
		$fields['PMKey'] = new FieldType('int');
		$fields['UserID'] = new FieldType('string');
		$fields['Password'] = new FieldType('string');
		$fields['AdditionalParameter'] = new FieldType('string');
		$fields['CommParameter'] = new FieldType('string');
		$fields['UpdateUrl'] = new FieldType('string');
		$fields['QueryUrl'] = new FieldType('string');
		return $fields;
	}
}
