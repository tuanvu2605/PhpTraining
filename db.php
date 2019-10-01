<?php 
$dbServerName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB";
$conn = mysqli_connect($dbServerName, $userName, $password, $dbName);
if (!$conn) die(mysql_connect_error());
$sql ="CREATE TABLE myTable(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";
$result = mysqli_query($conn, $sql);
?>