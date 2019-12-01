
<?php
require 'dbconnect.php';

$sql = $conn->query("SELECT * FROM issues");
echo "<table><tr>";
echo "<th>Title</th>";
echo "<th>Type</th>";
echo "<th>Status</th>";
echo "<th>Assigned to</th>";
echo "<th>Date posted</th>";
echo "</tr>";
while ($row = $sql->fetch()) {
  echo "<tr>";
  echo "<td>#".$row['id']." "."<button class='problemButton' value=".$row['id'].">".$row['title']."</button></td>";
  echo "<td>".$row['type']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "<td>".$row['assigned_to']."</td>";
  echo "<td>".$row['created']."</td>";
  echo "</tr>";
}
echo "</table>";
 ?>
