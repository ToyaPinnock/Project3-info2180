<?php
include("login.php");
if(isset($_SESSION["login_user"])){
    header("location:profile.php");
}
?>

<!DOCTYPE htnl>
<html>
    <head>
        <title></title>

    </head>
    <body>
        <div id="Login">
            <h2>Login to BugMe</h2>
            <form action="login.php" method="post">
            <label>Email: </label>
                <input id="email" name="email" placeholder="Email" type="email" required>
            <label> Password: </label>
                <input id="password" name="password" type="password" required>
            <input name="submit" type="submit" value="login">
            <span> <?php echo $error; ?> </span>
            </form>
        </div>
    </body>
</html>