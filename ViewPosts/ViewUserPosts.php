<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c456s526", "cez7toh4", "c456s526");

$userID = $_REQUEST["users"];

$query = "SELECT * FROM Posts WHERE author_id = '$userID'";

echo "<table border='solid'>";
echo "<tr><th>User Table</th></tr>";

if($result = $mysqli->query($query))
{
  while($row = $result->fetch_assoc())
  {
    echo "<tr><td>" . $row["content"] . "</td></tr>";
  }
  echo "</table>";
}
?>
