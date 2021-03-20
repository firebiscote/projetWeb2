<?php
require_once 'Table.php';
require_once 'Right.php';
class User extends Table {
    private $_name;
    private $_firstName;
    private $_mail;
    private $_hash;
    private $_role;
    private $_right;
    private $_centerId;
    public function __get($property) {
        if ('_id' === $property)
            return $this->_id;
        elseif ('_name' === $property)
            return $this->_name;
        elseif ('_firstName' === $property)
            return $this->_firstName;
        elseif ('_mail' === $property)
            return $this->_mail;
        elseif ('_hash' === $property)
            return $this->_hash;
        elseif ('_role' === $property)
            return $this->_role;
        elseif ('_right' === $property)
            return $this->_right;
        elseif ('_centerId' === $property)
            return $this->_centerId;
        else
            throw new Exception('unknown property !');
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_id = $value;
        elseif ('_name' === $property && gettype($value) == 'string' && strlen($value) < 16)
            $this->_name = $value;
        elseif ('_firstName' === $property && gettype($value) == 'string' && strlen($value) < 16)
            $this->_firstName = $value;
        elseif ('_mail' === $property && gettype($value) == 'string' && strlen($value) < 31)
            $this->_mail = $value;
        elseif ('_hash' === $property && gettype($value) == 'string' && strlen($value) < 33)
            $this->_hash = $value;
        elseif ('_role' === $property && gettype($value) == 'string' && strlen($value) < 2)
            $this->_role = $value;
        elseif ('_right' === $property && gettype($value) == 'Right')
            $this->_right = $value;
        elseif ('_centerId' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_centerId = $value;
        else
            throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
    }
}