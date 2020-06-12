<?php
namespace VeraCoreAPI\model;

class FieldType {
    private $type;

    protected $restrictions;

    protected $isArray;

    public function isArray() {
        return $this->isArray;
    }

    public function valid($value) {
        if($value === null) return true;
        $valid = false;
        switch($this->type) {
            case 'dateTime':
            case 'string':
                $valid = is_string($value);
            break;
            case 'int':
            case 'decimal':
            case 'long':
            case 'short':
                $valid = is_numeric($value);
            break;
            case 'boolean':
                $valid = is_bool($value);
            break;
            default:
                $type = 'VeraCoreAPI\\model\\'.$this->type;
                $valid = $value instanceof $type;
            break;
        }

        if($valid && $this->restrictions) {
            return in_array($value, $this->restrictions);
        } else return $valid;
    }

    public function __construct($type) {
        $this->type = $type;
    }
}
