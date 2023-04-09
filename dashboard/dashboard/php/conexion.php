<?php
$servername = "162.241.61.215";
$database = "pointsof_Krisapaxvls";
$username = "pointsof_Ticketagp";
$password = "EwyO%*p1492JXnkMgT8RX1";
// Create connection
  $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8
mysqli_close($conn);
?>