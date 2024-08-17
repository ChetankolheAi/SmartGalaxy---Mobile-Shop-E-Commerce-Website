<?php
$conn = mysqli_connect("localhost","root","","chetanlogin")or die(mysqli_error());
// if(isset($_POST['add_product']))
// {
//         // $id = $_POST['id'];
//         $name = $_POST['name'];
//         $sql = "SELECT * FROM `products` WHERE  `name` LIKE '$name%'";
//         $result = mysqli_query($conn , $sql);

//         //to fetch data from the data base
//         $num = mysqli_num_rows($result);
//         echo $num. " records found in the database<br>";
//         $no =1;
//         if($num>0){
//             while($row = mysqli_fetch_assoc($result)){
//                 echo $no ."        username  is " . $row['name'] . "   " . $row['price'] .    "   ". $row['image'];
//                 echo "<br>";
//                 $no = $no+1;
//             }
//             }
//         }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <form action="" class="add_product" method="post" enctype="multipart/form-data">
     <input class="text_input" type="text" placeholder="Enter Item ID" name="id"> 
    <input class="text_input" type="text" placeholder="Search" name="name">
    <input class="button"type="submit" value="Upload" name="add_product">
    </form>
</body>
</html> -->