<?php

namespace app\model;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

abstract class Connection{


    protected function connectDB(){
        try{
            $connect = new \PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DB']}",$_ENV['USER'],$_ENV['PASS']);
            return $connect;
            
        }
        catch(\PDOException $error){
            return $error->getMessage();
        }
    }
}