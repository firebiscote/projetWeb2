<?php
require_once 'Database.php';
class OfferManager extends Database {
    public static function tableCheck() {
        return 'offer';
    }
    public function add($data) {
    }
    public function updateById($id, $data) {
    }
}