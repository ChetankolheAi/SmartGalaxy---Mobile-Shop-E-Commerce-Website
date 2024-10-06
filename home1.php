<?php
session_start();
include ("demo.php");
// if(isset($_SESSION['username'])){
// echo "<br>".$_SESSION['username'];
// }
// else{
//     echo "login first";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
.star i{
    color: gold;
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
  #Product{
    text-align: center;

  }
  #Product h2{
    text-align:left;
    right:10px;
    font-size: 50px;
    line-height: 64px;
    color: #222;
    padding: 30px 40px  }
  #Product .pro-container{
    display: flex;
    justify-content: space-between;
    padding-top:20px;
    flex-wrap: wrap;
    padding: 0 40px 
  }
  #Product .pro{
    width: 17%;
    min-width: 250px;
    padding:10px 12px;
    border: 1px solid #cce7d0;
    box-shadow: 10px 10px  20px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    margin: 15px 0;
    transition: 0.2s ease;
 position: relative;
  

  }
  #Product .pro:hover{
    box-shadow: 15px 15px  22px rgba(0, 0, 0, 0.6);
  }
  #Product .pro img{
    border-radius: 5px;
    width:100%;
  }
  #Product .pro .star{
    color: gold;

  }
  #Product .pro .des {
    text-align: start;
    padding:7px 0;
  }

  #Product .pro .des span{
    color: #606063;
    font-size: 12px;
  }
  #Product .pro .des h5 {
    padding-top: 7px;
    color: #1a1a1a;
    font-size:15px;
  }
  #Product .pro .des i{
    font-size: 12px;
    align-items: start;
  }
  #Product .pro .des h4{
    padding-top: 2px;
    font-weight: 700;
    font-size: 15px;
    color: #088178;
  }
  #Product .pro .cart{
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50px;
  background-color: #e8f6ea;
  font-weight: 500;
  color: #088178;
  border: 1px solid #cce7d0;
   position: absolute;
  right: 10px;
  bottom: 20px;
  }
#Product h1 {
    color: black;
    padding: 30px ; 
    font-family: 'Spartan', sans-serif;
    font-size: 50px;
    line-height: 64px;

    }
#Product h5{
    color: black;
    font-family: "Courier New", Courier, monospace;
}
  #Product .pro .cart:hover{
    width: 45px;
    height: 45px;
  background-color: #b8e2be;
  font-weight: 500;
  color: #088178;
  border: 2px solid #cce7d0;
   position: absolute;
  right: 10px;
  bottom: 20px;
  }
  #Product .Section-p1{
    font-size:20px;
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
#banner button:hover{

border-color: white;
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
#hero{
    background-image: url("img/pro.jpg");
    height: 90vh;
    width:100%;
    background-size: cover;
    background-position: center;
   background-position: top 25% right 0;
   padding: 0 80px;
   display: flex;
   flex-direction: column ;
   align-items: flex-start;
   justify-content: center;
}
#hero h2{
    color:#000000;
    display: flex;
   flex-direction: column ;
   align-items: flex-start;
   justify-content: center;
}
#hero h1{
    color:#108470;
}
#hero button{
    background-color:#84c89c;
    width: 120px;
    height: 40px;
    border-radius: 12px;
    border-color:#368576; ;
}
#hero button:hover{

    border-color:white ;
}
@media (max-width:799px) {
   
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
    #Product .pro-container{
        justify-content: center;
    }
    #Product .pro{
        margin: 20px;
    }
    #hero {

    height: 70vh;
    background-position: top 30% right 30%;
    padding: 0 80px;
   
}
#feature{
    justify-content: center;

}
#Product h2 {
    text-align: left;
    right: 10px;
    font-size: 35px;
    line-height: 42px;
    color: #222;
    padding: 30px 40px;
}
#banner button {
    left: 30px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background-color: #84c89c;
    width: 90px;
    height: 35px;
    border-radius: 12px;
    border-color: #368576;
}
#hero {
    background-image: url("img/pro.jpg");
    height: 50vh;
    width: 100%;
    background-size: cover;
    background-position: center;
    background-position: top 25% right 25%;
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
#hero h1 {

    font-size: 25px;
    line-height: 30px;
    color: #108470;
    flex-direction: column;
}
#hero button {
    background-color: #84c89c;
    width: 80px;
    height: 35px;
    border-radius: 12px;
    border-color: #368576;
}
#Product .pro {
    width: 1%;
    min-width: 250px;

}
    
}
.pro .cart i{
    color: green;
}
.des i{
    color: green;
}
.star i{
    color: gold;
}
</style>
   
