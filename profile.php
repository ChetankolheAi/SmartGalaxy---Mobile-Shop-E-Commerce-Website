<?php
session_start();
if(isset($_SESSION['username']) ){
$username=$_SESSION['username'];

}

else{
    echo "<script>alert('Login to View Profile')</script>";
}

if(isset($_SESSION['pincode'])){
    $pincode=$_SESSION['pincode'];

    }
    
    else{
        echo ".";
    }
if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    
    if(isset($_POST['New_address'])){
        $new_address = $_POST['New_address'];
        $conn = mysqli_connect("localhost","root","1234","chetanlogin")or die(mysqli_error());
        $query="UPDATE `login` SET `address`='$new_address' where username='$username'";
        $result= mysqli_query($conn,$query);
        if($result){
            echo "<script> alert('Address Change')</script>";

        }
    }
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
    font-size: 30px;
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
.cv {
    color: black;
}
.cv:hover {
    color: red;
}

.text h3{
    margin-top: -10px;
}
#cart{
    margin-top: 30px;
    margin-left: 5px;
}
.rt {
    display:flex;
    flex-direction: row;
    margin-top: 10px;
   
}
.info{
    padding: 0 0 0 35px;
    border: 2px solid #9b9fa1d7;
    display: flex;
    flex-direction: column;

    border-top: none;
    border-right:none;
    border-bottom: none;
    width: 100%;
    margin-left: 40px;
}
.orders {

  border: 2px solid #9b9fa1d7;
  border-radius: 10px;
  margin-top: 20px;
  display: flex;
  flex-direction: row;
  padding: 14px 30px;
  width: 330px; 
  cursor: pointer;
}

.orders:hover {
  background-color: rgba(107, 101, 101, 0.151);
}

.orders h6 {
  color: #b0b3ac;
  margin-top: 5px; 
}

.orders h3 {
  font-size: 22px;
  

}

.orders .text {
  margin-top: 20px;
  margin-left: 10px;
}

.orders i {
  font-size: 4.5rem;
  padding: 1px 10px;
  color: orange;
}

.lock i {
  font-size: 3.125rem; /
  padding: 1px 8px;
  color: #77c1fe;
}
.ok {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.ok h4{
    margin-top: 110px;
    margin-left: 40px;
    text-decoartion: underline;
    border: 4px solid #9b9fa1d7;
    border-radius: 10px;
    padding: 10px;
    height: 50px;
    cursor: pointer;

}
.advertisement{
    margin-top: 20px;
    border: 2px solid #9b9fa1d7;
    border-left:none;
    border-right:none;
    border-bottom:none;
    padding: 20px 10px 10px 10px;
    display: flex;
    flex-direction: row;
    cursor: pointer;


}
.advertisement button{
    padding: 5px;
    border-radius: 10px;
    border: 2px solid green;
    margin-left: 20px;
    margin-top: -5px;
    cursor: pointer;
    color: white;
    background-color: green;
}
.advertisement button:hover{
    background-color: white;
    color: green;
}
.offers{
    margin-left: 10px;
    /* margin-top:20px; */
    color:green;
    line-height: 24px;
}

.offers h6{
    font-family:'Courier New';
    font-size: 13.5px;
}
.offers strong{
    color: black;
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
@media screen and (max-width: 860px){

    #cart h2 {
        font-size: 30px;
    }
    .orders {
        flex-direction: column;
        width: 150px;
        padding: 10px;
    }

    .orders h3 {
        font-size: 18px;
   
    }

    .orders i {
        font-size: 2.5rem;
        padding: 10px 0 0 10px; 
    }
}
@media screen and (max-width: 599px){

#cart h2 {
    font-size: 20px;
    margin-left: 10px;
}
.details {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
   justify-content: space-between;
   margin-left: 10px;
    
}
.orders {
    display: flex;
    flex-direction: row;
    height: 45px;
    width: 120px;
    padding: 2px; 
}
.orders img{
    padding:2px;
    height: 35px;
    width: 40px;
}
.text h3 {
    padding: 0 0 0 0;
    font-size: 12px;
    margin-bottom: 30px;

   
}
.orders h6{
    display: none;

}

.orders i {
    font-size: 20px;
    padding: 10px 0 0 10px;
}
.info{
    padding: 0 0 0 0px;
    border: 2px solid #9b9fa1d7;
    display: flex;
    flex-direction: column;

    border-left: none;
    border-right:none;
    border-bottom: none;
    width: 100%;
    margin-top: 30px;
    margin-left:05px;
}
.rt{
    display: flex;
    flex-direction: column;
    
}
.address {
    margin-top: 20px;
    width: 80%;
   
   
}
.ok {
    display: flex;
    flex-direction: row;
    flex-wrap: none;
}
.ok h4 {
    margin-top: 110px;
    margin-left: 10px;

}
.section-p1 {
    padding: 40px 10px;
}
}
@media screen and (max-width: 282px){

    .ok h4 {
    margin-top: 0px;
    margin-left: 10px;

}

}
@media screen and (max-width: 760px){
    .advertisement button{
    padding: 1px;
    color: white;
    background-color: green;
    font-size: 10px;
}
}

