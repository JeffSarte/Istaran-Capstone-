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
        <br>
      <h1>Accreditor</h1>
    <br>
      
        <div class="table_position">
            
            <table class="table">   
            <thead class="thead-dark">
        
            <tr>     
            
                <th scope="col">School</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
               
                <th scope="col">Action</th>     

            </tr>

            <?php  include 'getaccreditor.php';?>

            </thead>
            </table>  

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
                   <h5 class="modal-title">Apply For Accreditation</h5>
                   <a href="accreditation.php"> <button class="close" type="button" @Click="modal = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </a>
                </div>
                    <div class="modal-body p-4">
                        <form action="saveaccreditation.php" method="POST">
                    
                        <input type="hidden" name="accreditor_id" values="<?php echo $_GET['id'];?>">
                        <input type="hidden" name="owner_id" values="<?php echo $_SESSION['id'];?>">
                        <?php echo $_GET['id'];?>
                        <?php echo $_SESSION['id'];?>
                        <div class="form-group">
                                <input type="text" name="school" value="<?php echo $row['School'];?>" class="form-control form-control-lg" 
                                readonly>
                            </div>

                        <div class="form-group">
                             <input type="protected" name="email"value="<?php echo $row['email'];?>"  class="form-control form-control-lg" 
                            readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" name="number"value="<?php echo $row['number'];?>"  class="form-control form-control-lg" 
                                readonly>
                            </div>
                            <br>

                            <h4>Set Schedule Accreditation Visit</h4>
                            
                            <div class="form-group">
                             <input type="date" name="date"   class="form-control form-control-lg">
                            </div>
                         

                           

                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
        
                        </form>
                    </div>
            </div>
            </div>
            </div>

            <?php
        }
            ?>
    </div>
    </div> 
      

    </div>
    
  </body>
</html>
                           