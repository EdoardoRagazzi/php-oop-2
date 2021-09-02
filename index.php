<?php
require_once 'Product.php';
//Include the file User.php 
// require_once 'User.php';
require_once 'Admin.php';
//Creating an instance called edo with the variables added
$edo = new User('Edo','Ragazzi',0);
$console = new Product(23, 'Playstation' , 300 , 'console game' );
//Instance Admin include User
$admin = new Admin( 'marco', 'baggio',0,'positive','edbd',3);  

//Calling the function
$edo->makeSale(70);
$sale = $edo->makeSale(70);

//Calling function makeSale wiuth adding of grade for admin;
$admin->makeSale(66 );    
$saleAdmin = $admin->makeSale(66);

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

                    <h1>Nome Utente: <?php echo $edo->getFullName();   ?></h1>

                    <p> <?php echo 'Hai uno sconto del :' . ' ' . $sale . ' ' . 'su una '. ' ' . $console->name . ' ' . ($console->price - $saleAdmin)?></p>

                    <p>Admin Server: <?php echo $admin->authorization . ' & password :' . $admin->password .' '. 'con uno sconto del: '. $saleAdmin?> </p>


    
</body>
</html>