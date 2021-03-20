<?php
require_once 'Database.php';
class PromotionManager extends Database {
    public static function tableCheck() {
        return 'Promotion';
    }
    public function add($data) {
    }
    public function updateById($id, $data) {
    }
}