<?php
session_start();
if($_GET['username'])
{

  session_unset();
    session_destroy();
    echo "<script>confirm('Are you sure you want Logout ?')</script>";
    echo"<script>alert('Logged Out Successfully')</script>";
    echo "<script>window.open('home1.php','_self')</script>";

}
?>
