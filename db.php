<?php 

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "sandhupama_new";

  $conn = mysqli_connect($host, $user, $password, $db);

   if ($conn === false) {
  die("Connection failed: " . $conn -> connect_error);
}

?>