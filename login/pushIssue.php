<?php
require "dbconnect.php";


$status="Open";
date_default_timezone_set("America/New_York");
$date= date("Y/m/d")." ". date("h:i.sa");


$stmt = $conn->prepare("INSERT INTO issues ( title, description, type, priority,
        status, assigned_to, created_by, created, updated) VALUES (:title, :description, :type, :priority,
        :status, :assigned_to, :created_by, :created, :updated)");


    $stmt->bindParam(':title', $_GET['title']);
    $stmt->bindParam(':description', $_GET["description"]);
    $stmt->bindParam(':type', $_GET["type"]);
    $stmt->bindParam(':priority', $_GET["priority"]);
    $stmt->bindParam(':assigned_to', $_GET["assigned"]);
    $stmt->bindParam(':created_by', $_GET["created"]);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':created', $date);
    $stmt->bindParam(':updated', $date);

    $stmt->execute();

header('location:main.php');

?>
