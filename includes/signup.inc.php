<?php

include("dbinfo.inc.php");

include("functions.inc.php");

if(isset($_POST["btnSignup"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $rePassword = $_POST["repwd"];
    $telephone = $_POST["tele"];
    $nic = $_POST["nic"];
}

$isFieldEmpty = isSignupFieldEmpty($name,$email,$password,$rePassword,$telephone,$nic);


if($isFieldEmpty!= false){
    header("location:../signup.php?error=emptyinputs");
    exit();
}

$isUserAlreadyExists = checkUserAlreadyExists($conn,$email);


if($isUserAlreadyExists != false){
    header("location:../signup.php?error=userAlreadyRegistered");
    exit();
}

 if($password!= $rePassword){
    header("location:../signup.php?error=passwordmissmatch");
    exit();

 }

 $isRegistered = register($conn,$name,$email,$password,$telephone,$nic);

 if($isRegistered != false){
    header("location:../signin.php");
 }
 else{
    header("location:../signup.php?error=registrationfailed");
    exit();
 }

