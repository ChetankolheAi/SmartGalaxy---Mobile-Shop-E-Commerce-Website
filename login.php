<?php
session_start();
include ("demo.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

  $username = $_POST['username'];
  $password = $_POST['password'];
  $user_pass= $username.$password;
  if(!empty($username) && !empty($password))
  {
    $query ="select * from login where username='$username' limit 1";
    $result = mysqli_query($conn, $query);
 
    if($result)
    {

      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data=mysqli_fetch_assoc($result);
        $pincode=$user_data['pincode'];
        $address=$user_data['address'];
        if($user_data['passward']==$password)
        {
          $_SESSION['username']="$username";
          $_SESSION['userpass']="$user_pass";
          $_SESSION['pincode']="$pincode";
          $_SESSION['address']="$address";
          echo "<script>alert('login successfully')</script>";
          echo "<script>window.open('home1.php','_self')</script>";
        }
        else{
          echo "<script type='text/javascript'> alert('You have entered wrong passward check it try again')</script>";
         
  
        }
        echo "<script>alert('No Data Found')</script>";
      }
    }
    
    // header("location:login.php");
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="back.css" rel="stylesheet" type="text/css">
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
    align-items: left;
    min-height: 100vh;
    background-position: center;
    background-size: 90pc;
  
  }
  .wrapper {
    background: transparent;
    text-align: center;
    border:1px solid white;
    border-radius: 10px;
    padding: 30px 40px;
    color: black;
    backdrop-filter: blur(7px);
    font-family: 'Courier New', Courier, monospace;
    z-index: 10;
    align-items: right;
  }
  .wrapper h1{
    font-size: 36px;
  }
  .wrapper .input-box  {
    width: 100%;
    height: 50%;

    margin: 30px 0;
    
  }
  .input-box input{
    width: 100%;
    height: 40px;
    border: none;
    background-color: transparent;
    outline: none;
    border-bottom: 2px solid rgb(2, 0, 0); 
    /* border-radius: 20px; */
    text-underline-position: below;
    size: 20px;

  
  
  }
  .btn{
    background-color: white;
    border-radius: 20px;
    height: 35px;
    width: 95%;
  }
  .input-box i{
    position: absolute;
    right: 105px;
    transform: translatey(65%);
  }
  .wrapper .register-link{
    font-size: 14px;
    margin: 20px 0 15px;
    color: white;
  }
.wrapper .remember-Forgot label{
  color: #fcfffe;
  text-shadow: red;
}
.wrapper .register-link a{
  color: rgb(0, 217, 255)
}
.wrapper .remember-Forgot a{
  color: rgb(0, 217, 255);
}
.wrapper .input-box label{
  position: absolute;
  left:0;
  padding: 10px 42px 10px;
  font-size: 1.1em;
  pointer-events: none;
  /* transform: translateY(-27px); */
  color: #d3c7c7;
  letter-spacing: 0.05em;
  transition: 0.5s;

}
.wrapper .input-box input:valid ~label,
.wrapper .input-box input:focus~label{
    color: #fff;
    font-size: 0.85em;
    transform: translateY(6px);
    margin-top: -20px;
}
  </style>
      </head>
<body>
<?php
    include("Navbar.php");
    ?>
    
     <div class="wrapper">
      <form method="POST">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="" name="username" required>
          <label >Username</label>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password"
          placeholder="" name="password" required>
          <label >Passward
          </label>
          <i class='bx bxs-lock'></i>
        </div>
        <div class=" remember-Forgot">
          <label><input type="checkbox">Remember me</label>
          <a href="Forgotpass.php">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <!-- <button href="cc.html" class="btn"> chetan</button> -->
        <!-- <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a> -->
        <!-- <a href="cc.html" class="btn" tabindex="-1" role="button" aria-disabled="true">Login</a> -->
        <div class="register-link">
          <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
      </form>

     </div>

    
</body>
</html>
