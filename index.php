<?php
session_start();
include("demo.php");

$che = "ok"; // Assuming you intend to search for usernames equal to "ok"
echo "ok"; // This line is for debugging purposes; you can remove it once everything is working

// Corrected SQL query with proper variable usage
$result = mysqli_query($conn, "SELECT * FROM `login` WHERE `username`='$che'");
$row_count = mysqli_num_rows($result);

if ($row_count > 0) {
    echo "$row_count"; // Output the number of rows found (for debugging)
    // Here you might want to handle the case where the username 'ok' already exists
    // For example, you could redirect the user back to the registration page
    // echo "<script>window.open('register.php','_self')</script>";
} else {
    echo "ok"; // This will execute if no rows are found with username 'ok'
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>

    <h1>WELCOME USER </h1>
    <h3>YOU HAVE SUCCESSFULLY LOGIN</h3>
    <a href="login.php">LOGOUT</a>ss
</body>
</html>