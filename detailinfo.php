<?php
session_start();
include ("demo.php");
if(isset($_GET['itemid'])){
    $itemid=$_GET['itemid'];
}

$color_Nd_Storage_Select=array();


$H="<p id='imageName'></p>";
$H2="<p id='CHETAN'> </p>";
$color_Nd_Storage_Select[]=$H2;
$color_Nd_Storage_Select[]=$H;
$jsonData = json_encode($color_Nd_Storage_Select);
$encodedData = urlencode($jsonData);
// $storage=$color_Nd_Storage_Select[0];
// echo $storage;
// $query = "INSERT INTO orders (Order_status) VALUES ('$storage')";
//             $result1=mysqli_query($conn, $query);


// print_r($color_Nd_Storage_Select);


?>       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
 input[type="text"]{
    border: none;
    background: none;
    font-size: inherit;
    font-weight: inherit;
    color: inherit;
    outline: none;

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

    flex-wrap: wrap;
    padding: 0 40px ;
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
    padding: 30px 0 0 0 ; 
    font-family: 'Spartan', sans-serif;
    font-size: 50px;
    line-height: 64px;

    }
#Product h5{
    color: black;
    font-family: "Courier New", Courier, monospace;
}
  



  
  #Product .pro .cart:hover{
    color: #088108;
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
    background-image: url("Salecom.png");
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
#prodetails .single-pro-image{
    width: 40%;
    margin-right: 50px;


}
.small-img-group{
    display: flex;
    justify-content: space-between;
   
}
.small-img-col{
    flex-basis: 24% ;
    cursor: pointer;
    border: 0.81px solid black;
}
#prodetails{
    display: flex;
    margin-top: 20px ;

}
#prodetails .single-pro-details{
    width: 50%;
    padding-top: 30px;
}
#prodetails .single-pro-details h4{
    padding: 40px 0 07px 0;

}
#prodetails .single-pro-details h2{
   font-size: 27px;
    
} 
#prodetails .single-pro-details input{
    width: 50px;
    height: 47px;
    padding: 10px;
    font-size: 16px;
    margin-right: 10px ;
    top: 20px;

}

#prodetails .single-pro-details button{
    background-color: #ff8a15;
    color: white;
    padding: 17px;
   border-color: #c46200;
}

#prodetails .single-pro-details input:focus{
    outline: none ;
}
#prodetails .single-pro-details span{
    color: red;
    padding: 10px;
    line-height: 25px;
}
#prodetails .single-pro-details h6{
    padding: 0 0 10px 0;
    font-family: "Courier New", Courier, monospace;
    

}
#prodetails .single-pro-details select{
    height: 45px;
    font-size: 20px;

}

#prodetails .single-pro-details  h4{
    display: flex; /* Use flexbox */
  justify-content: space-between; /* Distribute items evenly with space between them */
  align-items: center; 
cursor: pointer;
  margin: 0; 
  padding: 10px; 
}
table {
    width: 50%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 0.71px solid #dddddd;
    text-align: left;
    padding: 6px;
}

th {
    background-color: white;
}

tfoot td {
    background-color: #e0e0e0;
    font-weight: bold;
}

/* tbody th, td:hover {
    background-color: #ddd;
} */

.hide{
    display: none;
   

}
.hide span{
    color: red;
}
.clickable {
            color: #333; 
            cursor: pointer; 
            border: 2px solid #ddd;
            border-radius: 10px;
            width: 150px;
        }
        .clickable:hover{
            background-color: #ddd;
        }
