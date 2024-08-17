<?php
session_start();
include ("demo.php");
if(isset($_POST['add_product']))
{
//   $id = $_POST['id'];
  $itemname = $_POST['itemname'];
  $itemBrand = $_POST['itemBrand'];
  $itemos = $_POST['itemos'];
  $cpumodel = $_POST['cpu_model'];
  $screen_size = $_POST['screen_size'];
  $itemstorage = $_POST['itemstorage'];
  $itemstorage2 = $_POST['itemstorage2'];
  $itemprice = $_POST['itemprice'];
  $itemprice2 = $_POST['itemprice2'];
  $MRP1 = $_POST['MRP1'];
  $MRP2= $_POST['MRP2'];

  $Resolution= $_POST['Resolution'];
$itemprice = str_replace('$', '', $itemprice);
//image1
  $itemimage = $_FILES['itemimage']['name'];//$_FILES inbuild function in tkae image file input
  $itemimage_temp_name = $_FILES['itemimage']['tmp_name'];//temporary name of file 
  $itemimage_folder = 'img_db/' .$itemimage;
  //image2
  $itemimage2 = $_FILES['itemimage2']['name'];//$_FILES inbuild function in tkae image file input
  $itemimage_temp_name2 = $_FILES['itemimage2']['tmp_name'];//temporary name of file 
  $itemimage_folder = 'img_db/' .$itemimage2;
  //image3
  $itemimage3 = $_FILES['itemimage3']['name'];//$_FILES inbuild function in tkae image file input
  $itemimage_temp_name3 = $_FILES['itemimage3']['tmp_name'];//temporary name of file 
  $itemimage_folder = 'img_db/' .$itemimage3;
  //image4
  $itemimage4 = $_FILES['itemimage4']['name'];//$_FILES inbuild function in tkae image file input
  $itemimage_temp_name4 = $_FILES['itemimage4']['tmp_name'];//temporary name of file 
  $itemimage_folder = 'img_db/' .$itemimage4;

  $quantity = $_POST['itemquantity'];


  $insert_query = mysqli_query($conn, "INSERT INTO `shopnow` ( name,brandname,item_os,cpu_model,screen_size, storage,storage2, price,MRP1,price2,MRP2, image,image2,image3,image4, quantity) 
                                    VALUES ( '$itemname','$itemBrand','$itemos','$cpumodel','$screen_size','$itemstorage','$itemstorage2' , '$itemprice','$MRP1','$itemprice2','$MRP2', '$itemimage','$itemimage2','$itemimage3','$itemimage4', '$quantity')")
                                    or die(mysqli_error($conn));

  if($insert_query)
  {
   //to move the image file to folder
   move_uploaded_file($itemimage_temp_name,$itemimage_folder);
   echo "<script type='text/javascript'> alert('inserted succesfully')</script>";
  }
  else{
   echo "there is some error problem";
  }
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
         <input class="text_input"  type="text" placeholder="Enter Item brand" name="itemBrand">
         <input class="text_input"  type="text" placeholder="Enter operating system" name="itemos">
         <input class="text_input"  type="text" placeholder="Enter Processor" name="cpu_model">
         <input class="text_input"  type="text" placeholder="Enter Screen Size" name="screen_size">
         <input class="text_input"  type="text" placeholder="Enter storage space in form of (ram/internal)GB 1 " name="itemstorage">
         <input class="text_input"  type="text" placeholder="Enter storage space in form of (ram/internal)GB 2 " name="itemstorage2">
         <input class="text_input" type="text" placeholder="Enter Item Price" name="itemprice">
         <input class="text_input" type="text" placeholder="Enter Item MRP" name="MRP1">
         <input class="text_input" type="text" placeholder="Enter Item Price" name="itemprice2">itemprice2
         <input class="text_input" type="text" placeholder="Enter Item MRP 2" name="MRP2">
         <input class="text_input" type="file" placeholder="uplode image 1" name="itemimage" required accept="image/png,image/jpeg,image/jpg">
         <input class="text_input" type="file" placeholder="uplode image 2" name="itemimage2" required accept="image/png,image/jpeg,image/jpg">
         <input class="text_input" type="file" placeholder="uplode image 3" name="itemimage3" required accept="image/png,image/jpeg,image/jpg">
         <input class="text_input" type="file" placeholder="uplode image 4" name="itemimage4" required accept="image/png,image/jpeg,image/jpg">
         <input class="text_input" type="text" placeholder="Enter Resolution" name="Resolution">

         <input class="quantity" type="number" value="1"  min="1" max="10" name="itemquantity">
         <input class="button"type="submit" value="Upload" name="add_product">
    </form>
</section>
</body>
</html>