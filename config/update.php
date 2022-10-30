<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    # code...
    include_once "db.php";
    $id = $_GET['id'];
    $data = $_GET['uniqueid'];

    
    $sql_query = mysqli_query($conn, "UPDATE `ordering` SET `status` = '".$data."' WHERE unique_id= {$id}");

    if ($sql_query) {
        // echo $id."\n";
        // echo $data;

        header("location:../admin.php");
    }

}
?>