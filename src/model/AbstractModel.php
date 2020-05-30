<?php
namespace VeraCoreAPI\model;

abstract class AbstractModel {
    private $__fields;

    protected abstract function __fields();

    public function __construct() {
        $this->__fields = $this->__fields();
    }

    public function __set($key, $value) {
        if(isset($this->__fields[$key])) {
            if($this->__fields[$key]->valid($value)) {
                $this->$key = $value;
            } else throw new \Exception('Invalid Value: '.$key);
        } else {
            throw new \Exception('Invalid Field: '.$key);
        }
    }
}