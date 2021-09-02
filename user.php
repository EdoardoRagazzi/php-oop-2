<?php

class User {
    public $name;
    public $surname;
    public $age;
    public $discount;

    function __construct($_name,$_surname,$_age,$_discount){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        $this->discount = $_discount;
    }
    public function getFullName(){  
        return  $this->name . ' ' . $this->surname;
    }
}

//It's not essential  to close php
?> 