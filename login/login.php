<?php
session_start();
$error="";

if (isset($_POST['submit'])){
    if(empty($_POST['email'] || empty($_POST['password']))){
        $error="Email or Password is invalid";

    }else{
        $email=$_POST['email'];
        $password=$_POST['password'];

        $host ="localhost";
        $username="root";
        $pass="";
        $dbname="tracker";

        $conn = mysqli_connect($host,$username,$pass,$dbname);
        $query= "SELECT email, password FROM users where email=? AND password=? LIMIT 1";

        $stmt =$conn->prepare($query);
        $stmt->bind_param("ss",$email,$password);
        $stmt-> execute();
        $stmt->bind_result($email,$password);
        $stmt->store_result();

        if($stmt->fetch()){
            $_SESSION['login_user'] = $email;
            header("location:profile.php");
        }
        else{
            $error="email or password is invalid";
        }
        mysqli_close($conn);
    }
}
?>