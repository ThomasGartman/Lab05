<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c033g196", "ooT9ohve", "c033g196");

if($mysqli->connect_errno)
{
  die("Connect failed: ". $mysqli->connect_errno);
}

$query = "SELECT user_id FROM Users";

if($result = $mysqli->query($query))
{
  while($row = $result->fetch_assoc())
  {
    echo "Username: " . $row['user_id'] . "<br>";
  }
  $result->free();
}

$mysqli->close();
?>
