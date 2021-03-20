<?php
abstract class Db {
    private function dbConnect($username, $password) {
        try {
            return new \PDO('mysql:host=localhost;dbname=prosit2_4_7;port=3308;charset=utf8', $username, $password);
        } catch (Exception $e) {
            echo "DB unfound";
            die();
        }
    }
    abstract public function getAll();
    abstract public function getOneById($id);
    abstract public function getByAttribute($attribute, $data);
    abstract public function add($data);
    abstract public function deleteById($id);
    abstract public function updateById($id, $data);
}