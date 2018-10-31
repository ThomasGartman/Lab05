<?php
echo "<style>
table, td {
  border:1px solid black;
}</style>";
$mysqli = new mysqli("mysql.eecs.ku.edu", "c033g196", "ooT9ohve", "c033g196");

if($mysqli->connect_errno)
{
  die("Connect failed: ". $mysqli->connect_errno);
}
$user = $_POST['userlist'];
$query = "SELECT post_id, content FROM Posts WHERE author_id='" . $user . "'";
if($result = $mysqli->query($query))
{
  echo "<table>";
  echo "<tr><td>Post Id</td><td>Post</td></tr>";
  while($row = $result->fetch_assoc())
  {
    echo "<tr><td>" . $row['post_id'] . "</td><td>" . $row['content'] . "</td></tr>";
  }
  echo "</table>";
  $result->free();
}
$mysqli->close();
?>
