<?php
require 'Table.php';
class Company extends Table {
    private $_name;
    private $_mail;
    private $_line;
    private $_cesiTrainee;
    private $_confidence;
    public function __get($property) {
        echo $property;
        if ('_id' === $property) {
            return $this->_id;
        } elseif ('_name' === $property) {
            return $this->_name;
        } elseif ('_mail' === $property) {
            return $this->_mail;
        } elseif ('_line' === $property) {
            return $this->_line;
        } elseif ('_cesiTrainee' === $property) {
            return $this->_cesiTrainee;
        } elseif ('_confidence' === $property) {
            return $this->_confidence;
        } else {
            throw new Exception('unknown property !');
        }
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0) {
            $this->_id = $value;
        } elseif ('_name' === $property && gettype($value) == 'string' && strlen($value) < 51) {
            $this->_name = $value;
        } elseif ('_mail' === $property && gettype($value) == 'string' && strlen($value) < 41) {
            $this->_mail = $value;
        } elseif ('_line' === $property && gettype($value) == 'string' && strlen($value) < 31) {
            $this->_line = $value;
        } elseif ('_cesiTrainee' === $property && gettype($value) == 'integer' && $value > 0) {
            $this->_cesiTrainee = $value;
        } elseif ('_confidence' === $property && gettype($value) == 'integer' && $value > 0 && $value < 11) {
            $this->_confidence = $value;
        } else {
            throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
        }
    }
}