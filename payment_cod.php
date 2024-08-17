<?php
include('demo.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    if(isset($_POST['New_address'])){
        $new_address = $_POST['New_address'];
        $query="UPDATE `login` SET `address`='$new_address' where username='$username'";
        $result= mysqli_query($conn,$query);
        if($result){
            echo "<script> alert('Address Change')</script>";

        }
    }
    if (isset($_FILES['itemimage']) && $_FILES['itemimage']['error'] == 0) {
        $itemimage = $_FILES['itemimage']['name'];
        $itemimage_temp_name = $_FILES['itemimage']['tmp_name'];
        $itemimage_folder = 'img_db/' . $itemimage;
        // echo "$itemimage";
        // Move the uploaded file to the target directory
        if (move_uploaded_file($itemimage_temp_name, $itemimage_folder)) {
            echo "<script> alert('Screenshot Uploaded Succesfully Place Order now')</script>";
        } else {
            
        }
    } else {
        
    }
} else {
    
}




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
.container {
    max-width: 600px;
    margin: auto;
 
}
.payment-methods{
    margin-top: 25px;
    border-radius: 15px;
}
.payment-methods h2{
    font-size: 25px;
    padding: 0 0 0 20px;
    border: 1px solid #ddd;
    border-left: none;
    border-right: none;
    border-top: none;
}
#payment-details{
    padding: 0 0 0 20px;
}
#payment-form input{
    padding: 10px;
}
#payment-form button{

    margin-left: 20px;
    margin-right: 20px;
    padding: 10px;
    border-radius: 5px;
   
}
#payment-form button:hover{
    color: white;
    background-color: green;
    border: 2px solid green;
}
#payment-form h6{
    font-size: 10px;
    font-weight: 100;
    padding: 0 0 0 30px;
}

.order-summary, .payment-methods {
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 20px;

}
.payment-methods img{
    height: 300px;
    width: 250px;
    margin-top: 40px;
    padding: 0 0 0 20px;
    margin-left: 20px;

}
.payment-methods h4{
    margin-left: 20px;
    margin-top: 20px;
    padding: 0 0 0 20px;
}
.payment-methods span{
    color: red;
}
.payment2{
    border: 2px solid #ddd;
    margin-top: 20px;
    margin-left: 20px;
    padding: 10px;
   border-left: none;
   border-right: none;
   border-bottom: none;
    margin-bottom: 20px;
    margin-right: 20px;
}
.payment2 input{
   
    padding: 10px;
}
.payment2 label{
    padding: 10px 0 1px 10px;
   
}
.btn2{
    width: 95%;
    padding: 10px;
    border-radius: 5px;
    color: white;
    background-color:green;
    margin-left: 10px;
    margin-right: 20px;
    margin-top: 10px;

}
.btn2:hover{
    color: green;
    background-color: white;
}
@media (max-width: 423px){
    .payment-methods img{
    height: 200px;
    width: 170px;
    margin-top: 20px;
    padding: 0 0 0 10px;
    margin-left: 10px;

}
.payment-methods h4{
    margin-left: 20px;
    margin-top: 10px;
    padding: 0 0 0 20px;

}
.payment2{

    margin-top: 10px;
    margin-left: 10px;
    padding: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
}
.payment2 input{
   
    padding: 10px 0 10px 0 ;
}
.payment2 label{
    padding: 10px 0 1px 0;
    font-size: 12px;
   
}
.btn2{
   
    margin-left: 0px;
   

}
}
.total-value {
    font-weight: bold;
}

.opppp{
    display: none;
}
 @media (max-width: 650px){
        
    }
#banner{
    margin-top: 60px;

   }
#cart {
    overflow-x: auto;
  
}
#cart-table{
    /* width: 100%; */
    border-collapse: collapse;
    table-layout: fixed;
    white-space: nowrap;

}
#cart-table img{
    width: 70px;
}
#cart-table td:nth-child(1){
    text-align: center;
    width: 100px;
}

#cart-table td:nth-child(2){
    width: 150px;
    text-align: center;
    
}
#cart-table td:nth-child(3){
    width: 250px;
    text-align: center;
    
}
#cart-table td:nth-child(4),
#cart-table td:nth-child(5),
#cart-table td:nth-child(6){
    width: 150px;
    text-align: center;
    
}
#cart-table td:nth-child(5) input{
    width: 70px;
    padding: 10px 5px 10px 13px;
}
#cart-table thead{
    border: 1px solid #e2e9e1;
    border-left: none;
    border-right: none;
}
#cart-table thead td{
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    padding: 18px 0;
    
}
#cart-table tbody td{
    font-weight: 100;
    font-size: 13px;
    padding: 18px 0;
    align-items: center;
    
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
.total-row{
  
  padding: 0 20px 0 0;
  color: red;
  font-size: 20px;
}
.total{
    border: 1px solid #ddd;
    background-color: #ffcc85bd;
    border-radius: 10px;
    
}

.total th{
    padding: 20px;
    border: 1px solid black;
    border-right: none;
    border-left: none;
    border-top: none;
   

}
.total table td{
    /* margin-left: 20px; */
}
.total tr :nth-child(3){
    
    color: red;
    font-size: 20px;
    


}
.total td{
    position: relative;
    /* font-weight: bold; */
    text-align: left;
    padding: 10px 0 10px 20px;
    font-size:13px;
    

}
.total td:nth-child(2){
    padding: 0 0 0 40px;
}
.order-summary h2{
    font-size: 25px;
    padding: 0 0 0 10px;
}
#total{
    font-size: 20px;
    font-weight: 600;
    border: 1px solid black;
    padding: 10px 20px 10px 20px;
    border-right: none;
    border-left: none;
    border-bottom: none;
}
.address{
    
    /* border: 2px solid #9b9fa1d7;
    border-radius: 10px; */
    padding: 20px 10% 0 10%;
    width: 100%;
    height: 70px;
    cursor: pointer;
    jsutify-content: center;
  }
  .address h5{
      background-color: orange;
      border: 2px solid #9b9fa1d7;
      border-radius: 10px;
      padding: 10px;
    }
    #input{
        background-color: orange;
      border: 2px solid #9b9fa1d7;
      border-radius: 10px;
      padding: 7px;
      
    }
    #input span{
        margin-left: 10px;
    }
  .address1{
      background-color: skyblue;
      border-radius: 10px;
      padding: 10px;
  }
  .change_icon{
    padding: 0 0 0 50px ;
  }
  .change_icon:hover{
    color: #ddd;
    
  }
  .change_icon1:hover{
    color: #ddd;
    
  }
  .btn{
    padding: 5px;
    border-radius: 5px;
    color: white;
    background-color:#05c52e;
    margin-left: 10px;
  }
  .btn:hover{
    background-color: white;
    border: 1px solid black;
    color: green;
  }
  .input_ad{
   
    margin-left: 10px; 
  }

  @media (max-width: 523px){

    .address{
        margin-bottom: 10px;
    }
    .change_icon{
    padding: 0 0 0 0;
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

const paymentDetails1 = document.getElementById('input');
function changeDescription() {
    console.log("hello");
    paymentDetails1.innerHTML = '    <form method="POST"><input id="input" name="New_address" type="text" placeholder="Enter New Address " class="input_ad" required><a href="#" class="change_icon1"><button class="btn">Change</button></a></form>';

}
        
    </script>

</body>
</html>