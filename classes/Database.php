<?php

class Database {

    private $connection;

    function __construct(){
        try {
            $this->connection = new PDO("mysql:host=". CONFIG['db_hostname'] . ";dbname=" . CONFIG['db_name'] . ";charset=utf8", CONFIG['db_username'], CONFIG['db_password']);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    // Select
    public function select(string $sql, array $param = []) : array {
        // example SELECT * FROM users WHERE id = :id
        $statement = $this->connection->prepare($sql);
        // example $param = ["id" => 666];
        $statement->execute($param);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insert
    public function insert(string $sql, array $param = []) : int {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $this->connection->lastInsertId();
    }

    // Remove
    public function remove(string $sql, array $param = []) : bool {
        $statement = $this->connection->prepare($sql);
        $statement->execute($param);
        return $statement->rowCount();
    }

    function __destruct() { $this->connection = null; }

}