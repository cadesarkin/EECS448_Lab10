<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c456s526", "cez7toh4", "c456s526");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
}

$userID = $_REQUEST["user"];

$check = "SELECT * FROM Users WHERE user_id = '$userID'";
$res = $mysqli->query($check);

$queryUserID = "INSERT INTO Users (user_id) VALUES ('$userID')";

if($res->num_rows > 0) {
  printf("Sorry, user already exists");
} else {
  if ($userID == "")
  {
    printf("Sorry you must enter a username");
  } else if ($mysqli->query($queryUserID)) {
    printf("User stored");
  } else {
    printf("Error: user not stored");
  }
}

$mysqli->close();
?>
