<?php


require_once 'User.php';

class Admin extends User {
    public $authorization;
    public $password;
    function __construct($_name,$_surname,$_discount,$_authorization,$_password){
        //Way to call a construct of file User.php just on the 2 variables checked in this case name and surname
        parent::__construct($_name,$_surname,$_discount);
        $this->authorization = $_authorization;
        $this->password = $_password;
    }
}