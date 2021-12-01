<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c456s526", "cez7toh4", "c456s526");

foreach($_POST["postID"] as $value)
{
  $query = "DELETE FROM Posts WHERE post_id='$value'";
  $mysqli->query($query);
}
if ($mysqli->query($query)) {
  printf("Post Deleted");
}

$mysqli->close();
?>