.address{
    
    padding: 20px 10% 0 10%;
  padding: 10px;
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
.address1{
    background-color: skyblue;
    border-radius: 10px;
    padding: 10px;
}
.input_ad{
   
   margin-left: 10px; 
 }
.userimage {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    margin-top: 80px; /* Adjust margin as needed */
    font-size: 70px;
    height: 120px;
    border: 4px solid black;
    border-radius: 70px;
    padding: 35px 40px;
    width: 120px;
}
.userimage i{
    color: orange;
    display: flex;
    justify-content: center;


}

@media screen and (max-width: 860px){
    .address{
    
    border: 2px solid #9b9fa1d7;
    border-radius: 10px;
    padding: 10px;
    width: 100%;
    cursor: pointer;
  }
  .address h5{
      background-color: orange;
      border: 2px solid #9b9fa1d7;
      border-radius: 10px;
      padding: 10px;
    }
  .address1{
      background-color: skyblue;
      border-radius: 10px;
      padding: 10px;
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


    <section id="cart" class="section-p1">
        <?php 
        if(isset($_SESSION['username'])){
            ?>
        <h2>Hey! <?php echo $username ?></h2>
        <?php
        }
        else
        {
            ?>
            <h2>Hey! Login first to view user name</h2>
            <?php
        }
        ?>
        <div class="rt">
                <div class="details">
                    <div class="orders" onclick="window.location.href='orders.php?username= <?php echo $username ?>'">
                            <img src="img/profile_order.png" alt="#" height="70px" width="110px">
                            <div class="text" >
                            <h3>Orders</h3>
                            <h6>Track,Return or Buy</h6></div>
                    </div>
                    <div class="orders">
                            <a href="" class="lock">
                            <i class="fa-solid fa-lock"></i></a>
                            <div class="text">
                            <h3>Login & security</h3>
                            <h6>change username or password</h6></div>
                    </div>
                    <div class="orders">
                        <i class="fa-solid fa-location-dot" heigh="90px"></i>
                            <div class="text">
                            <h3>Address</h3>
                            <h6>Edit or Add Address</h6></div>
                    </div>
                    <div class="orders">
                        <i class="fa-solid fa-phone-volume"></i>
                            <div class="text">
                            <h3>Contact Us</h3>
                            <h6>Track,Return or Buy</h6></div>
                    </div>
                    <div class="orders"  onclick="window.location.href='Logout.php?username= <?php echo $username ?>'" >
                        <i class="fa-solid fa-right-from-bracket"></i>
                            <div class="text">
                            <h3>Logout</h3>
                            <h6>Log Out to Add<br>another Id</h6></div>
                    </div>
            </div>
         
                <div class="info">
                <div class="address">
                        <div class="address1">
                            <h4><i class="fa-solid fa-location-dot"></i> Deliver to this Address</h4>
                        </div>
                        <?php
            $conn = mysqli_connect("localhost","root","1234","chetanlogin")or die(mysqli_error());
            if(isset($_SESSION['username'])){
                $username=$_SESSION['username'];
        
            }
        $display = mysqli_query($conn, "SELECT * FROM `login` WHERE `username`= '$username'");
        if(mysqli_num_rows($display)>0){
            
             while($row = mysqli_fetch_assoc($display)){
            ?> 
        <div id="input" ><i class="fa-solid fa-map-pin"></i><span><?php echo $row['address']?></span><i class="fa-solid fa-pen-to-square change_icon"><a href="#" class="change_icon1" onclick="changeDescription()">Change</a></i></div>
        
        <?php
             }
        }
        else
        {
            ?>
          <h5><i class="fa-solid fa-map-pin"></i>Login First <i class="fa-solid fa-pen-to-square"></i></h5>
            <?php
        }
        ?>
                        
                    </div>
                    <div class="ok">
                        <div class="userimage">
                            <i class="fa-solid fa-user"></i>
                            
                        </div>
                        <?php 
                        if(isset($_SESSION['username'])){
                        ?>
                        <h4><?php echo $username ?> <i class="fa-solid fa-pen-to-square"></i></h4>
                        <?php
                        }
                        else
                        {
                            ?>
                            <h4><i class="fa-regular fa-face-sad-sweat"></i> Login to continue </h4>
                            <?php
                        }
                        ?>
                        
                        
                
                    </div>
                    <div class="advertisement">
                        <h3>
                            Check Existing Offers Now
                        </h3>
                        <button><a href="shopnow.php">Shop Now</a></button>

                    </div>
                    <div class="offers">
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                        <h6><strong> Partner Offers: </strong> Get GST invoice and save up to 28% on business purchases. Sign up for free Details</h6>                        
                    </div>
                </div>
    

     
        </div>
      
    </section>



    <footer class="section-p1">
    <div class="col">
    <img  class="logo"src="img/smart_galaxy.png" alt="" height=" 70px" width="200px">
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

    paymentDetails1.innerHTML = '<form method="POST"><input id="input" name="New_address" type="text" placeholder="Enter New Address " class="input_ad" required><a href="#" class="change_icon1"><button class="btn">Change</button></a></form>';

}
      

    </script>
</body>
</html>