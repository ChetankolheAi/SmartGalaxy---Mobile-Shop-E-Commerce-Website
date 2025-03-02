<?php
session_start();
include('demo.php');

$username=$_SESSION['username'];
$user_pass=$_SESSION['userpass'];

date_default_timezone_set('Asia/Kolkata'); 
$Order_date = date('Y-m-d');
$Order_time = date('H:i:s');
if (isset($_GET['m'])&&isset($_GET['img'])) {
    $total_paid=$_GET['m'];
    $payment_ss=$_GET['img'];

}
else{
    echo "sorry";
}


$display_product = mysqli_query($conn, "SELECT * FROM `login` WHERE `username`='$username'");
if(mysqli_num_rows($display_product)>0){

    while($row = mysqli_fetch_assoc($display_product)){
      $coustomer_id = $row['id'];
    }

}
if (isset($_GET['productid'])) {
    $encodedData = $_GET['productid'];
    $jsonData = urldecode($encodedData);
    $productIds = json_decode($jsonData, true);
 
    if (json_last_error() === JSON_ERROR_NONE) {
        $item_count=0;
        foreach ($productIds as $id) {
            $item_count=$item_count+1;
        }

        foreach ($productIds as $id) {
            $uid=htmlspecialchars($id);
            $query = "INSERT INTO orders (itemids,coustumer_id,Total_bill_price,payment_ss,item_count,Order_date,Order_time) VALUES ('$uid','$coustomer_id','$total_paid','$payment_ss','$item_count','$Order_date','$Order_time')";
            $result1=mysqli_query($conn, $query);

           
        }
    } 
    
    if($result1){
        $encodedValue1 = urlencode($total_paid);
        // $url = "orders.php?param1={$productid}";
        echo"<script> alert('Ordered Successfully ')</script>";
        echo "<script>window.open('orders.php','_self')</script>";
    }
    else{
        echo"<script> alert('Try again')</script>";
    }
}
else 
{
    echo "No 'productid' parameter found in the query string.";
}











