<?php
include('demo.php');
$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
if(isset($_GET['delete'])&&isset($_GET['m'])){
    $delete_id=$_GET['delete'];
    
    $user_pass=$_GET['m'];
    $delete_query=mysqli_query($conn1 ,"Delete from `$user_pass` where itemid=$delete_id") or die("Query failed");
    if($delete_query){
        echo "product deleted";
        header('location:Addtocart.php');
    }
    else{
        echo "product not deleted";
        header('location:Addtocart.php');
    }
    echo "$delete_id";
}
if(isset($_GET['deleteorder'])){
   $orderid=$_GET['deleteorder'];
    
    $delete_query=mysqli_query($conn ,"Delete from `orders` where orderID='$orderid'") or die("Query failed");
    if($delete_query){
        echo "product deleted";
        header('location:orders.php');
    }
    else{
        echo "product not deleted";
        header('location:orders.php');
    }
    echo "$delete_id";
}
?>