<?php

 $database = "users";
 $user = "root";
 $password = "jasonwu";
 $host = "mysql";

 $db = mysqli_connect("$host","$user","$password");

 if (!$db) {
  echo "Cannot connect to the database server";
 }elseif ($db && !(mysql_select_db($SQL_DBASE, $db))) {
  echo "Successfully connected to the database server! Database Users selected!";
 }

?>