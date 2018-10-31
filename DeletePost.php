<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "c033g196", "ooT9ohve", "c033g196");

  if($mysqli->connect_errno)
  {
    die("Connection Failed: " . $mysqli->connect_errno);
  }

  $query = "DELETE FROM Posts WHERE post_id=" . $_POST['post_id'];

  if($result = $mysqli->query($query))
  {
    echo "Post ID: " . $_POST['post_id'] . " successfully deleted.<br>";
  }
  else
  {
    echo "ERROR: " . $mysqli->error . "<br>";
  }
  $mysqli->close();
  echo "<a href='DeletePost.html'>Return to Post List</a>";
?>
