<?php

include("dbinfo.inc.php");

include("functions.inc.php");

if(isset($_POST["btnSignin"])){
    $email = $_POST["email"];
    $password = $_POST["pwd"];
}




$isFieldEmpty = isFieldEmpty($email,$password);

if($isFieldEmpty!= false){
    header("location:../signin.php?error=emptyinputs");
    exit();
}

$isLogged = login($email,$password,$conn);

if($isLogged != false){
   
    header("location:../userdashboard.php");
}
else{
    header("location:../signin.php?error=wrongcredentials");
}


