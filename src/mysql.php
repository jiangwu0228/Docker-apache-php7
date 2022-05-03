<?php

 $database = "users";
 $user = "root";
 $password = "jasonwu";
 $host = "mysql";

//  $link = mysqli_connect("$host","$user","$password");
// if (!$link) {
//     die('Could not connect: ' . mysqli_error($mysqli));
// }
// echo 'Connected successfully! wow!';
// mysqli_close($link);

$mysqli = new mysqli("$host","$user","$password");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo "Connected successfully! wow!!!";

?>