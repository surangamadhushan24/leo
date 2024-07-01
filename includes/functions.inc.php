<?php

include("dbinfo.inc.php");

function isFieldEmpty($email,$password){
   
    if(empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result= false;
    }
    return $result;
}

function isSignupFieldEmpty($name,$email,$password,$rePassword,$telephone,$nic){
    if(empty($name) || empty($email) || empty($password) || empty($rePassword)|| empty($telephone) ||empty($nic) ){
        $result = true;
    }
    else{
        $result= false;
    }
    return $result;
}

function login($email,$password,$conn){
    
    $sql = "select * from members where mail='$email' and m_password = '$password'"; 
    $retval = mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0){
        while($row = mysqli_fetch_assoc($retval)){
            $name = $row["name"];
        }
        session_start();
        $_SESSION["name"] = $name;
        return true;
        

    }else{
        return false;
    }
    
   
}

function checkUserAlreadyExists($conn,$email){
    $sql = "SELECT * FROM members WHERE mail='$email'" ;
    $retval = mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0){
        return true;
    }
    else{
        return false;
    }

}

function register($conn,$name,$email,$password,$telephone,$nic){
    $sql = "INSERT INTO  members(NIC,name,mail,telephone,m_password) VAlUES('$nic','$name','$email',$telephone,$password)" ;
    $retval = mysqli_query($conn,$sql );
    mysqli_close($conn);
   
    if(! $retval ) {
       return false;
    }
    else{
        return true;
    }
      
    
}