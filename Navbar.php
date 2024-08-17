<?php
include('demo.php');
if(isset($_SESSION['username'])){
    $user=$_SESSION['username'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="nAV.CSS"> -->
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   
}
body{
    height: 100vh;
    /* background-image: url('background.jpg') ; */
    background-size: cover;
    background-position: center;

}
li{
    list-style: none;

}
i {
    color: black;

}
a{
    text-decoration: none;
    /* color: #fff; */
    font-size: 1rem;
}
/* a:hover{
    color: orange;

} */
h4{
    font-size: 17px;
    font-family: 'Roboto', sans-serif;
}
header{
    display:flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    padding: 0 ;
    position: fixed; 
   top: 0;
  width: 100%;
  margin: auto;
  z-index: 1000;
  /* padding: 10px 25px; */

}
.navbar{
    width: 100%;
    height: 45px;
    /* max-width: 1200px; */
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;

    z-index: 1000;
}
.navbar .logo a {
    font-size: 1.5rem;
    font-weight: bold;
    padding: 0 1rem;
    color: green;

}
.navbar .links{
    display: flex;
    margin-left: 150px;
    font-size: 1.5rem;
 font-family: 'Poppins', sans-serif;
    /* text-decoration: underline; */ 
    margin-left: 20px;
}
.navbar .links i{

   padding: 6px;
   border-radius: 50px;

}

.navbar .links a{
    color:  black;
    font-size: 17px;
   
    padding: 10px 30px;
}
.navbar .links a:hover{
    color: green;
    
    text-decoration: underline;
}
.navbar .links a:active{
    color: green;
}
.navbar .logo a:hover {
    color: gray;

}
.navbar .links i:hover {
    color: green;
  
}
.navbar .toggle_btn{
    color: black;
    font-size: 1.5rem;
    cursor: pointer;
    display: none;
    padding: 0 1rem;

}
.action_btn{
    background-color: orange;
    color: #fff;
    padding: 0.5rem 2rem ;
    border: none;
    outline: none;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: bold;
    cursor: pointer;
}
.action_btn:hover{
    scale: 1.05;
    color: #fff;
}
.action_btn:active{
    scale: 0.95;

}
.username i{
    color: orange;

        
    }
.username {
    border: 2px solid green;
    padding: 5px 5px;
    border-radius: 10px;
    backdrop-filter: blur(7px);
    cursor: pointer;

        
}
.username:hover {
    border: 3px solid green;
    padding: 5px 5px;
    border-radius: 9px;
    backdrop-filter: blur(7px);
    background-color: white;
    

        
}
.dropdown_menu{
    position: absolute;
    right: 1rem;
    top: 60px;
    width: 150px;
    height: 0;
    background: #aee3b1;
    /* backdrop-filter: blur(15px); */
    border-radius: 10px;
    overflow: hidden;
    /* display: none; */
    transition: height 0.2s cubic-bezier(0.175,0.885,0.32,1.275);
    
}
.dropdown_menu  a:hover{
color: green;
    
}
.dropdown_menu.open{
    height: 270px;
}
.dropdown_menu li{
    padding: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.dropdown_menu .action_btn{
    width: 100%;
    display: flex;
    justify-content: center;

}
.search-container {
    display: flex;
    align-items: center;
}

.search-container input[type=text] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 5px;
    margin-left: 150px;
}

.search-container button {
    padding: 8px 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.search-container button:hover {
    background-color: #45a049;
}
@media(max-width:992px){
    .navbar .links,
    .navbar .action_btn {
        display: none;

    }
    .navbar .toggle_btn{
        display: block;
    }
    .dropdown_menu{
        display: block;
    }
}
@media(max-width:576px){
    .dropdown_menu{
        left: 2rem;
        width: unset;
    }
}
@media(max-width:799px){

.search-container input[type=text] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 5px;
    margin-left: 0px;
}
}
@media(max-width:499px){
    .search-container input[type=text] {
    /* display: none; */
    width: 50%;
    height: 25px;

}
.search-container button {
    width: 50px;
    height: 25px;
    font-size: 10px;
    padding: 2px 2px 2px 2px ;
}
.navbar .logo a {
    font-size: 1.1rem;
    font-weight: bold;
    padding: 0 1rem;
    color: green;

}

}
@media(max-width:799px){
    .username{
        display: none;

    }

}
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="home1.php">SmartGalaxy</a></div>
            
            <div class="search-container">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
                </div>
                <ul class="links">
                <li><a href="home1.php">Home</a></li>
                <li><a href="deals.php">Deals</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="profile.php">Account</a></li>
                <li><a href="Addtocart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
            <?php
            if(isset($_SESSION['username'])){
            ?>
            <div class="username" onclick="window.location.href='profile.php'">
              <h4><a href="profile.php" ><i class="fa-solid fa-user"></i></a> <?php echo "$user";?></h4></div>
              <?php
            }
            else{
                ?>
                <a href="login.php" class="action_btn">Login</a>
                <?php
            }
            ?>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>  
            </div>  
        </div>
        <div class="dropdown_menu">
                <ul class="links1">
                <li><a href="home1.php">Home</a></li>
                <li><a href="deals.php">Deals</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="profile.php">Account</a></li>
                <li><a href="Addtocart.php">Cart<i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
                <li>      <?php
            if(isset($_SESSION['username'])){
            ?>
            
              <h4><a href="profile.php" class="btn"><i class="fa-solid fa-user"></i></a> <?php echo "$user";?></h4>
              <?php
            }
            else{
                ?>
                <a href="login.php" class="action_btn">Login</a>
                <?php
            }
            ?></li>
        </div>
    </header>



    <script>
       //code for drop down menu in navbar
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon=document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')
     
        toggleBtn.onclick = function(){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
         ? 'fa-solid fa-xmark'
         : 'fa-solid fa-bars'
     }
        // }
    
    
    </script>
</body>
</html>