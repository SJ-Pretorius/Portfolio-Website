<?php
class Database {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8mb4", "portfolio", "51375137sj");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    }

    public function runQuery($query, $params = null) {
        $statement = $this->pdo->prepare($query);
        if ($params) {
            $statement->execute($params);
        } else {
            $statement->execute();
        }
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
