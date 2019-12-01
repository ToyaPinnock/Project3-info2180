<?php
include("login.php");
if(isset($_SESSION["login_user"])){
    header("location:main.php");
}
?>

<!DOCTYPE htnl>
<html>
    <head>
        <title></title>
        <link href="login.css" rel="stylesheet">

    </head>
    <body>
        <div id="login">
            <div class="head-log">
                <div>
                <img src="image/bug.jpg" alt="bug logo" weight=80px height=40px>
            </div>
                <div>
                <h2>Login to BugMe</h2>
            </div>

            </div>
            <form action="login.php" method="post">
            <label>Email: </label>
            <br>
                <input id="email" name="email" placeholder="name@bugme.com" type="email" required>
            <br>
            <label> Password: </label>
            <br>
                <input id="password" name="password" type="password" placeholder="*******" required>
            <br>
            <input id="submit" name="submit" type="submit" value="login" >

            </form>
            <span> <?php echo $error; ?> </span>
        </div>
    </body>
</html>