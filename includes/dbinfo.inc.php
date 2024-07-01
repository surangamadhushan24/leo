<?php

$dbname = "leo";
$username="root";
$password = "";
$hostname = "localhost";

$conn = mysqli_connect($hostname,$username,$password);

mysqli_select_db($conn,$dbname);

// session_start();

if(!$conn){
    die("connnection failed :".mysqli_connect_error());
}