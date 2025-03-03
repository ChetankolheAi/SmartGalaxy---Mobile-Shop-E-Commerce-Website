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
    display: flex; 
  justify-content: space-between; 
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
    display: flex; 
    align-items: center; 
}

input[type="text"] {
    border: none;
    background: none;
    font-size: inherit;
    font-weight: inherit;
    color: inherit;
    outline: none;
 
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
      <?php
    include("footer.php");
    ?>
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
        activeImageName = MainImg.src;
        console.log("Active Image Name:", activeImageName);
        const fileName = activeImageName.substring(activeImageName.lastIndexOf('/') + 1);
        imageNameElement.textContent = fileName;
    }
    document.addEventListener('DOMContentLoaded', updateActiveImageName);

    smallimg[0].onclick = function() {
        MainImg.src = smallimg[0].src;
        imageName = smallimg[0].src;
        updateActiveImageName();
    }

    smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
        imageName = smallimg[1].src;
        updateActiveImageName();
    }

    smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
        imageName = smallimg[2].src;
        updateActiveImageName();
    }

    smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
        imageName = smallimg[3].src;
        updateActiveImageName();
    }

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
    }

    function changeDescription2() {
        var newContent = Price3.outerHTML;
        var newContent3 = Price33.outerHTML;

        var h2ProductDescription = document.getElementById("Main-price");
        var h2ProductDescription3 = document.getElementById("Main-mrp");

        h2ProductDescription.innerHTML = newContent;
        h2ProductDescription3.innerHTML = newContent3;
    }

    let activeElement = document.querySelector('.clickable.active');
    let previousContent = "";
    let currentContent = "";
    const storage_choice = document.getElementById("CHETAN");

    document.addEventListener('DOMContentLoaded', initializeDefaultActiveContent);
    function initializeDefaultActiveContent() {
        const defaultActiveElement = document.querySelector('.clickable.active');
        if (defaultActiveElement) {
            currentContent = defaultActiveElement.innerHTML;
            storage_choice.textContent = currentContent;
            activeElement = defaultActiveElement;
        }
    }

    function changeColor(element) {
        if (activeElement) {
            previousContent = activeElement.innerHTML;
            activeElement.classList.remove('active');
        }
        element.classList.add('active');
        activeElement = element;
        currentContent = activeElement.innerHTML;
        storage_choice.textContent = currentContent;
    }

    var iphone = document.getElementById("Main-price");

    var addToCartButton = document.getElementById("iphone");
    var copycontent = addToCartButton.textContent;

    addToCartButton.addEventListener("click", function() {
        var productDetails = {
            name: copycontent,
            price: "52,900",
            quantity: 1
        };

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "addToCart.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send(JSON.stringify(productDetails));
    });
</script>
