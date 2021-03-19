<?php
class Table {
    protected $_id;
    public function __construct(array $data) {
        $this->hydrate($data);
    }
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $key = '_'.$key;
            $this->$key = $value;
        }
    }
}