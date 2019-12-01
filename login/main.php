<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("loaction:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BugMe</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Bugme.js" type="text/javascript"></script>
</head>

<body>
<body>
    <section class="contain">

        <header>
            <div class="head-cont">
            <div>
                <img src="image/bug.jpg" alt="bug logo" weight=80px height=40px>
            </div>

            <div id="heading">
                <h1> BugMe Issues</h1>
            </div>
            </div>
        </header>

        <nav>
            <div class= "sidenav">
                <div><a id="home" href="main.php">Home</a></div>
                <div><a id="addUser" href="addUser.html" >Add User</a></div>
                <div><a id="addIssue" href="addissue.html" >New Issue</a></div>
                <div><a href="logout.php">Log Out</a></div>
            </div>
        </nav>


        <main id="main1">
            <p>
                <div>
                    <h2> Issues </h2>
                </div>
                <div id= "content">

                </div>



            </p>
        </main>
    </section>


</body>

</html>
