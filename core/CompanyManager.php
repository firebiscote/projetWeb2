<?php
require_once 'Database.php';
class CompanyManager extends Database {
    public static function tableCheck() {
        return 'company';
    }
    public function add($data) {
    }
    public function updateById($id, $data) {
    }
}