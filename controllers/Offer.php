<?php
require 'Table.php';
class Offer extends Table {
    private $_name;
    private $_wage;
    private $_startDate;
    private $_endDate;
    private $_seat;
    private $_state;
    private $_idCompany;
    private $_idLocality;
    public function __get($property) {
        if ('_id' === $property)
            return $this->_id;
        elseif ('_name' === $property)
            return $this->_name;
        elseif ('_wage' === $property)
            return $this->_wage;
        elseif ('_startDate' === $property)
            return $this->_startDate;
        elseif ('_endDate' === $property)
            return $this->_endDate;
        elseif ('_seat' === $property)
            return $this->_seat;
        elseif ('_state' === $property)
            return $this->_state;
        elseif ('_idCompany' === $property)
            return $this->_idCompany;
        elseif ('_idLocality' === $property)
            return $this->_idLocality;
        else
            throw new Exception('unknown property !');
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_id = $value;
        elseif ('_name' === $property && gettype($value) == 'string' && strlen($value) < 51)
            $this->_name = $value;
        elseif ('_wage' === $property && gettype($value) == 'float' && $value < 100)
            $this->_wage = $value;
        elseif ('_startDate' === $property && gettype($value) == 'string' && strlen($value) < 11)
            $this->_startDate = $value;
        elseif ('_endDate' === $property && gettype($value) == 'string' && strlen($value) < 11)
            $this->_endDate = $value;
        elseif ('_seat' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_seat = $value;
        elseif ('_state' === $property && gettype($value) == 'boolean')
            $this->_state = $value;
        elseif ('_idCompany' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_idCompany = $value;
        elseif ('_idLocality' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_idLocality = $value;
        else
            throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
    }
}