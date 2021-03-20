<?php
require_once 'Database.php';
class UserManager extends Database {
    public static function tableCheck() {
        return 'user';
    }
    public function add($data) {
    }
    public function updateById($id, $data) {
    }
}