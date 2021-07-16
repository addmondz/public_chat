<?php
  $hostname = "localhost";
  $username = "projyhix_user1";
  $password = "N^Z{Wj}k?Af0";
  $dbname = "projyhix_chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  } else {
    echo "Database connected sucefully";
  }
?>
