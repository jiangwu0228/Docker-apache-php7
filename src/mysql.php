<?php

 $database = "users";
 $user = "root";
 $password = "jasonwu";
 $host = "mysql";

 $link = mysqli_connect("$host","$user","$password");
if (!$link) {
    die('Could not connect: ' );
}
echo 'Connected successfully! wow!';
mysqli_close($link);

?>