<?php
namespace VeraCoreAPI\model;

class OfferLinks extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['HtmlLink'] = new FieldType('string');
		$fields['PdfLink'] = new FieldType('string');
		$fields['PdfText'] = new FieldType('string');
		$fields['PptLink'] = new FieldType('string');
		$fields['PptText'] = new FieldType('string');
		$fields['OtherLink1'] = new FieldType('string');
		$fields['OtherText1'] = new FieldType('string');
		$fields['OtherLink2'] = new FieldType('string');
		$fields['OtherText2'] = new FieldType('string');
		$fields['OtherLink3'] = new FieldType('string');
		$fields['OtherText3'] = new FieldType('string');
		return $fields;
	}
}
