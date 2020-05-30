<?php
namespace VeraCoreAPI\model;

class ArrayFieldType extends FieldType {
    public function __construct($type) {
        parent::__construct($type);
        $this->isArray = true;
    }
}
