<?php
session_start();
$conn1 = mysqli_connect("localhost","root","1234","user_cart")or die(mysqli_error());
if(isset($_SESSION['userpass']))
{

    $user_pass=$_SESSION['userpass'];
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
// if($result){
   
//     header('location:home1.php');
   
// }
// else{
//    echo "no";
//    header('location:home1.php');
// }

}
?>
