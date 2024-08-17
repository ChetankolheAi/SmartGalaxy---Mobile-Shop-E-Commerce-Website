<?php
session_start();

   


include ("demo.php");

$date = new DateTime();
$date->modify('+7 days');
$delivery_date= $date->format('d-m-Y');



// if (isset($_POST['name']) ){
//     // Get the data from the request
//     $name = $_POST['name'];


//     // Process the data
//     $response = 'Hello, ' . $name . '! You are you';

//     // Send the response back to the client
//     // echo $response;
// } else {
//     echo 'This is not an AJAX request.';
// }


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
    /* border: 1px solid #088178; */
    border-radius: 6px;
   
    cursor: pointer;
}

footer .follow{
    margin-top: 20px;
}
footer .follow i{
    /* margin-top: 10px; */
    color: #465b52;
    cursor: pointer;
}
footer .follow i:hover,
footer a:hover{
    /* margin-top: 10px; */
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
    border-color:#368576; ;
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
                    <td>REMOVE</td>
                    <td>IMAGE</td>
                    <td>PRODUCT</td>
                    <td>PRICE</td>
                    <td>EXPECTED DELIVERY BY</td>
                    <td>SUBTOTAL</td>
                </tr>
            </thead>
            <tbody>

            <?php
            $conn1 = mysqli_connect("localhost","root","","user_cart")or die(mysqli_error());
            if(isset($_SESSION['userpass'])){
                $user_pass=$_SESSION['userpass'];
        $display_product=mysqli_query($conn1, "select * from `$user_pass`");
        $subtotal=0;
        if(mysqli_num_rows($display_product)>0){
            
             while($row = mysqli_fetch_assoc($display_product)){
                $subtotal=$subtotal+$row['price'];

            ?> 
            
            <tr class="cart-item">
            <td>
            <a href="delete.php?delete=<?php echo $row['itemid']; ?>&m=<?php echo $user_pass; ?>" onclick="return confirm('Are you sure you want to delete this product?');">
        <i class="fas fa-trash cv"></i>
    </a>
</td>

                    <td><img src="img_db/<?php echo $row['image']?>" alt=""></td>
                    <td><?php echo $row['name']?></td>
                    <td class="price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $row['price']?></td>
                    <td class="delivery"><?php echo $delivery_date ?></td>
                    <td class="subtotal"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $subtotal?></td>
                </tr>
<?php

            }
            }else{
                echo "no1";
            }
       ;}
       else{
        echo"<script> alert('Login or register user to add item in cart')</script>";
        echo "<script>window.open('home1.php','_self')</script>";
       }
        $sub = ($subtotal * 12) / 100;
        $subtotal_gst=$sub+$subtotal;
        $_SESSION['subtotal_gst']=$subtotal_gst;


             ?>
            </tbody>
        </table>
    </section>

    <section id="subtotal" class="section-p1">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td id="cart-subtotal">₹ <?php echo $subtotal ?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td>CGST 12%</td>
                <td id="cgst">₹ <?php echo $sub ?></td>
            </tr>
            <!-- <tr>
                <td>SGST 12%</td>
                <td id="sgst">$191.76</td>
            </tr> -->
            <tr>
                <td><strong>Total</strong></td>
                <td><strong id="cart-total">₹ <?php echo $subtotal_gst ?></strong></td>
            </tr>
        </table>
        <?php
        $display_product=mysqli_query($conn1, "select * from `$user_pass`");
        $no =1;
        if(mysqli_num_rows($display_product)>0){
            ?>
        <button class="normal" ><a href="payment.php?delete=<?php echo $subtotal_gst ?>">Proceed to checkout</a></button>
        <?php
        }
        else{
            echo "<script>alert('Nothing In Cart')</script>";
        }
        ?>
    </section>

    <footer class="section-p1">
    <div class="col">
        <img  class="logo"src="img/mastercard.png" alt="" height=" 40px" width="40px">
        <h4>
            Contact
        </h4>
        <p><strong>Address:</strong>xxxxxxxxxxxxxxxx</p>
        <p><strong>Phone:</strong>xxxxxxxxxxxxx</p>
        <p><strong>Email:</strong>xxxxxx</p>
        <div class="follow">
            <h4>Follow us on</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Terms & Condition</a>
        <a href="#">Policys</a>
        <a href="#">Information</a>
        <a href="#">Contact Us</a>

    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#">View cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Contact Us</a>

    </div>
    <div class="col install">
        <h4>Install Apps</h4>
       <p>From App store or Google Play store</p>
       <div class="row">
            <img src="img/appstore.jpg" alt="#" height=" 110px" >
       <p>From App store or Google Play store</p>
       <img src="img/mastercard.png" alt="#" height="75px" width="160px">
       </div>

    </div>
   
    <div class="copyright">
        <p>@ 2021,All rights reserve</p>
    </div>
    </footer>

    <script>
    
        // Function to update subtotal and total
        function updateCartTotals() {
            let subtotal = 0;
            const items = document.querySelectorAll(".cart-item");

            items.forEach(function(item) {
                const price = parseFloat(item.querySelector(".price").textContent.replace("$", ""));
                const quantity = parseInt(item.querySelector(".quantity-input").value);
                const itemSubtotal = price * quantity;
                item.querySelector(".subtotal").textContent = `$${itemSubtotal.toFixed(2)}`;
                subtotal += itemSubtotal;
            });

            const cgst = subtotal * 0.1; // 12% CGST
            const sgst = subtotal * 0.1; // 12% SGST

            document.getElementById("cgst").textContent = `$${cgst.toFixed(2)}`;
            document.getElementById("sgst").textContent = `$${sgst.toFixed(2)}`;

            const total = subtotal + cgst + sgst;
            const cartSubtotalElement = document.getElementById("cart-subtotal");
            cartSubtotalElement.textContent = `$${subtotal.toFixed(2)}`;
            const cartTotalElement = document.getElementById("cart-total");
            cartTotalElement.textContent = `$${total.toFixed(2)}`;
        }

        // Event listener for quantity change
        const quantityInputs = document.querySelectorAll(".quantity-input");
        quantityInputs.forEach(function(input) {
            input.addEventListener("change", updateCartTotals);
        });

        // Initial update when the page loads
        updateCartTotals();
    </script>
</body>
</html>