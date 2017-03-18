<?php
  //เชื่อมต่อฐานข้อมูล
  $conn = new mysqli("localhost","Aontam","peaw","lasada");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  mysqli_set_charset($conn,"utf8");
 ?>
