<?php 
include "db.php";
$id="";
if(isset($_REQUEST['id'])){
  $id = htmlspecialchars($_REQUEST['id']);
  $sql = "DELETE FROM myTable WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  header("location: index.php");
}
?>