.active {
        color: green; 
        border: 3px solid green;    
    }
    .size td{
        border: none;
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
    #Product .pro-container{
        justify-content: center;
    }
    #Product .pro-container {
    display: flex;
    flex-direction: row;
    padding-top: 10px;
    /* flex-wrap: wrap; */
    /* padding: 40px 40px; */
}
    #Product .pro{
        margin: 20px;
    }
    #Product h1 {
    color: black;
    padding: 10px 0 0 0;
    font-family: 'Spartan', sans-serif;
    font-size: 30px;
    line-height: 44px;
}
        /* #hero{
            padding: 0 20px;
            background-position: 
        } */
         #prodetails{
            display: flex;
            flex-direction: column;
         }
         #prodetails .single-pro-image{
            width: 110%;
            
         }
         #prodetails .single-pro-details{
            width: 100%;
         }
    

    }
    @media (max-width:799px) {
        #Product .pro-container{
        justify-content: center;
        padding: 20px 20px;
    }
    #Product .pro{
        margin: 20px;
    }
    #prodetails .single-pro-details button {
    background-color: #ff8a15;
    color: white;
    padding: 12px;
    border-radius: 10px;
    border-color: #c46200;
    flex-direction: column;
}
#prodetails .single-pro-details{
    display: flex;
    flex-direction: column;
   
}
    }
    #prodetails .single-pro-details input{
        width: 75px;
        border: 1px solid black;
        border-radius: 10px;
    }

    h2 {
    display: flex; /* Example: Using flexbox for layout */
    align-items: center; /* Center align items vertically */
}

