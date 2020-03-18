<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>


    <?php  include 'dashboard.php'; ?>
    <div id = hide>
    <div class="content">
        <br>
        <br>
        <br>
        <br>
      <h1>Accreditor</h1>
    <br>
      <div class="button_position">

        <button type="button" class="btn btn-primary" @Click="modal = true ">Add Accreditor</button>

      </div> 
      <br>
        <div class="table_position">
            
            <table class="table">   
            <thead class="thead-dark">
        
            <tr>     
            
                <th scope="col">School</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">UserName</th>   
                <th scope="col">Password</th>   
                <th scope="col">Action</th>     

            </tr>

             <?php  include 'getaccreditor.php';?>

            </thead>
            </table>  

        </div>
    <?php


    include '../include/conn.php';

    $id  = $_GET['id'];
    $query = "SELECT * from accreditor where id  = $id";

    $result = mysqli_query($conn , $query);


    while ($row  =  mysqli_fetch_array($result))
    {
     ?>

    
    <div class="modal_position ">
       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Update Accreditor</h5>
                 <a href="accreditor.php"> <button class="close" type="button" @Click="modal = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                  </a>

                </div>
                    <div class="modal-body p-4">
                        <form action="updateaccreditors.php" method="POST">
                            
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <div class="form-group">
                             <input type="text" name="email"  value="<?php echo $row['email'];?>" class="form-control form-control-lg" 
                             placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" value="<?php echo $row['number'];?>" class="form-control form-control-lg" 
                                placeholder="Number">
                            </div>

                            <div class="form-group">
                                <input type="text" name="school"  value="<?php echo $row['School'];?>" class="form-control form-control-lg" 
                                placeholder="School">
                            </div>

                         
                           
                            <div class="form-group">
                                <input type="text" name="username"  value="<?php echo $row['UserName'];?>" class="form-control form-control-lg" 
                                placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input type="text" name="password"  value="<?php echo $row['Password'];?>" class="form-control form-control-lg" 
                                placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Accreditor</button>
                            </div>
        
                        </form>
                    </div>
            </div>
            </div>
           
            <?php
        }
            ?>

    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script type="text/javascript" src="../js/accreditor.js"></script>
</body>
</html>