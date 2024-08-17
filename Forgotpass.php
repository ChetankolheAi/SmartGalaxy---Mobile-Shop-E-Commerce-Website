<?php
$username = "example_user";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="Forgot.css">-->
    <style>
       body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background:url('ff.avif') no-repeat;
    background-position: center;
    background-size: 90pc;
}
.wrapper2{
    background: transparent;
    text-align: center;
    border:1px solid white;
    border-radius: 10px;
    padding: 30px 40px;
    color: rgb(8, 0, 0);
    backdrop-filter: blur(7px);
   font-family: Georgia, 'Times New Roman', Times, serif;
   /*width: 20%;*/
}
.input-text input{
    width: 100%;
    height: 30px;
    border: none;
    background-color: transparent;
    outline: none;
    border-bottom: 2px solid rgb(16, 15, 15); ;
    text-underline-position: below;
    size: 20px;
color: black;
    
}
.input-text label{
  position: absolute;
  left:0;
  padding: 10px 42px 10px;
  font-size: 0.8em;
  pointer-events: none;
  /* transform: translateY(-27px); */
  color: #d3c7c7;
  letter-spacing: 0.01em;
  transition: 0.5s;
}
.wrapper2 .input-text input:valid ~label,
.wrapper2 .input-text input:focus~label{
    color: #fff;
    font-size: 0.85em;
    transform: translateY(6px);
    margin-top: -20px;
}

.reset{
    background-color: white;
    border-radius: 20px;
    height: 35px;
    width: 75%;
  }
.next a{
    color: aqua;
  }
  .btn{
    background-color: white;
    border-radius: 20px;
    height: 35px;
    width: 75%;
  }
  .wrapper2 .register-link a{
    color: rgb(0, 217, 255);
  }
  .wrapper2 .register-link p{
    color: white;
    
  }
  .button1{
    display: inline-block;
    padding: 10px 20px;
    border-radius: 40px;
    border: 2px solid black;
    background-color: white;
    color: black;
  }
    </style>
</head>
<body>
    <!-- <h2>Bhai Passward Ka Screenshot Hoga dekh le?</h2> -->
    <?php
    include("Navbar.php");
    ?>
    <div class="wrapper2">
        <form action="newforgot.php"method="GET">
        <h4>FORGET PASSWORD</h4>
        <div class="input-text">
            
            <input type="text" name="username" required>
            <label> Enter your Username</label>
            
        
        </div>
        <!-- <div class="input-text">
      
            <input type="text" placeholder="New Passward" required>
        </div>
        <div class="input-text">
        
            <input type="text" placeholder="Confirm Passward" required>
        </div> -->
        <br>
        <div class="button">
            
               <a href="newforgot.php" class="button1">Next</a>
            
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
    </form>
    </div>
</body>
</html>