<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="../css/boardinghouses.css">
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
      <h1>Boarding House </h1>
      <br>
      <br>
      <div class="button_position">

        <button type="button" class="btn btn-primary" @Click="modal = true ">Add Boarding House</button>

      </div> 
      <br>
        <div class="table_position">
            
            <table class="table">   
            <thead class="thead-dark">
        
            <tr>     
            
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Number</th>
            <th scope="col">Rent</th>
            <th scope="col">Action</th>  

            </tr>

             <?php  include 'getbhouse.php';?>

            </thead>
            </table>  

        </div>

       
        <?php


                    include '../include/conn.php';

                    $id  = $_GET['id'];
                    $query = "SELECT * from boardinghouse where id  = $id";

                    $result = mysqli_query($conn , $query);


                    while ($row  =  mysqli_fetch_array($result))
                    {
                    ?>



    <div class="modal_position ">
        
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Update Boarding House</h5>
                   <a href="bhouse.php">  <button class="close" type="button" @Click="modal = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                    </a>
                </div>
                    <div class="modal-body p-4">
                        <form action="saveupdatebhouse.php" method="POST" enctype="multipart/form-data">

                           
                            <div class="form-group">
                             <input type="text" name="name" value="<?php echo $row['Name']?>" class="form-control form-control-lg" 
                             placeholder="Name">
                            </div>

                            <div class="form-group">
                             <input type="text" name="address" value="<?php echo $row['Address']?>"  class="form-control form-control-lg" 
                             placeholder="Address">
                            </div>

                            <div class="form-group">
                             <input type="text" name="number" value="<?php echo $row['Number']?>"  class="form-control form-control-lg" 
                             placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <input type="text" name="rent"  value="<?php echo $row['Rent']?>" class="form-control form-control-lg" 
                                placeholder="Rent"> 
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="file" name="image" value="<?php echo $row['image']?>"class="form-control form-control-lg" 
                                placeholder="Image">
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Boarding House</button>
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
                           