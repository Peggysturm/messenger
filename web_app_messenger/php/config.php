<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatik";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Ошибка подключения базы данных".mysqli_connect_error();
  }
?>
