<?php
require 'dbconnect.php';

$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, password
, email) VALUES (:first_name, :last_name, :password, :email)");

$stmt->bindParam(':first_name', $_GET['fname']);
$stmt->bindParam(':last_name', $_GET['lname']);
$stmt->bindParam(':password', $_GET['pass']);
$stmt->bindParam(':email', $_GET['email']);

$stmt->execute();

header('location:profile.php');
 ?>
