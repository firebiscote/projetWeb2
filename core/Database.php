<?php
abstract class Database {
    public static function lauchCheck() {
        return static::tableCheck();
    }
    private function dbConnect($username, $password) {
        try {
            return new \PDO('mysql:host=localhost;dbname=prosit2_4_7;port=3308;charset=utf8', $username, $password);
        } catch (Exception $e) {
            echo 'DB unfound';
            die();
        }
    }
    private function executeQuery($username, $password, $query) {
        $database = $this->dbConnect($username, $password);
        $query = $database->prepare($query);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getAll() {
        return $this->executeQuery('root', '', ('SELECT * FROM'.self::lauchCheck()));
    }
    public function getOneById($id) {
        return $this->executeQuery('root', '', ('SELECT * FROM'.self::lauchCheck().'WHERE ID = '.$id));
    }
    public function getByAttribute($attribute, $data) {
        return $this->executeQuery('root', '', ('SELECT * FROM'.self::lauchCheck().'WHERE '.$attribute.' = '.$data));
    }
    public function deleteById($id) {
        return $this->executeQuery('root', '', ('DELETE FROM'.self::lauchCheck().'WHERE ID = '.$id));
    }
    abstract public function add($data);
    abstract public function updateById($id, $data);
}