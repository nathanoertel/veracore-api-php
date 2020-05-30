<?php
namespace VeraCoreAPI\model;

class GetOfferResult extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Restriction1'] = new ArrayFieldType('RestrictionType');
		$fields['Restriction2'] = new ArrayFieldType('RestrictionType');
		$fields['PriceInfo'] = new ArrayFieldType('decimal');
		$fields['SeqID'] = new FieldType('int');
		$fields['ID'] = new FieldType('string');
		$fields['Description'] = new FieldType('string');
		$fields['SortKey'] = new FieldType('string');
		$fields['OrderMinimum'] = new FieldType('int');
		$fields['OrderLimit'] = new FieldType('int');
		$fields['ImagePath'] = new FieldType('string');
		$fields['ImageLocal'] = new FieldType('boolean');
		$fields['FullImagePath'] = new FieldType('string');
		$fields['PPLink'] = new FieldType('string');
		$fields['PdfLink'] = new FieldType('string');
		$fields['StartDate'] = new FieldType('dateTime');
		$fields['EndDate'] = new FieldType('dateTime');
		$fields['Inactive'] = new FieldType('string');
		$fields['InactiveText'] = new FieldType('string');
		$fields['Comments'] = new FieldType('string');
		$fields['CustomAssem'] = new FieldType('int');
		$fields['DefaultPrice'] = new FieldType('decimal');
		$fields['PriceClassStructure'] = new FieldType('PriceClassStructure');
		$fields['Available'] = new FieldType('int');
		$fields['ClusterCount'] = new FieldType('int');
		$fields['Taxable'] = new FieldType('boolean');
		$fields['OFFCSTSeqID'] = new FieldType('int');
		$fields['ProdCount'] = new FieldType('int');
		$fields['KitCount'] = new FieldType('int');
		$fields['PODCount'] = new FieldType('int');
		$fields['DropShip'] = new FieldType('boolean');
		$fields['CustAssem'] = new FieldType('boolean');
		$fields['OtherLink1'] = new FieldType('string');
		$fields['OtherLink2'] = new FieldType('string');
		$fields['OtherLink3'] = new FieldType('string');
		$fields['FullImageText'] = new FieldType('string');
		$fields['PdfText'] = new FieldType('string');
		$fields['PPTText'] = new FieldType('string');
		$fields['Other1Text'] = new FieldType('string');
		$fields['Other2Text'] = new FieldType('string');
		$fields['Other3Text'] = new FieldType('string');
		$fields['DisplayAvailable'] = new FieldType('int');
		$fields['OrderUnavailable'] = new FieldType('int');
		$fields['InStockText'] = new FieldType('string');
		$fields['OutOfStockText'] = new FieldType('string');
		$fields['OtherOrderFlag'] = new FieldType('int');
		$fields['OrderLink'] = new FieldType('string');
		$fields['RCFld1'] = new FieldType('string');
		$fields['RCFld2'] = new FieldType('string');
		$fields['RCFld3'] = new FieldType('string');
		$fields['OFFRCS_SeqID'] = new FieldType('int');
		$fields['OFFRCS_NDURL'] = new FieldType('string');
		$fields['OFFRCS_NDRTNPARM'] = new FieldType('string');
		$fields['OFFRCS_NDparm1'] = new FieldType('string');
		$fields['OFFRCS_NDParm2'] = new FieldType('string');
		$fields['OFFRCS_NDParm3'] = new FieldType('string');
		$fields['OFFRCS_EDITURL'] = new FieldType('string');
		$fields['OFFRCS_EDITRTNPARM'] = new FieldType('string');
		$fields['OFFRCS_EDITUIDPARM'] = new FieldType('string');
		$fields['OFFRCS_EDITDOCIDPARM'] = new FieldType('string');
		$fields['ButtonText'] = new FieldType('string');
		$fields['AllowQuantityChange'] = new FieldType('boolean');
		$fields['SelQuantityOnly'] = new FieldType('boolean');
		$fields['OFFRCS_NEEDSTICKET'] = new FieldType('boolean');
		$fields['OFFRCS_TicketRSP'] = new FieldType('string');
		$fields['offrcs_enterdocurl'] = new FieldType('string');
		$fields['offrcs_enterdocparm'] = new FieldType('string');
		$fields['offrcs_passuserinfo'] = new FieldType('boolean');
		$fields['AddlSearchText'] = new FieldType('string');
		$fields['PFAllowReorder'] = new FieldType('boolean');
		$fields['PFReorderExpDays'] = new FieldType('int');
		$fields['OFFRCS_ReorderUrl'] = new FieldType('string');
		$fields['OFFRCS_ReorderRtnParm'] = new FieldType('string');
		$fields['OFFRCS_ReorderUIDParm'] = new FieldType('string');
		$fields['OFFRCS_ReorderDocIDParm'] = new FieldType('string');
		$fields['PriceType'] = new RestrictedFieldType('string', array(
			'Each',
			'PerThousand'
		));
		$fields['MainFeature'] = new FieldType('int');
		$fields['ReorderButtonText'] = new FieldType('string');
		$fields['ReorderLinkText'] = new FieldType('string');
		$fields['PreviousOrdersText'] = new FieldType('string');
		$fields['UnitomDescription'] = new FieldType('string');
		$fields['MainFeatureEndDate'] = new FieldType('dateTime');
		return $fields;
	}
}
