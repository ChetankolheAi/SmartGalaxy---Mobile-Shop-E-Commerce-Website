<?php
include("demo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newforgot.css">
    <style> 
    *{
  margin: 0;
  padding: 0;
  /* font-family: 'Courier New', Courier, monospace; */
   /* box-sizing: border-box; */
} 
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
    border-radius: 0px;
    
    color: rgb(8, 0, 0);
    backdrop-filter: blur(7px);
   font-family: Georgia, 'Times New Roman', Times, serif;
}
.input-text input{
    width: 100%;
    height: 30px;
    border: none;
    background-color: transparent;
    outline: none;
    border-bottom: 2px solid rgb(14, 13, 13);
    text-underline-position: below;
    size: 20px;
    /* padding: 0px 0px 0px; */
    border-bottom-style: 10px;
    transform: translateY(1px);
    border-radius: 10px;
  
    
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
    font-size: 0.55em;
    transform: translateY(12px);
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
  </style>
</head>
<body>
    <!-- <h2>Bhai Passward Ka Screenshot Hoga dekh le?</h2> -->
    <?php
    include("Navbar.php");
    ?>
    <div class="wrapper2">
        <form method="POST">
        <h4>FORGET PASSWORD</h4>
        <div class="input-text">
            
            <input type="text" name="pass" required>
            <label> New Passward</label>
            
        
        </div>
        <div class="input-text">
            
            <input type="text" name="passward" required>
            <label>Confirm Passward</label>
            
        
        </div>
        <!-- <div class="input-text">
      
            <input type="text" placeholder="New Passward" required>
        </div>
        <div class="input-text">
        
            <input type="text" placeholder="Confirm Passward" required>
        </div> -->
        <br>
        <div class="button">
            <button class="btn" name="submit">Reset</button>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
          <div class="register-link">
         <a href="#">Want to Try with Other option?</a>
          </div>
    </form>
    </div>
    <?php
if(isset($_POST['submit'])){
    if(mysqli_query($conn,"UPDATE login SET passward='$_POST[passward]' WHERE username='$_POST[pass]'")){
        if(!empty($passward)){
            echo "<script type='text/javascript'> alert('Updated')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Try Again')</script>";
        }
    }
    if(mysqli_query($conn,"UPDATE login SET confirmpassward='$_POST[passward]' WHERE username='$_POST[pass]'")){
        // if(!empty($passward)){
        //     echo "<script type='text/javascript'> alert('Updated')</script>";
        // }
        // else{
        //     echo "<script type='text/javascript'> alert('Try Again')</script>";
        // }
    }
}
?>
</body>
</html>