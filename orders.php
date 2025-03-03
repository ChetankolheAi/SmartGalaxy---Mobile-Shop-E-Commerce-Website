<?php
session_start();
$username = $_SESSION['username'];
$user_pass = $_SESSION['userpass'];
include ("demo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
.normal{
    height: 40px;
    width: 100%;
    color: white;
    background-color: #088178;
    border: 1px solid #044b46;
    border-radius: 05px;
}
footer{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #c2ffd5;
}
footer .col{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}
footer h4{
    font-size: 17px;
    padding-bottom: 20px;
}
footer p{
    font-size: 13px;
    margin: 0 0 8px 0;
}
footer a{
    font-size: 13px;
    text-decoration: none;
    color:#222;
    margin-bottom:10px;
}
footer .col a{
    color: black;
    font-family: "Courier New", Courier, monospace;
}
footer .install .row img{
    border-radius: 6px;
    cursor: pointer;
}
footer .follow{
    margin-top: 20px;
}
footer .follow i{
    color: #465b52;
    cursor: pointer;
}
footer .follow i:hover,
footer a:hover{
    color: #088178;
}
footer .copyright{
    width: 100%;
    text-align:center;
}
#banner {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background-color: black;
    height: 160px;
}
#banner button{
    left:30px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background-color:#84c89c;
    width: 120px;
    height: 40px;
    border-radius: 12px;
    border-color:#368576;
}
#banner h2{
    color: white;
}
#banner span{
    color: white;
}
#banner h4{
    color: white;
}
 @media (max-width: 650px){
}
#banner{
    margin-top: 60px;
}
#cart {
    overflow-x: auto;
}
#cart table{
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
    white-space: nowrap;
}
#cart table img{
    width: 70px;
}
#cart table td:nth-child(1){
    width: 100px;
    text-align: center;
}
#cart table td:nth-child(2){
    width: 150px;
    text-align: center;
}
#cart table td:nth-child(3){
    width: 250px;
    text-align: center;
}
#cart table td:nth-child(4),
#cart table td:nth-child(5),
#cart table td:nth-child(6){
    width: 150px;
    text-align: center;
}
#cart table td:nth-child(5) input{
    width: 70px;
    padding: 10px 5px 10px 13px;
}
#cart table thead{
    border: 1px solid #e2e9e1;
    border-left: none;
    border-right: none;
}
#cart table thead td{
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    padding: 18px 0;
}
#cart table tbody td{
    font-weight: 100;
    font-size: 13px;
    padding: 18px 0;
}
#cart-add{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
#coupon{
    width: 50%;
    margin-bottom: 30px;
}
#coupon h3,
#subtotal h3{
    padding-bottom: 15px;
}
#coupon input{
    padding: 10px 20px;
    outline: none;
    width: 60%;
    margin-right: 10px;
    border: 1px solid #e2e9e1;
}
#coupon button{
    background-color: #088178;
    color: white;
    width: 66px;
    height: 40px;
}
#subtotal{
    width: 50% ;
    margin-bottom: 30px;
    border: 1px solid #e2e9e1;
    padding: 30px;
}
#subtotal table{
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
}
#subtotal table td{
    width:50%;
    border: 1px solid #e2e9e1;
    padding: 10px;
    font-size: 13px;
}
@media (max-width:799px) {
    #cart-add {
        flex-direction: column;
    }
    #coupon{
        width: 100%;
    }
    #subtotal{
        width: 100%;
        padding: 20px;
    }
}
.cv {
    color: black;
}
.cv:hover {
    color: red;
}
@media (max-width: 650px){
    .section-p1 {
        padding: 40px 40px ;
    }
    h2 {
    font-size: 24px;
    line-height: 35px;
    color: #222;
}
h1 {
    font-size: 30px;
    line-height: 64px;
    color: #222;
}
h4 {
    font-size: 13px;
    color: #222;
}
}
</style>
</head>
<body>
    <header>
    <?php
    include("Navbar.php");
    ?>
    </header>
    <section id="banner">
        <h4>Extra Services</h4>
        <h2>Up to <span>65% Off</span> On Samsungs Mobiles</h2>
        <button>Explore More</button>
    </section>

    <section id="cart" class="section-p1">
        <table id="cart-table">
            <thead>
                <tr>
                    <td>Sr.no</td>
                    <td>IMAGE</td>
                    <td>PRODUCT</td>
                    <td>Order-Date</td>
                    <td>Expected-Deilvery-Date</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
    <?php
    $srno = 0;
    $id_result = mysqli_query($conn, "SELECT id FROM `login` WHERE `username`='$username'");
    $user_data = mysqli_fetch_assoc($id_result);
    $user_id = $user_data['id'];

    $display_product = mysqli_query($conn, "SELECT * FROM `orders` WHERE `coustumer_id`='$user_id'");

    if (mysqli_num_rows($display_product) > 0) {
        while ($row = mysqli_fetch_assoc($display_product)) {
            $srno++;
            $product = mysqli_query($conn, "SELECT * FROM `shopnow` WHERE `id`='" . $row['itemids'] . "'");
            $product_data = mysqli_fetch_assoc($product);

            if ($product_data) {
    ?> 
                <tr class="cart-item">
                    <td>
                        <h4><?php echo $srno; ?></h4>
                    </td>
                    <td><img src="img_db/<?php echo $product_data['image']; ?>" alt="Product Image" width="70"></td>
                    <td><?php echo $product_data['name']; ?></td>
                    <td><?php echo $row['Order_date']; ?></td>

                    <?php
                    
                    $orderDate = $row['Order_date'];
                    $expectedDeliveryDate = date('Y-m-d', strtotime($orderDate . ' + 8 days'));
                    ?>

                    <td><?php echo $expectedDeliveryDate; ?></td>
                    <td><?php echo $row['Status']; ?></td>

                </tr>
    <?php
            } else {
                echo "<script>alert('Product not found!');</script>";
            }
        }
    } else {
        echo "<script> alert('No items in the cart. Please add items to your cart.'); </script>";
    }
    ?>
</tbody>

        </table>
    </section>

    <?php
    include("footer.php");
    ?>
</body>
</html> 
