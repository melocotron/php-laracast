<?php

require 'functions.php';
// require 'router.php';


// connect to our mySQL database

class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        echo "bnreathing";
    }

}

$person = new Person();

$person->name = "John";
$person->age = 25;

$person->breathe();

dd($person);














class Database
{
    public $db;
    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'blog');
    }
}

$db = new Database();