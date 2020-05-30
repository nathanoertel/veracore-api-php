<?php
namespace VeraCoreAPI\model;

class RestrictedFieldType extends FieldType {
    public function __construct($type, $restrictions) {
        parent::__construct($type);
        $this->restrictions = $restrictions;
    }
}
