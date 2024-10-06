<?php
session_start();
include ("demo.php");
$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $address =$_POST['address'];
        $pincode =$_POST['pincode'];

        $Username =$_POST['Username'];
        $email =$_POST['email'];
        $passward = $_POST['passward'];
        $confirmpassward = $_POST['confirmpassward'];
        $user_pass=$Username.$passward;
            
        if(!empty($Username) && !empty($passward) && !empty($confirmpassward) && ($passward == $confirmpassward))
        {
            $result2 = mysqli_query($conn, "SELECT * FROM `login` WHERE `username`='$Username'");
            $row_count = mysqli_num_rows($result2);
                if($row_count>0){
                    echo"<script> alert('Username already present try withanother username')</script>";
                    echo "<script>window.open('register.php','_self')</script>";
                
                }
                else{
                        $sql = "CREATE TABLE `$user_pass` (
                            `itemid` INT NOT NULL,
                            `userpass` VARCHAR(232) NOT NULL,
                            `name` VARCHAR(232) NOT NULL,
                            `price` VARCHAR(232) NOT NULL,
                            `storage` VARCHAR(232) NOT NULL,
                            `image` VARCHAR(2323) NOT NULL,
                            `quantity` INT NOT NULL,
                            PRIMARY KEY (`itemid`)
                        )";
                        $result = mysqli_query($conn1 , $sql);
                  
                    $query = "INSERT INTO login (firstname, lastname,phonenumber,email,address,pincode,username,passward,confirmpassward) VALUES ('$firstname', '$lastname','$phonenumber','$email','$address','$pincode','$Username','$passward', '$confirmpassward')";
                    $result1=mysqli_query($conn, $query);

                    if($result&&$result1){
                        $_SESSION['username']="$Username";
                        $_SESSION['userpass']=$Username.$passward;
                        $_SESSION['pincode']="$pincode";
                        $_SESSION['address']="$address";

                        echo"<script> alert('Successfully Register')</script>";
                        echo "<script>window.open('home1.php','_self')</script>";
                    }
                    else{
                        echo"<script> alert('Try again')</script>";
                    }
               

                
            }
        }
        else if($passward !== $confirmpassward){
            echo"<script> alert('Confirm password not valid')</script>";
            echo "<script>window.open('register.php','_self')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Enter The Valid Data')</script>";
        }
            
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!--<link rel="stylesheet" href="signup.css">-->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
background:url('img/prologin.jpg') no-repeat;
background-position: center;
background-size: 90pc;
}


.signup{
    background: transparent;
    text-align: center;
    border:1px solid white;
    border-radius: 30px;
    padding: 30px 40px;
    color: rgb(8, 0, 0);
    backdrop-filter: blur(7px);
    font-family: Georgia, 'Times New Roman', Times, serif;
   
}
.signup.com{
    color: aqua;
}
.signup h1{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    
}
/* .signup .input-item-box input{
    width: 100%;
    border-radius: 20px;
    height: 255px;
    background-color: transparent;
    border-bottom: solid 4px white; */
    
/* } */
.signup .input-item-box{
    width: 100%;
    height: 50%;

    margin: 0px 0;
}
.signup .input-item-box1{
    width: 100%;
    height: 50%;

    margin: 0px 0;
}
.input-item-box input{
    width: 100%;
    height: 30px;
    border: none;
    background-color: transparent;
    outline: none;
    border-bottom: 2px solid rgb(2, 0, 0); 
    /* border-radius: 20px; */
    text-underline-position: below;
    size: 20px;
}
.input-item-box1 input{
    width: 100%;
    height: 30px;
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
    width: 75%;
  }
    
.remember-Forgot{
    color: white;
    font-size: 1rem;
    padding: 22px 6px;

}
.remember-Forgot a{
    color: aqua;
    font-size: 1rem;
    padding: 22px 6px;
}
.signup .input-item-box label{
    position: absolute;
    left:0;
    padding: 10px 42px 10px;
    font-size: 1em;
    pointer-events: none;
    /* transform: translateY(-997px); */
    color: #d3c7c7;
    letter-spacing: 0.05em;
    transition: 0.5s;
font-family: Georgia, 'Times New Roman', Times, serif;
}
.signup .input-item-box input:valid ~label,
.signup .input-item-box input:focus~label{
    color: #fff;
    font-size: 0.75em;
    transform: translateY(6px);
    margin-top: -20px;
}
.navbar-header{
    border: 2px solid red;
}
  </style>
</head>
<body>
    <?php
    include("Navbar.php");
    ?>
    <div class="signup">
        <form method="POST">
        <h1>Sign Up</h1>
    <div class="input-item-box">
        <input type="first" placeholder="" name="firstname" required>
        <label> Firstname</label>
    </div><br>
    <!-- <div class="input-item-box">
        <input type="text" placeholder="Middle Name*" name="middlename">
    </div><br> -->
    <div class="input-item-box">
        <input type="last" placeholder="" name="lastname" required>
        <label> lastname</label>
    </div><br>

    <div class="input-item-box">
        <input type="last" placeholder="" name="phonenumber" required>
        <label> Phone Number</label>
    </div><br>
    <div class="input-item-box">
        <input type="last" placeholder="" name="email" required>
        <label> Email</label>
    </div><br>
    <div class="input-item-box">
        <input type="last" placeholder="" name="address" required>
        <label>Address , State , Dist</label>
    </div><br>
    <div class="input-item-box">
        <input type="last" placeholder="" name="pincode" required>
        <label> Pincode</label>
    </div><br>
    <!-- <div class="input-item-box">
        <input type="text" placeholder="Email*"  name="email">
    </div><br> -->
    <div class="input-item-box">
        <input type="username" placeholder=""  name="Username" required>
        <label> Username</label>
    </div><br>
    <div class="input-item-box">
        <input type="pass" placeholder="" name="passward" required>
        <label> Passward</label>
    </div><br>
    <div class="input-item-box">
        <input type="conpass" placeholder="" name="confirmpassward" required> 

        <label>Confirm passward</label>
    </div>
    <div class=" remember-Forgot">
        <!-- <label><input type="checkbox">Remember me</label> -->
        <p>Already Sign up?
        <a href="login.php">Login</a></p>
    </div>

    <button type="submit" class="btn">
      Submit</button>
    </form>
</div>

    

</body>
</html>