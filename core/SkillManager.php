<?php
require 'db.php';
class SkillManager extends Db {
    public function getAll() {
        $db = $this->dbConnect('root', '');
        $query = $db->prepare('SELECT * FROM skill');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getOneById($îd) {
        
    }
    public function getByAttribute($attribute, $data) {

    }
    public function add($data) {

    }
    public function deleteById($id) {

    }
    public function updateById($id, $data) {

    }
}