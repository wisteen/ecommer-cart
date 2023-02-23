
<?php

if(isset($_POST['submit'])){
    // Count total files
    $countfiles = count($_FILES['file']['name']);
    
    echo $countfiles;
    // // Looping all files
    // for($i=0;$i<$countfiles;$i++){
    //   $filename = $_FILES['file']['name'][$i];
      
    //   // Upload file
    //   move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
       
    // }
   } 
<style>
 table{
    font-family:arial, sans-serif;
    border-collapse:collapse;
    width:100%;
 }

td, th {
    border: 1px solid #dddddd;
    text-align:left;
    padding:8px;
}

tr:nth-child(even){
    background:#ddd;
}

</style>

<?php
require_once "db.php";

$name2 =rand(10000000, 123456789);

if(isset($_POST['submit']) && isset($_POST['ProductName'])){

    // information of the users and product
    $username = $_POST['uname'];
    $userphone = $_POST['phone'];
    $useremail = $_POST['email'];
    $useradress = $_POST['uaddress'];

    $productname = $_POST['ProductName'];
    $productsize = $_POST['size'];
    $productquality = $_POST['quality'];
  

 

    $countfiles = count($_FILES['file']['name']);
    
    $date = date("l jS \of F Y h:i:s A");

    // $fileSize = filesize($_FILES['file']['name']);
    if ($countfiles < 4) {
        // Looping all files
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $name = pathinfo($filename, PATHINFO_FILENAME);

    if($ext == "jpg" || $ext == "png" || $ext == "gif") {
        // Upload file

        move_uploaded_file($_FILES['file']['tmp_name'][$i],'../img/'.$name2.$filename);
        // echo $name2 ."<br>";
        // echo $filename ."<hr>";
        // echo $productname ."<hr>";

        // get items ready
        // echo "<table> <tr><th>Products</th><th>size</th> <th>Quality</th></tr>"; 

       $sql_img = "INSERT INTO `product_img`(`image1`, `unique_id2`) VALUES ('".$name2.$filename."','".$name2."')";
       $query_img = mysqli_query($conn, $sql_img);

      
       
            // echo "</table>";
        
    } else{
        echo "<mark><b>";
        echo $name."</b></mark> is not an image, please change!<br>";
    }
         
      }
    } else {
        echo "only 3 files are needed";
    }

   
    


    for ($i=0; $i < count($productname); $i++) {
        
        $sql = "INSERT INTO `ordering`(`status`,`name`, `phone`, `address`, `email`, `unique_id`, `time_date`, `productname`, `productsize`, `productquantity`)
         VALUES ('pending','".$username."','".$userphone."','".$useradress."','".$useremail."','".$name2."','".$date."','".$productname[$i]."','".$productsize[$i]."','".$productquality[$i]."')";

        $query = mysqli_query($conn, $sql);
         
   }

   if($query){
    
    header("location:../confirm.php?uniqueid={$name2}");
   } else {
    echo "problem";

   }

   } else {
    echo "You need to add to your cart";
   }
?>
   