input[type="text"] {
    border: none;
    background: none;
    font-size: inherit;
    font-weight: inherit;
    color: inherit;
    outline: none;
    /* Additional styling as needed */
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
    <section id="prodetails" class="section-p1">
        <?php
     
    $display_product = mysqli_query($conn, "SELECT * FROM `shopnow` WHERE `id`='$itemid'");
    if(mysqli_num_rows($display_product)>0){
        $row = mysqli_fetch_assoc($display_product);
        $discount_amount1=$row['price'];
        $original_price1=$row['MRP1'];
        $discount_percentage1 = ($discount_amount1 / $original_price1) * 100;
        $total_discount1=  100-$discount_percentage1;
        $total_discount1 = round($total_discount1, 0);


        //discount calculation for MRP2;
        if($row['price2']>0){
        $discount_amount2=$row['price2'];
        $original_price2=$row['MRP2'];
        $discount_percentage2 = ($discount_amount2 / $original_price2) * 100;
        $total_discount2=  100-$discount_percentage2;
        $total_discount2 = round($total_discount2, 0);
        }
        else{
            $total_discount2 =0;

        }
        ?>
        <div class="single-pro-image">
        <img src="img_db/<?php echo $row['image'] ?>" alt="#" width="100%" id="MainImg">
        <h3>Select Color!</h3>
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="img_db/<?php echo $row['image'] ?>" alt="#" width="100%" class="small-img" >
            </div>
            <div class="small-img-col">
                <img src="img_db/<?php echo $row['image2']?>" alt="#" width="100%" class="small-img" >
            </div>
            <div class="small-img-col">
                <img src="img_db/<?php echo $row['image3']?>" alt="#" width="100%" class="small-img" >
            </div>
            <div class="small-img-col">
                <img src="img_db/<?php echo $row['image4']?>" alt="#" width="100%" class="small-img" >
            </div>
        </div>
    </div>
         <? php
        
         ?>
        <div class="single-pro-details">
            <h4><?php echo $row['name']?></h4>
            <h2 id="Main-price"><span>-<?php echo  $total_discount1 ?>% </span>₹<?php echo $row['price']?></h2>
            <h6 id="Main-mrp">MRP: ₹<?php echo $row['MRP1']?></h6>
           
            <div class="hide" >
                <h2 id="6/128"><span>-<?php echo  $total_discount1 ?>%</span> ₹<?php echo $row['price']?></h2>
                <h6 id="mrp1">MRP:  ₹<?php echo $row['MRP1']?></h6>

                <h2 id="6/256"><span>-<?php echo  $total_discount2 ?>% </span>₹<?php echo $row['price2']?></h2>
                <h6 id="mrp2">MRP: ₹<?php echo $row['MRP2']?></h6>

                <!-- <h2 id="8/256"><span>-24% </span>₹72,900</h2>
                <h6 id="mrp3">MRP: ₹89,900</h6> -->
            </div>
            
            <!-- <select name="size" id="">
                <option id="6/128">(6GB/128GB)</option>
                <option id="6/256" onclick="changeDescription()">(6GB/256GB)</option>
                <option id="8/256">(8GB/256GB)</option>
            </select><br> -->
            <div class="size">
            <h4>Select Size :</h4>
            <table>
                <tr>
                
                    <td name="ST1"><h4 class="clickable active " onclick="changeDescription();changeColor(this)">(<?php echo $row['storage']?>)</h4></td>
                    <td name="ST2"><h4 class="clickable " onclick="changeDescription1();changeColor(this)">(<?php echo $row['storage2']?>)</h4></td>
                    <!-- <td><h4 class="clickable" onclick="changeDescription2();changeColor(this)">(8/256)</h4></td> -->
                    
                </tr>
            </table>
            </div>
          
            <button class="add-to-cart" id="iphone">
            <a href="addproduct_to_db.php?itemid=<?php echo $row['id']?>">
                <i class="fa-solid fa-cart-shopping"></i>Add To Cart</a></button>
            <button class="add-to-cart" height="80px"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
     
            <h4>Product Details</h4>
            <table>
    <thead>
    <tbody>
        <tr>
            <td>Brand</th>
            <td><?php echo $row['brandname']?></td>
         
        </tr>
    
   
        <tr>
            <td>Operating System</td>
            <td><?php echo $row['item_os']?></td>
            
        </tr>
        <tr>
            <td>Screen</td>
            <td><?php echo $row['screen_size']?></td>
            
        </tr>
        <tr>
            <td>CPU Model</td>
            <td><?php echo $row['cpu_model']?></td>
            
        </tr>
        <tr>
            <td>Resolution</td>
            <td>4 K</td>
            
        </tr>
        </thead>
    </tbody>

</table>
<?php
}else{
    echo "no";
}
 ?>
            <!-- <span>
            Brand	Apple<br>
            Operating System : iOS 14<br>
            Memory Storage Capacity	: 128 GB<br>
            Screen Size	: 6.1 Inches<br>
            Resolution : 4K<br>

            About this item
            <h5>1. 5 cm (6.1-inch) Super Retina XDR display<br>
            2. Cinematic mode adds shallow depth of field and shifts focus automatically in your videos<br>
            3. Advanced dual-camera system with 12MP Wide and Ultra Wide cameras; Photographic Styles, Smart HDR 4, Night mode, 4K Dolby Vision HDR recording<br>
            4. 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording<br>
            5.A15 Bionic chip for lightning-fast performance<br></h5></span> -->
        </div>
    </section>

       


        
  

      <section id="banner">
        <h4>Extra Services</h4>
        <h2>Up to <span> 65% Off</span>
         On Samsungs Mobiles</h2>
         <button>Explore More</button>

      </section>
      <section id="Product" >
      <h1>Similar Products!</h1>
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
                echo "NO ITEM FOUND";
            }
       ;
        
             ?>
    </div>
      </section>
      <div id="section4"></div>
   <footer class="section-p1">
    <div class="col">
    <img  class="logo"src="img/smart_galaxy.png" alt="" height=" 70px" width="200px">        <h4>
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
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");
        var Price1 = document.getElementById("6/128");
        var Price2 = document.getElementById("6/256");
        var Price3 = document.getElementById("8/256");
        var Price11 = document.getElementById("mrp1");
        var Price22 = document.getElementById("mrp2");
        var Price33 = document.getElementById("mrp3");
        var activeImageName = "";
        const imageNameElement = document.getElementById("imageName");
       
        function updateActiveImageName() {
                activeImageName = MainImg.src; // Store the src of the active main image
                console.log("Active Image Name:", activeImageName);
                const fileName = activeImageName.substring(activeImageName.lastIndexOf('/') + 1);
                imageNameElement.textContent =fileName; // Optional: log the active image name
        }
        document.addEventListener('DOMContentLoaded', updateActiveImageName);
        var imageName = "";

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
            imageName = smallimg[0].src; // Store the image name
            updateActiveImageName();
        }

        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
            imageName = smallimg[1].src; // Store the image name
            updateActiveImageName();
        }

        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
            imageName = smallimg[2].src; // Store the image name
            updateActiveImageName();
        }

        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
            imageName = smallimg[3].src; // Store the image name
            updateActiveImageName();
        }


        // Create an XMLHttpRequest object
