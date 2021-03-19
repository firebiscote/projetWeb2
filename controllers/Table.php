<?php
class Table {
    protected $_id;
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $key = '_'.$key;
            $this->$key = $value;
        }
    }
}