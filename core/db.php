<?php
abstract class Db {
    private function dbConnect() {
        try {
            return new \PDO('mysql:host=localhost;dbname=prosit2_4_7;port=3308;charset=utf8', 'root', '');
        } catch (Exception $e) {
            echo "DB unfound";
            die();
        }
    }
    abstract public function getAll();
    abstract public function getOneById($îd);
    abstract public function getByAttribute($attribute, $data);
    abstract public function add($data);
    abstract public function deleteById($id);
    abstract public function updateById($id, $data);
}