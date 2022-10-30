<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location:signin.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wisteen pns panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/admin.css" rel="stylesheet">
</head>

<body >
    <?php
        include_once "config/db.php";
        $sql = mysqli_query($conn, "SELECT * FROM signin WHERE id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            # code...
            $row = mysqli_fetch_assoc($sql);
            
        }

    ?>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="" src="image/header-logo.png" alt="" style="width: 100px; height: 40px;">
                        <!-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> -->
                    </div>
                    <div class="ms-3">
                        <span>Active</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Home</a>
              
                    <a href="signup.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add new admin</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <?php include "config/head.php"; ?>


       <div class="container-fluid pt-4 px-4">

        <div class="row g-4 bg-white rounded d-flex align-items  p-4 mt-4">
            <!-- <div class="col-sm-12 ">-->
            <!-- <div class="">  -->
                
            <div class="col-sm-6 col-xl-6">

                    <h2 style='color:black'>
                    <img class="" src="image/header-logo.png" alt="" style="width: 400px; height: 100;">
                
                </h2>
            </div>
            <div class="col-sm-6 col-xl-6 ">
            

                <?php
                    if (isset($_GET['uniqueid'])) {
                        include_once "config/db.php";

                        $uid = mysqli_real_escape_string($conn, $_GET['uniqueid']);
                        $sql_query = mysqli_query($conn, "SELECT * FROM ordering WHERE unique_id = {$uid}");
                        if (mysqli_num_rows($sql_query) > 0) {
                            # code...
                            $print = mysqli_fetch_assoc($sql_query);

                            echo "<p style='display:block;'> <b>NAME:  </b> ". "   " .$print['name']."</span>\n";
                            echo "<br>";
                            echo "<b>TRANSACTION ID:  </b> <span> ". "   " .$print['unique_id']."TDX</span>";
                            echo "<br>";

                            echo "<b>PHONE NO:  </b> <span> ". "   " .$print['phone']."</span>";
                            echo "<br>";

                            echo "<b>ADDRESS:  </b> <span> ". "   " .$print['address']."</span>";
                            echo "<br>";

                            echo "<b>DATE:  </b> <span> ". "   " .$print['time_date']."</span>";
                            echo "<br>";

                            echo "<b>EMAIL:  </b> <span> ". "   " .$print['email']."</span>";

                            echo "<br>";

                            echo "<b>STATUS:  </b> <span style='text-transform: capitalize;'> ". "   " .$print['status']."</span>";
                            
                        } else{
                            echo "No data";
                        }

                    }

                ?>
           
                    
                    <?="<hr>"?>


                    
            </div>
            </div>
                <div class="row g-4 bg-white rounded d-flex align-items  p-4 mt-4">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-black">
                                    <th scope="col">Items</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Size</th>
                                    
                                </tr>
                            </thead>
                            <!-- <tbody> -->
                
                    <?php

                        $sqlItem = mysqli_query($conn, "SELECT * FROM ordering WHERE unique_id = {$uid}");
                        if (mysqli_num_rows($sqlItem) > 0) {
                            # code...
                           while($items = mysqli_fetch_assoc($sqlItem)){
                                echo "
                                <tr>
                                    <td>".$items['productname']."</td>
                                    <td>".$items['productsize']."</td>
                                    <td>".$items['productquantity']."</td>
                                   
                                </tr>
                                ";
                           }
                            
                        }



                    ?>
                    </table>
                </div>



                <div class="row g-4 bg-white rounded d-flex align-items  p-4 mt-4">
                    <h3 style="color:black;">OTHERS</h3>
                    <?php

                    include_once "config/db.php";

                    $sqlImg = mysqli_query($conn, "SELECT * FROM product_img WHERE unique_id2 = {$uid}");
                    if (mysqli_num_rows($sqlImg) > 0) {                     
                        while($image = mysqli_fetch_assoc($sqlImg)){
                        echo "
                        <div class='col-sm-4 col-xl-4 bg-black '>
                            <img src='img/".$image['image1']."' alt='' class='img-responsive responsive-img' style='width:300px;height:280px'>
                        </div>";

                        }
                    }
                    ?>
                </div>
            </div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Prestige Superstore</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="tel:09125442676" target="_blank">Wisteen Technology</a>
                            <br>Distributed By: <a href="#" target="_blank">Marvin</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
    </div>
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/chart/chart.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/tempusdominus/js/moment.min.js"></script>
     <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
     <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

     <!-- Template Javascript -->
     <script src="lib/main.js"></script>
</body>
</html>
