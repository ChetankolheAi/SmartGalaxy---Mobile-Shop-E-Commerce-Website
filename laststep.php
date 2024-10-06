<?php
session_start();
include('demo.php');

$username=$_SESSION['username'];
$user_pass=$_SESSION['userpass'];

date_default_timezone_set('Asia/Kolkata'); // Set to Indian Standard Time (IST)
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


// if (isset($_GET['productid'])) {
//     $productid = $_GET['productid'];
//     $numericArray = json_decode(urldecode($productid), true);
    
//     if(count( $numericArray)==1){
//         $item_id=$item1;
//     }
//     elseif(count( $numericArray)==2){
//         $item_id = $item2;
//     }
//     elseif(count( $numericArray)==3){
//         $item_id=$item3;
//     }
//     elseif(count( $numericArray)==4){
//         $item_id = $item4;
//     }
//     elseif(count( $numericArray)==5){
//         $item_id = $item5;
//     }
//     $Item_count=count($numericArray);
//     for ($i = 0; $i < count( $numericArray); $i++) {
                // echo "$numericArray[$i]";
                // if($i==0){
                //     $item1=$numericArray[0];
                // }
                // elseif($i==1){
                //     $item2=$item1.",".$numericArray[1];
                // }
                // elseif($i==2){
                //     $item3=$item2.",".$numericArray[2];
                // }
                // elseif($i==3){
                //     $item4=$item3.",".$numericArray[3];
                // }
                // elseif($i==4){
                //     $item5=$item4.",".$numericArray[4];
                // }  
                
                
    // }

   

   









// else{
//     echo"<script> alert('Login or register user to add item in cart')</script>";
//     echo "<script>window.open('home1.php','_self')</script>";
// }
    // $productid= $numericArray[$i];
       
        // if(mysqli_num_rows($display_product1)>0){
        //     while($row = mysqli_fetch_assoc($display_product1)){
// $display_product1 = mysqli_query($conn, "SELECT * FROM `shopnow` WHERE `id`='$productid'");
        // $no =1;,'$Delivery_date','$Order_status',Delivery_date,Order_statusTotal_bill_price,Item_count,'$Total_bill,'$Item_count'
?> 
        <script>
    // Redirect using JavaScript

</script>