<?php
$conn=mysqli_connect("localhost","root","","tracker");
session_start();

$email_check= $_SESSION['login_user'];

$query= "SELECT email from users where email='email_check' ";
$ses_sql=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['email'];
?>