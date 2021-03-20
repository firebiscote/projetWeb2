<?php
require_once 'Table.php';
class Right extends Table {
    private $_SFx1;
    private $_SFx2;
    private $_SFx3;
    private $_SFx4;
    private $_SFx5;
    private $_SFx6;
    private $_SFx7;
    private $_SFx8;
    private $_SFx9;
    private $_SFx10;
    private $_SFx11;
    private $_SFx12;
    private $_SFx13;
    private $_SFx14;
    private $_SFx15;
    private $_SFx16;
    private $_SFx17;
    private $_SFx18;
    private $_SFx19;
    private $_SFx20;
    private $_SFx21;
    private $_SFx22;
    private $_SFx23;
    private $_SFx24;
    private $_SFx25;
    private $_SFx26;
    private $_SFx27;
    private $_SFx28;
    private $_SFx29;
    private $_SFx30;
    private $_SFx31;
    private $_SFx32;
    private $_SFx33;
    private $_SFx34;
    private $_SFx35;
    public function __get($property) {
        if ('_id' === $property)
            return $this->_id;
        for ($i = 1; $i < 36; $i++) {
            $rank = '_SFx'.$i;
            if ($rank === $property) {
                return $this->$rank;
            }
        }
        throw new Exception('unknown property !');
    }
    public function __set($property, $value) {
        if ('_id' === $property && gettype($value) == 'integer' && $value > 0)
            $this->_id = $value;
            return true;
        for ($i = 1; $i < 36; $i++) {
            $rank = '_SFx'.$i;
            if ($rank === $property && gettype($value) == 'boolean') {
                $this->$rank = $value;
                return true;
            }
        }
        throw new Exception($property.' is not a valid property or '.$value.' is not a valid value !');
    }
}