</head>
<body>
  
    <header>
    
        <?php
    include("Navbar.php");
    ?>
    </header>
<section id="hero">
    <h2 class=" h2">Discover Your Perfect</h2>
         <h1>Mobile Companion.</h1>
   <button><a href="shopnow.php">Shop Now</a></button>
</section>

       


    <!-- <div id="section2"> -->
        <section id="Product" class="Section-p1">
            <h2>Discover our top sellers </h2>
            <!-- <p>new features</p> -->
            <div class="pro-container">
            <?php
            $conn = mysqli_connect("localhost","root","1234","chetanlogin")or die(mysqli_error());

  
            
        $display_product=mysqli_query($conn, "select * from `shopnow`");
        $no =1;
        if(mysqli_num_rows($display_product)>0){
            
             while($row = mysqli_fetch_assoc($display_product)){
            ?> 
                <div class="pro" onclick="window.location.href='detailinfo.php?itemid= <?php echo $row['id']?>'">
                    <img src="img_db/<?php echo $row['image']?>" alt="#">
                    <div class="des">
                        <span><?php echo $row['brandname']?></span>
                        <h5 name="product_name"><?php echo $row['name']?><br><?php echo $row['storage']?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                
                        </div>
                        <h5><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $row['price']?></h5>
                    </div>
                    <a href="addproduct_to_db.php?itemid= <?php echo $row['id']?>"><button class="cart"><i class="fa-solid fa-cart-shopping"></i></button></a>
                
                </div>
                <?php

$no =$no+1;
            }
            }
        else{
            echo "";
            }
       ;
        
             ?>
                
            </div>
        </section>
    </div>
    
      <section id="banner">
        <h4>Extra Services</h4>
        <h2>Up to <span>65% Off</span>
         On Samsungs Mobiles</h2>
         <button><a href="galaxypage.php">Explore More</a></button>

      </section>
      <section id="Product" class="Section-p1">
        <h1>Shop Galaxy !</h1>
        <!-- <h5>New innovation nd launch just for you</h5> -->
        <div class="pro-container">
        <?php
            $conn = mysqli_connect("localhost","root","1234","chetanlogin")or die(mysqli_error());
            $name="samsung";
        $display = mysqli_query($conn, "SELECT * FROM `shopnow` WHERE `name` LIKE '%$name%'");
        $no =1;
        if(mysqli_num_rows($display)>0){
            
             while($row = mysqli_fetch_assoc($display)){
            ?> 
                <div class="pro" onclick="window.location.href='detailinfo.php?itemid= <?php echo $row['id']?>'">
                    <img src="img_db/<?php echo $row['image']?>" alt="#">
                    <div class="des">
                        <span><?php echo $row['brandname']?></span>
                        <h5> <?php echo $row['name']?><br><?php echo $row['storage']?></h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                
                        </div>
                        <h5><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $row['price']?></h5>
                    </div>
                    <a href="addproduct_to_db.php?itemid= <?php echo $row['id']?>"><button class="cart"><i class="fa-solid fa-cart-shopping"></i></button></a>
                
                </div>
                <?php

$no =$no+1;
            }
            }else{
                echo "no";
            }
       ;
        
             ?>
       
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
    
   
</body>
</html>