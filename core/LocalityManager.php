<?php
require_once 'Database.php';
class LocalityManager extends Database {
    public static function tableCheck() {
        return 'locality';
    }
    public function add($data) {
    }
    public function updateById($id, $data) {
    }
}