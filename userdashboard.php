<?php 
    include('./includes/dbinfo.inc.php');
    include('./header.php');
    include('home.php');
    if($_SESSION["name"] == null){
        header("location:home.php");
        exit();
    }
    
?>

<link rel="stylesheet" href="./css/userdashboard.css">
</head>

<!-- <?php 
include('navbar.php');

?> -->