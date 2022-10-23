<?php
// require_once "db.php";


try {
    include_once "db.php";
 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $date = date("l jS \of F Y h:i:s A");
//  echo $date;
    //code...
    if(!empty($name) && !empty($password) && !empty($email)){
        $sql = "INSERT INTO `signup`(`name`, `email`, `password`, `date_added`) 
        VALUES ('".$name."','".$email."','".$password."','".$date."')";
        $query = mysqli_query($conn, $sql);
    
        if($query){
            echo "You can now sign in!";
        } else {
            header("location:../error.php");
    
        }
    
     } else{
        echo "Please fill do not leave any input empty!";
     }

} catch (\Throwable $th) {
    //throw $th;
    header("location:../error.php");
}

?>