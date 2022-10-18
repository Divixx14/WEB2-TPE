<?php

class MainModel{
    protected $db;

    function __construct(){
        $this->db = $this->conect();
    }
    
    protected function conect(){
        return new PDO('mysql:host=localhost;'.'dbname=tpe_web;charset=utf8', 'root', '');
    }
}    