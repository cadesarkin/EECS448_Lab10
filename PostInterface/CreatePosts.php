<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c456s526", "cez7toh4", "c456s526");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
}

$userID = $_REQUEST["user"];
$userContent = $_REQUEST["content"];

$check = "SELECT * FROM Users WHERE user_id = '$userID'";
$queryPostID = "SELECT * From Posts";
$postID = $mysqli->query($queryPostID)->num_rows;
$res = $mysqli->query($check);

$queryPost = "INSERT INTO Posts (post_id, content, author_id) VALUES ('$postID', '$userContent', '$userID')";

if($res->num_rows == 0) {
  printf("This user is not in the database yet");
} else {
  if ($userContent == "")
  {
    printf("Sorry you must enter content");
  } else if ($mysqli->query($queryPost)) {
    printf("Content stored");
  } else {
    printf("Error: content not stored");
  }
}

$mysqli->close();
?>
