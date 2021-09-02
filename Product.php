<?php

class Product{
    public $id;
    public $name;
    public $price;
    public $description;

    public function __construct($_id,$_name,$_price,$_description){
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
    }
}