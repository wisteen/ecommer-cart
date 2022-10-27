<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    # code...
    include_once "db.php";
    $status = "Offline";
    $date = date("l jS \of F Y h:i:s A");
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);

    $sql_query = mysqli_query($conn, "UPDATE signin SET last_login = '".$date."' ");
    if ($sql_query) {
        # code...
        session_unset();
        session_destroy();
        header("location:../signin.html");
    }

} else {
    header("location:../signin.html");

}

?>