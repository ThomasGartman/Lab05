<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c033g196", "ooT9ohve", "c033g196");

if($mysqli->connect_errno)
{
  die("Connect failed: ". $mysqli->connect_errno);
}

$query1 = "SELECT * FROM Users(user_id)";

if($result1 = $mysqli->query($query1))
{
  while($row1 = $result1->fetch_assoc())
  {
    //if($_row1['user_id'])
    //{
      echo $_row1['user_id'] . "<br>";
    //}
  }
  $result->free();
}

$query2 = "INSERT INTO Posts(content, author_id) VALUES ('" . $_POST['post'] . "', '" . $_POST['user'] . "')";

if($result = $mysqli->query($query2))
{
  echo "Post \"" . $_POST['post'] . "\" from user " . $_POST['user'] . " submitted successfully.\n";
}
else
{
  echo "Error: " . $mysqli->errno . "<br>";
  echo "Error: " . $mysqli->error . "<br>";
}
$mysqli->close();
?>
