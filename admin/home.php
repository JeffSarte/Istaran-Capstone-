<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body>
 
  <?php  include 'dashboard.php'; ?>

    <div class="content">
       <div class="card_position">
              
      <br><br><br><br><br><br><br><br>
      <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"> <i class="fas fa-user-friends fa-3x"></i>  &nbsp; &nbsp; Boarders</h5>

                <?php 
                
                    include '../include/conn.php';

                    $result=mysqli_query($conn,"Select * from boarder");
                    $totalboarder = mysqli_num_rows($result);

                    ?>

            <h5 class="card-title"> &nbsp; &nbsp; &nbsp;  <?php echo $totalboarder; ?></h5>
            </div>
            </div>

          

          <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"> <i class="fas fa-school fa-3x" > </i>  &nbsp; &nbsp; Accreditors</h5>

                <?php 
                
                    include '../include/conn.php';

                    $result=mysqli_query($conn,"Select * from accreditor");
                    $totalaccreditor = mysqli_num_rows($result);

                    ?>

            <h5 class="card-title"> &nbsp; &nbsp; &nbsp; <?php echo $totalaccreditor; ?></h5>
            </div>
            </div>

         
        
 

         <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"> <i class="fas fa-home fa-3x"></i> &nbsp; &nbsp; Boarding House</h5>
                <?php 
                
                include '../include/conn.php';

                $result=mysqli_query($conn,"Select * from boardinghouse");
                $totalboardinghouse = mysqli_num_rows($result);

                ?>

                <h5 class="card-title"> &nbsp; &nbsp; &nbsp; <?php echo $totalboardinghouse; ?></h5>
            </div>
            </div>
        
      
            </div>
    </div>

  </body>
</html>
                           