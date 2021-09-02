<?php

//Include the file User.php 
require_once 'User.php';

$edo = new User('Edo','Ragazzi',0);
$edo->makeSale(70);
$sale = $edo->makeSale(70);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

 <!-- Calling variables of User Class ($edo->name . ' ' . $edo->surname) --- OR ---- calling the function GetFullName directly from User methods -->

                    <h1>Nome Utente:<?php echo $edo->getFullName();   ?></h1>
                    <p><?php echo 'Hai uno sconto del :' . ' ' . $sale ?></p>
    
</body>
</html>