<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BugMedetails</title>
    <link href="detail.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Bugme.js" type="text/javascript"></script>
</head>
<body>
    <p>
   <div>
            <?php
            include 'dbconnect.php';
            $id = $_GET["id"];

            $sql = $conn->query("SELECT * FROM issues WHERE id = ".$id);
            $row = $sql->fetch();

            echo "

                <div id='heading'>
                    <div><h1 id=heads>".$row['title']."</h1></div>
                    <div><h3>Issue#".$row['id']."</h3></div>
                </div>

            <div class='flex'>
                <div>
                    <p>
                    <div id='issue'>
                    <div>
                    ".$row['description']."
                    </div>
                    <br/>
                    <div> <b>Date created: </b>".$row['created'] ."</div>

                    <div><b> Date Updated: </b>". $row['updated']." </div>
                    </p>
                    </div>
                </div>

                <div>
                    <div id='sidebar'>
                    <div>
                    Assigned to ".$row['assigned_to'].
                    "</div>
                    <div>
                    Created by ".$row['created_by']."
                    </div>
                    <div> Type: ".$row['type']."</div>
                    <div> Priority: ".$row['priority']."</div>
                    </div>
                </div>
            </div>


                    <div id='markIssue'>
                    <div>
                    <button id='closed' value='".$row['id']."'>Mark as closed</button>
                    </div>
                    <div>
                    <button id='progress' value='".$row['id']."'>Mark in progress</button>
                    </div>
                    </div>
                ";



            ?>
            </div>
            </p>


</body>
<html>