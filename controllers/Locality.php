<?php
require_once 'Table.php'
class Locality extends Table {
    private $_name;
    public function __get($property) {
        if ('_id' === $property)
            return $this->_id;
        elseif ('_name' === $property)
            return $this->_name;
        else
            throw new Exception('unknown property !');
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_id = $value;
        elseif ('_name' === $property && gettype($value) == 'string' && strlen($value) < 31)
            $this->_name = $value;
        else
            throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
    }
}