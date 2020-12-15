<?php

class Dbh {
    private $host = "studmysql01.fhict.local";
    private $user = "dbi419594";
    private $pwd = "Nyalomalom77";
    private $dbName = "dbi419594";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        // setting fetch mode to associative array
        $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}


