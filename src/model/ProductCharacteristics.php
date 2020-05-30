<?php
namespace VeraCoreAPI\model;

class ProductCharacteristics extends PMObject {
	protected function __fields() {
		$fields = parent::__fields();
		$fields['Height'] = new FieldType('double');
		$fields['Width'] = new FieldType('double');
		$fields['Length'] = new FieldType('double');
		$fields['DefaultWeight'] = new FieldType('double');
		$fields['DefaultWeightType'] = new RestrictedFieldType('string', array(
			'Oz',
			'Lbs'
		));
		$fields['PackDescription'] = new FieldType('string');
		$fields['Color'] = new FieldType('Color');
		$fields['Size'] = new FieldType('Size');
		$fields['PrePack'] = new FieldType('boolean');
		$fields['PackQuantity'] = new FieldType('int');
		$fields['PackTrack'] = new RestrictedFieldType('string', array(
			'Each',
			'Containers'
		));
		$fields['ShipSeparatePackages'] = new FieldType('boolean');
		$fields['ImageLocal'] = new FieldType('boolean');
		$fields['ImageDirectory'] = new FieldType('string');
		$fields['ImagePathThumbnail'] = new FieldType('string');
		$fields['ImagePathFull'] = new FieldType('string');
		$fields['ClusterSequence'] = new FieldType('int');
		$fields['PRDUCT_SpoilagePercent'] = new FieldType('double');
		$fields['PRDUCT_SpoilageRoundingQuantity'] = new FieldType('int');
		$fields['PPCubicFoot'] = new FieldType('double');
		$fields['CubicFeetPP'] = new FieldType('double');
		return $fields;
	}
}
