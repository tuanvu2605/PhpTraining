<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row">
  <div class="col-sm-3">
      
      </div>
    <div class="col-sm-6">
    <form id="edit" action = "http://localhost/MVCbase/app/?a=update" method="POST">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Name" value="<?php if(isset($data))echo $data[0]['name']?>">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email" value="<?php if(isset($data))echo $data[0]['email']?>" >
    </div>
    <div class="form-group">
      <input type="text"
        class="form-control" name="id" id="id" aria-describedby="helpId"  hidden value= <?php echo $data[0]['id']?>>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <!-- <script stype="text/javascript">
  $('#edit').submit(function (e) { 
    e.preventDefault();
    $id = $('user_id').val();
    $.ajax({
      method: "POST",
      url: "
      data: new FormData(this),
      dataType: false,
      contentType:false,
      success: function (response) {
        header('location : http://localhost/MVCbase/app/')
      }
    });
  });
  </script> -->
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</body>
</html>