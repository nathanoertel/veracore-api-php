<?php
namespace VeraCoreAPI\model;

class ORDOBY extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['ApprovalGroupUsers'] = new ArrayFieldType('ApprovalGroupUser');
		$fields['CustomCategoryRestrictions'] = new ArrayFieldType('UserCategoryRestriction');
		$fields['RestrictedOwners'] = new ArrayFieldType('RestrictedOwner');
		$fields['SeqID'] = new FieldType('int');
		$fields['CustomerID'] = new FieldType('string');
		$fields['Password'] = new FieldType('string');
		$fields['OrderEntryView'] = new FieldType('OrderEntryView');
		$fields['Mailer'] = new FieldType('Person');
		$fields['CCEmail'] = new FieldType('string');
		$fields['BCCEmail'] = new FieldType('string');
		$fields['Client'] = new FieldType('boolean');
		$fields['NoOfferQuantityDropDown'] = new FieldType('boolean');
		$fields['RequirePasswordNextLogin'] = new FieldType('boolean');
		$fields['CategoryAccessGroup'] = new FieldType('CategoryGroup');
		$fields['DashboardProfile'] = new FieldType('Profile');
		$fields['MasterApproverStatus'] = new FieldType('boolean');
		$fields['IsInactive'] = new FieldType('boolean');
		return $fields;
	}
}
