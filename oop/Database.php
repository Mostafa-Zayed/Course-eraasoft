<?php

class Database
{
    public $connection;

    public function __construct($localHost,$userName,$password,$databaseName)
    {
        $this->connection = mysqli_connect($localHost,$userName,$password,$databaseName);
        //$this->dbConnection($localHost,$userName,$password,$databaseName);
    }


//    public function dbConnection($localhost,$userName,$password,$databaseName)
//    {
//        $this->connection = mysqli_connect($localhost,$userName,$password,$databaseName);
//    }
}

$connect = new Database('localhost','root','','course');
echo '<pre>';
var_dump($connect);
echo '</pre>';