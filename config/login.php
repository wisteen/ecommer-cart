<?php
session_start();

include_once "db.php";
//  $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);

 if(!empty($password) && !empty($email)){


 } else {
    echo "All inputs field are required!";
 }




?>