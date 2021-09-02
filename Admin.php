<?php


require_once 'User.php';

class Admin extends User {
    public $authorization;
    public $password;
    public $grade;

    function __construct($_name,$_surname,$_discount,$_authorization,$_password,$_grade){
        //Way to call a construct of file User.php just on the 2 variables checked in this case name and surname
        parent::__construct($_name,$_surname,$_discount);
        $this->authorization = $_authorization;
        $this->password = $_password;
        $this->grade = $_grade;
    }
    //Function Polimorfismo--> change of function with diufferent value
    public function makeSale($age){
        if($age > 65){
           return $this->discount = 60;
        } else {
           return $this->discount = $this->grade * 5;
        }
    }
}