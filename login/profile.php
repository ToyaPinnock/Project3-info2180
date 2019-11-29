<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("loaction:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div  id="profile">

        <b id="welcome">welcome: <i> <?php echo $login_session;?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
</body>
</html>
