<?php 
include 'db.php';
$id="";
$title = $description ="";
if(isset($_REQUEST['id'])){
    $id = htmlspecialchars($_REQUEST['id']);
    $sql = "SELECT * FROM myTable WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
       $row = mysqli_fetch_array($result);
       $title = $row['title'];
       $description = $row['description'];
    }};
    
    if(isset($_POST['updateTask'])){
        $id = $_REQUEST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        header("location:index.php");
    };
    $sql = "UPDATE myTable SET title= '$title',description = '$description' WHERE id= $id";
    $result = mysqli_query($conn, $sql);
       ?>
        <form action="updateTask.php?id=<?php echo $_REQUEST['id']?>" method="POST">
        <div class="input-wrapper">
        <input type="text" name="title" placeholder="Title task" value ="<?php echo $title ?>"></div>
        <div class="input-wrapper">
         <textarea name="description" cols="30" rows="10" placeholder="Description task" ><?php echo $description ?></textarea>
         <button name ="updateTask" value="updateTask" >Update task</button>
        </form>