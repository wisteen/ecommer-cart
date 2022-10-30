<?php
session_start();

include_once "db.php";
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);

 if(!empty($password) && !empty($email)){
    $query = mysqli_query($conn, "SELECT * FROM signin WHERE email = '{$email}' AND password = '{$password}'");
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['unique_id'] = $row['id'];
            echo "success";
        } else{
            echo "Wrong Email or password";
        }

 } else {
    echo "All inputs field are required!";
 }




?>