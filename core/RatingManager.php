<?php
require_once 'Database.php';
class RatingManager extends Database {
    public static function tableCheck() {
        return 'rating';
    }
    public function add($data) {
    }
    public function updateById($id, $data) {
    }
}