<?php

class dbh{

    private $db = "studies";
    private $host = "localhost";
    private $user = "root";
    private $pword = "12345";

    protected function connect($db, $host, $user, $pword){

        $sql = 'mysql:dbname=' . $this->db . ';host=' . $this->host;
        $pdo = new PDO($sql, $this->user, $this->pword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

    }

}

?>