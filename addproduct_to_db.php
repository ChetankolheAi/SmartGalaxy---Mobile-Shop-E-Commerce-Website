<?php
session_start();
include ("demo.php");
$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
if(isset($_SESSION['userpass'])){
   $user_pass=$_SESSION['userpass'];
}
else{
   echo"<script> alert('Login or register to add item in cart')</script>";
   echo "<script>window.open('home1.php','_self')</script>";
}


if(isset($_SESSION['userpass'])){

   $user_pass=$_SESSION['userpass'];
}
else{
   echo"<script> alert('Login or register to add item in cart')</script>";
   echo "<script>window.open('home1.php','_self')</script>";
}
if(isset($_GET['itemid'])){
   $itemid=$_GET['itemid'];
   echo($itemid);
}
else{
   echo"<script> alert('Login or register to add item in cart')</script>";
   echo "<script>window.open('home1.php','_self')</script>";
}


$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
if($conn1){
   echo("connected");
}
else{
   echo("not connected");
}

$display_product = mysqli_query($conn, "SELECT * FROM `shopnow` WHERE `id`='$itemid'");

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
               $itemimage = $row['image'];
               $quantity = $row['quantity'];
               $id = $row['id'];
               echo($itemname);
               echo($itemprice);
               echo($itemimage);
               echo($quantity);
               echo($id);
               echo($user_pass);
              

               $insert_query=mysqli_query($conn1,"INSERT into `$user_pass` (itemid,userpass,name,price,image,quantity) values ('$id','$user_pass','$itemname','$itemprice','$itemimage','$quantity')");
               if($insert_query)
               {
                  
                  echo"<script> alert('Added to cart successfully')</script>";
                   echo "<script>window.open('Addtocart.php','_self')</script>";
               
               }
               else{
                  echo"<script> alert('there is some error in input try again later')</script>";
                   echo "<script>window.open('Addtocart.php','_self')</script>";
                }
            
         }





      }

 
         
         
      

?>