var xhr = new XMLHttpRequest();

// Define the URL and method
var url = 'Addtocart.php';
var method = 'POST';

// Open the connection
xhr.open(method, url, true);

// Set the request header
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Send the request
xhr.send('name=imageName');

// Handle the response
xhr.onload = function() {
    if (xhr.status === 200) {
        console.log(xhr.responseText);
    } else {
        console.log('Error: ' + xhr.statusText);
    }
};



    function changeDescription() {
    var newDescription = Price1.outerHTML;
    var newDescription1 = Price11.outerHTML;

    var h2ProductDescription = document.getElementById("Main-price");
    var h2ProductDescription1 = document.getElementById("Main-mrp");

    h2ProductDescription.innerHTML = newDescription;
    h2ProductDescription1.innerHTML = newDescription1;
}
function changeDescription1() {
    var newDescription = Price2.outerHTML;
    var newDescription2 = Price22.outerHTML;
  
    var h2ProductDescription = document.getElementById("Main-price");
    var h2ProductDescription2 = document.getElementById("Main-mrp");

    h2ProductDescription.innerHTML = newDescription;
    h2ProductDescription2.innerHTML = newDescription2;

}  function changeDescription2() {
    // Get the outer HTML of Price3
    var newContent = Price3.outerHTML;
    var newContent3 = Price33.outerHTML;

    // Select the target element by its ID
    var h2ProductDescription = document.getElementById("Main-price");
    var h2ProductDescription3 = document.getElementById("Main-mrp");

    // Set the inner HTML of the target element to the new content
    h2ProductDescription.innerHTML = newContent;
    h2ProductDescription3.innerHTML = newContent3;
}


let activeElement = document.querySelector('.clickable.active'); // To keep track of the currently active element
let previousContent = ""; // Variable to store the HTML content of the previous active element
let currentContent = "";  // Variable to store the HTML content of the currently active element
const storage_choice = document.getElementById("CHETAN");

// Initialize default active content when the page loads
document.addEventListener('DOMContentLoaded', initializeDefaultActiveContent);
function initializeDefaultActiveContent() {
    // Find the element with class 'clickable active'
    const defaultActiveElement = document.querySelector('.clickable.active');
    if (defaultActiveElement) {
        // Set currentContent to the HTML content of this element
        currentContent = defaultActiveElement.innerHTML;
        storage_choice.textContent =currentContent;
        // Set activeElement to this element
        activeElement = defaultActiveElement;
    }
}
function changeColor(element) {
    // Remove 'active' class from the currently active element (if any)
    if (activeElement) {
        previousContent = activeElement.innerHTML; // Store the HTML content of the previous active element
        activeElement.classList.remove('active');
    }

    // Add 'active' class to the clicked element
    element.classList.add('active');

    // Update activeElement to the currently clicked element
    activeElement = element;

    // Store the HTML content of the currently active element
    currentContent = activeElement.innerHTML;

    //giving this value to php code on top side of the page
    storage_choice.textContent =currentContent;
   
}

        //add to cart
        var iphone = document.getElementById(" Main-price");
       
        // Select the Add to Cart button
var addToCartButton = document.getElementById("iphone");
var copycontent = addToCartButton.textContentl;

// Add click event listener
addToCartButton.addEventListener("click", function() {
    // Prepare data to send
    var productDetails = {
        name: copycontent ,
        price: "52,900",
        quantity: 1
        // Add more details as needed
    };

    // Send POST request to addToCart.php
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "addToCart.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response if needed
            console.log(xhr.responseText);
        }
    };
    xhr.send(JSON.stringify(productDetails));
});

    </script>

    
</body>
</html>