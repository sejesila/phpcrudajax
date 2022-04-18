<?php

class Database
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "phpcrud";

    protected $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->server};
             dbname={$this->dbname}; charset=utf8";

            $options = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $ex){
        echo "Connection error" . $ex->getMessage();
    }

    }
}
