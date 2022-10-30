<div class="content" style="background:linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(image/Nice\ Background.jpg);">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-user fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2"><a href="config/logout.php?unique_id=<?php echo $row['id']; ?>"> Log out</a>  </p>
                            <h6 class="mb-0"><?php echo $row['name']; ?></h6>
                        </div>
                    </div>
                </div>

                <?php
            require_once "config/db.php";

            $counter = mysqli_query($conn, "SELECT * , count(*) FROM ordering GROUP BY unique_id");

            $count  = mysqli_num_rows($counter);
                # code...
            $delivery = mysqli_query($conn, "SELECT * , count(*) FROM ordering WHERE status = 'delivered' GROUP BY unique_id ");

            $delivery  = mysqli_num_rows($delivery);


            # code...
            $images = mysqli_query($conn, "SELECT image1 FROM product_img");

            $images  = mysqli_num_rows($images);
                ?>

                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-shopping-cart fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Orders</p>
                            <h6 class="mb-0"><?=$count?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-car fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Delivery</p>
                            <h6 class="mb-0"><?=$delivery?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Images</p>
                            <h6 class="mb-0"><?=$images?></h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>