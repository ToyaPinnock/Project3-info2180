<?php

$host ="localhost";
$username="root";
$password="";
$dbname="tracker";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
try {


  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
