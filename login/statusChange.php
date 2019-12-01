<?php
include 'dbconnect.php';

$stmt = $conn->prepare("UPDATE issues SET status= :status WHERE id= :id;");
$stmt->bindParam('status', $_GET['status']);
$stmt->bindParam('id', $_GET['id']);
$stmt->execute();

echo"<h2>Status Successfully Added</h2>";


 ?>
