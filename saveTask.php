<?php
include "db.php";
$title = $description ="";
if($_POST['saveTask']){
    $title = test_input($_POST['title']);
    $description = test_input($_POST['description']);
};
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };
  $sql = "INSERT INTO myTable(title,description) VALUES ('$title','$description')";
  $query = mysqli_query($conn, $sql);
  header("location: index.php")
 ?>