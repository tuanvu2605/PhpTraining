<?php
include 'db.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>My first PHP program</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
 <div><nav><a href="index.php">My first PHP program</a></nav></div>
  <main>
  <div clas="message"></div>



  <div class="left">
  <form action="saveTask.php" method="POST">
  <div class="input-wrapper">
  <input type="text" name="title" placeholder="Title task"></div>
  <div class="input-wrapper">
  <textarea name="description" cols="30" rows="10" placeholder="Description task"></textarea>
  <div class="input-wrapper">
  <input type="submit" value="Save task" name="saveTask"></div>
  </form>
  </div>

  <div class="right">
  <table>
  <thead>
  <th>Title</th>
  <th>Description</th>
  <th>Created at</th>
  <th>Action</th>
  </thead>
  <tbody>
  <?php 
   $sql = "SELECT * FROM myTable";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_array($result)){?>
     <tr>
     <td><?php echo $row['title']?></td>
     <td><?php echo $row['description'] ?></td>
     <td><?php echo $row['created_at'] ?></td>
     <td>
     <a href="updateTask.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit"></i></a>
     <a href="deleteTask.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a>
     </td>
     </tr>
     <?php
     };
   };
  ?>
  </tbody>
  </table>
  </div>
  </main>
 </body>
 </html>