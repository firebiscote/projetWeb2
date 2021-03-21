<?php
require_once 'Table.php';
class Link extends Table {
    private $_linkId;
    public function __get($property) {
        if ('_id' === $property)
            return $this->_id;
        elseif ('_linkId' === $property)
            return $this->_linkId;
        else
            throw new Exception('unknown property !');
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_id = $value;
        elseif ('_linkId' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_linkId = $value;
        else
            throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
    }
}