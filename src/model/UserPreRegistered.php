<?php
namespace VeraCoreAPI\model;

class UserPreRegistered extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['SeqID'] = new FieldType('int');
		$fields['ORDOBY'] = new FieldType('ORDOBY');
		$fields['UtilitiesCustomMenuTitle'] = new FieldType('string');
		$fields['UtilitiesCustomMenuLink'] = new FieldType('string');
		$fields['ReportsCustomMenuTitle'] = new FieldType('string');
		$fields['ReportsCustomMenuLink'] = new FieldType('string');
		$fields['PeopFlag'] = new FieldType('int');
		$fields['WelcomeDefaults'] = new FieldType('boolean');
		$fields['WelcomeHeading'] = new FieldType('string');
		$fields['DisplayGraphs'] = new FieldType('boolean');
		$fields['StartingGraphs'] = new RestrictedFieldType('string', array(
			'None',
			'Classic',
			'Dashboard'
		));
		$fields['WelcomeText'] = new FieldType('string');
		$fields['ContactFlag'] = new FieldType('int');
		$fields['Graph1'] = new FieldType('short');
		$fields['Graph2'] = new FieldType('short');
		$fields['Graph3'] = new FieldType('short');
		$fields['Graph4'] = new FieldType('short');
		$fields['Graph1Type'] = new RestrictedFieldType('string', array(
			'None',
			'TopOffers',
			'OrderVolume5Weeks',
			'TopBackorderd',
			'OrderVolume13Months',
			'UnapprovedOrders',
			'InactivatedOffers'
		));
		$fields['Graph2Type'] = new RestrictedFieldType('string', array(
			'None',
			'TopOffers',
			'OrderVolume5Weeks',
			'TopBackorderd',
			'OrderVolume13Months',
			'UnapprovedOrders',
			'InactivatedOffers'
		));
		$fields['Graph3Type'] = new RestrictedFieldType('string', array(
			'None',
			'TopOffers',
			'OrderVolume5Weeks',
			'TopBackorderd',
			'OrderVolume13Months',
			'UnapprovedOrders',
			'InactivatedOffers'
		));
		$fields['Graph4Type'] = new RestrictedFieldType('string', array(
			'None',
			'TopOffers',
			'OrderVolume5Weeks',
			'TopBackorderd',
			'OrderVolume13Months',
			'UnapprovedOrders',
			'InactivatedOffers'
		));
		return $fields;
	}
}
