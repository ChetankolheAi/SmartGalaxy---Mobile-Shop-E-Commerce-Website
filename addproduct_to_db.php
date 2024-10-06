<?php
session_start();
include ("demo.php");
$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
// $user_pass = "okkop";
$user_pass='ok12121';
if(isset($_SESSION['userpass'])){
   $user_pass=$_SESSION['userpass'];
}
else{
   echo"<script> alert('Login or register to add item in cart')</script>";
   echo "<script>window.open('home1.php','_self')</script>";
}
if(isset($_GET['itemid'])){
   $itemid=$_GET['itemid'];
}
if (isset($_GET['data'])){
      // Retrieve the 'data' parameter
      $data = $_GET['data'];
      print_r($data);
}
      // URL-decode the data if it was URL-encoded
      // $decodedJson = urldecode($data);
  
      // // Decode the JSON string back to a PHP array
      // $decodedArray = json_decode($decodedJson, true);
  
      // // Check for JSON decoding errors
      // if (json_last_error() === JSON_ERROR_NONE && is_array($decodedArray)) {
      //     // Output or use the array
      //     echo "<pre>";
      //     print_r($decodedArray);
      //     echo "</pre>";
      // } else {
      //     echo "Error decoding JSON or 'data' is not a valid array.";
      // }
  else {
      echo "No data parameter provided.";
  }
//   $id = $_POST['id'];
//   $itemname = $_POST['itemname'];
//   $itemprice = $_POST['itemprice'];
// $itemprice = str_replace('$', '', $itemprice);
//   $itemimage = $_FILES['itemimage']['name'];//$_FILES inbuild function in tkae image file input
//   $itemimage_temp_name = $_FILES['itemimage']['tmp_name'];//temporary name of file 
//   $itemimage_folder = 'img_db/' .$itemimage;
//   $quantity = $_POST['itemquantity'];


//   $insert_query=mysqli_query($conn,"insert into `products`(name,price,image,quantity) values ( '$itemname','$itemprice','$itemimage', '$quantity')")or die("insert query failed");
//   if($insert_query)
//   {
//    //to move the image file to folder
//    move_uploaded_file($itemimage_temp_name,$itemimage_folder);
//    echo "<script type='text/javascript'> alert('inserted succesfully')</script>";
//   }
//   else{
//    echo "there is some error problem";
//   }

$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
// $user_pass=$_GET['userpass'];

$display_product = mysqli_query($conn, "SELECT * FROM `shopnow` WHERE `id`='$itemid'");
// $no =1;
if(mysqli_num_rows($display_product)>0){

         $row = mysqli_fetch_assoc($display_product);
         $result2 = mysqli_query($conn1, "SELECT * FROM `$user_pass` WHERE `itemid`='$itemid'");
         $row_count = mysqli_num_rows($result2);
            if($row_count>0){
                  echo"<script> alert('item already add to cart')</script>";
                   echo "<script>window.open('Addtocart.php','_self')</script>";

            }
            else{
               $itemname= $row['name'];
               $itemprice= $row['price'];
               $itemimage = $row['image'];//$_FILES inbuild function in tkae image file input
               $quantity = $row['quantity'];
               $id= $row['id'];

               $insert_query=mysqli_query($conn1,"insert into `$user_pass`(itemid,name,price,image,quantity) values ('$id','$itemname','$itemprice','$itemimage','$quantity')")or die("insert query failed");
               if($insert_query)
               {
                  //to move the image file to folder
                  //  move_uploaded_file($itemimage_temp_name,$itemimage_folder);
                  echo"<script> alert('Added to cart successfully')</script>";
                   echo "<script>window.open('Addtocart.php','_self')</script>";
               
               }
               else{
                  echo"<script> alert('there is some error in inoput try again later')</script>";
                   echo "<script>window.open('Addtocart.php','_self')</script>";
                }
            // }
         }





      }

 
         
         
      
      // if()
      //    echo "<script>alert('Item already added to cart ')</script>";
      //    echo "<script>window.open('shopnow.php','_self')</script>";
   


// $itemprice = str_replace('$', '', $itemprice);
// $itemimage = $_FILES['itemimage']['name'];//$_FILES inbuild function in tkae image file input
// $itemimage_temp_name = $_FILES['itemimage']['tmp_name'];//temporary name of file 
// $itemimage_folder = 'img_db/' .$itemimage;
// $quantity = $_POST['itemquantity'];



?>
