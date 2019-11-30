<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("loaction:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title></title>
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="Bugme.js" type="text/javascript"></script>
    </head>
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
                <div><a href="profile.php">Home</a></div>
                <div><a id="adduser" href="adduser.html" >Add User</a></div>
                <div><a id="addIssue" href="addissue.html" >New Issue</a></div>
                <div><a href="logout.php">Log Out</a></div>
            </div>
        </nav>


        <main id="main1">
            <p>
                <div>
                     <h2> Issues </h2>
                </div>

                <div>

                    <?php require 'dbconnect.php';
                    //echo $_SESSION["login_user"];
                    $sql = $conn->query("SELECT * FROM issues"); ?>
                    <table id="customer">
                        <tr>

                            <th>Title</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Assigned to</th>
                            <th>Date Created</th>
                    <?php while ($row = $sql->fetch()) {
                        echo "<tr>";

                        echo "<td>"." "."<button id='btn' value=".$row['id'].">".$row['title']."</button></td>";
                        echo "<td>".$row['type']."</td>";
                        echo "<td>".$row['status']."</td>";
                        echo "<td>".$row['assigned_to']."</td>";
                        echo "<td>".$row['created']."</td>";
                        echo "</tr>";
                        }
                        echo "</table>";

                        ?>
            </p>
            </main>


        </section>





        <div  id="profile">
        <!--<b id="welcome">welcome: <i> <?php echo $login_session;?></i></b>-->
    </div>
</body>
</html>
