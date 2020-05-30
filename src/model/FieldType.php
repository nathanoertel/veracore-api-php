<?php
namespace VeraCoreAPI\model;

class FieldType {
    private $type;

    private $options;

    public function valid($value) {
        switch($this->type) {
            case 'dateTime':
            case 'string':
                return is_string($value);
            default:
                $type = 'VeraCoreAPI\\model\\'.$this->type;
                return $value instanceof $type;
        }
    }

    public function __construct($type, $options = null) {
        $this->type = $type;
        $this->options = $options;
    }
}
