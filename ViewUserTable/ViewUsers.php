<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c456s526", "cez7toh4", "c456s526");

echo "<table border='solid'>";
echo "<tr><th>User Table</th></tr>";

$query = "SELECT * FROM Users";

if($result = $mysqli->query($query))
{
  while($row = $result->fetch_assoc())
  {
    echo "<tr><td>" . $row["user_id"] . "</td></tr>";
  }

  echo "</table>";
}
?>
