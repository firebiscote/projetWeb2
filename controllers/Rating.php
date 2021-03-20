<?php
require_once 'Table.php';
class Rating extends Table {
    private $_mark;
    private $_comment;
    private $_companyId;
    private $_userId;
    public function __get($property) {
        if ('_id' === $property)
            return $this->_id;
        elseif ('_mark' === $property)
            return $this->_mark;
        elseif ('_comment' === $property)
            return $this->_comment;
        elseif ('_companyId' === $property)
            return $this->_companyId;
        elseif ('_userId' === $property)
            return $this->_userId;
        else
            throw new Exception('unknown property !');
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_id = $value;
        elseif ('_mark' === $property && gettype($value) == 'interger' && $value < 11)
            $this->_mark = $value;
        elseif ('_comment' === $property && gettype($value) == 'string' && strlen($value) < 1001)
            $this->_comment = $value;
        elseif ('_companyId' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_companyId = $value;
        elseif ('_userId' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_userId = $value;
        else
            throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
    }
}