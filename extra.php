<?php
session_start();
include ("demo.php");
$conn1 = mysqli_connect("localhost","root","","user_cart")or die(mysqli_error());
// $user_pass = "okkop";


if(isset($_POST['add_product'])&&isset($_GET['userpass']))
{
   
   
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
$user_pass=$_GET['userpass'];
$itemname = $_POST['itemname'];
$itemprice = $_POST['itemprice'];
$itemprice = str_replace('$', '', $itemprice);
$itemimage = $_FILES['itemimage']['name'];//$_FILES inbuild function in tkae image file input
$itemimage_temp_name = $_FILES['itemimage']['tmp_name'];//temporary name of file 
$itemimage_folder = 'img_db/' .$itemimage;
$quantity = $_POST['itemquantity'];


$insert_query=mysqli_query($conn1,"insert into `$user_pass`(name,price,image,quantity) values ( '$itemname','$itemprice','$itemimage', '$quantity')")or die("insert query failed");
if($insert_query)
{
 //to move the image file to folder
 move_uploaded_file($itemimage_temp_name,$itemimage_folder);
 echo "<script type='text/javascript'> alert('inserted succesfully')</script>";
}
else{
 echo "there is some error problem";
}
$url = "Addtocart.php?userpass=".$user_pass;
   header('Location:'. $url);
}
//   if(!empty($id) && !empty($itemname) && !empty($itemprice))
//   {
//     $query = "INSERT INTO login (id,name,price,image,quantity) VALUES ('$id', '$itemname','$itemprice','$itemimage', '$quantity')";
//     mysqli_query($conn, $query);
//     echo"<script type='text/javascript'> alert('Successfully Register')</script>";

//   }
//     else if(empty($itemimage)){
//      echo "<script type='text/javascript'> alert('ima')</script>";
//     }
// //   if(!empty($Username) && !empty($passward) && !empty($confirmpassward)){
// //     echo"<script type='text/javascript'> alert('Successfully Register')</script>";
//     else{
//         echo "<script type='text/javascript'> alert('Enter The Valid Data')</script>";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            font-family: 'Spartan',sans-serif;
          justify-content: center;
          align-items: center;
        
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Spartan', sans-serif;
        }
        
         p {
            font-size: 16px;
        
            margin: 15px 0 20px 0;
         }
         .section-m1{
            margin: 40px 0;
         }
         .section-p1{
            padding: 40px 80px;
         }
         h1{
            font-size: 50px;
            line-height: 64px;
            color: #222;
        
         }
         h2 {
            font-size: 46px;
            line-height: 54px;
            color: #222;
         }
         h4{
            font-size: 20px;
            color: #222;
         }
         h6 {
            font-weight: 700;
            font-size: 12px;
         }
         .button{
            background-color:#84c89c;
    width: 100px;
    height: 32px;
    border-radius: 12px;
    border-color:#368576; ;
         }
         #add_product{
            display: flex;
            flex-direction: column;
            width: 100%;
            padding: 40px 40px;
            line-height: 40px;
            justify-content: space-between;
            background: transparent;
            text-align: left;
            border:1px solid white;
            border-radius: 10px;
            padding: 15px 25px;
            color: black;
            backdrop-filter: blur(7px);
            font-family: 'Courier New', Courier, monospace;
            z-index: 10;
            align-items:left;
         }
         #add_product .quantity{
            width: 60px;
            color: black;
            height: 35px;
         }
         #add_product .text_input{
            width: 60%;
            border:1px solid rgb(0, 0, 0);
            border-radius: 10px;
            padding: 30px 40px;
         }
      

    </style>
</head>
<body>
<section id="add_product">
    <h4>Uplode Item image</h4>

    <form action="" class="add_product" method="post" enctype="multipart/form-data">
         <!-- <input class="text_input" type="text" placeholder="Enter Item ID" name="id"> -->
         <input class="text_input"  type="text" placeholder="Enter Item Name" name="itemname">
         <input class="text_input" type="text" placeholder="Enter Item Price" name="itemprice">
         <input class="text_input" type="file" placeholder="uplode image" name="itemimage" required accept="image/png,image/jpeg,image/jpg">
         <h5>Enter the Quantity</h5>
         <input class="quantity" type="number" value="1"  min="1" max="10" name="itemquantity">
         
    <input type="submit" value="Upload" name="add_product" class="button">

    </form>
    
</section>
</body>
</html>