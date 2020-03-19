<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>
<body>

<?php include '../navbar.php'; ?>

<form action="login.php" method="POST">

<div style="margin-top: 150px">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        
          <input type="text" name="username" class="form-control validate" placeholder="UserName">
         
        </div>
        <span>
        <div class="md-form mb-4">
         
       
          <input type="password" name="password"  class="form-control validate" placeholder="Password">
        
        </div>
        </span>
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
  
  </div>
  
  </form>

</body>
</html>