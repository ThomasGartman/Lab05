<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c033g196", "ooT9ohve", "c033g196");

if($mysqli->connect_errno)
{
  die("Connect failed: ". $mysqli->connect_errno);
}

$query = "INSERT INTO Users(user_id) VALUES ('". $_POST['user'] . "')";

if($result = $mysqli->query($query))
{
  echo "User " . $_POST['user'] . " added successfully.\n";
}
elseif($mysqli->errno == 1062)
{
  echo "Error: User " . $_POST['user'] . " already taken.\n";
}
else
{
  echo "Unspecified Error";
}
$mysqli->close();
?>
