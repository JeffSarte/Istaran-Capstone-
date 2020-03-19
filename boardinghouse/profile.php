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

    <div class="content">
            <br>
          
           
                      

    <div class="profile_position">

        
        <br>

     <?php


            $ids = $_SESSION['id'];
            include '../include/conn.php';


            $query = "SELECT * from boardinghouseowner where id='$ids'" ;

            $result = mysqli_query($conn,$query);


            while($row = mysqli_fetch_array($result))
            {
                
            ?>  
           
                <div class="modal-header">
                   <h5 class="modal-title"></h5>
                  
                </div>
                    <div class="modal-body p-4">
                        <form action="updatebhouseowner.php" method="POST">
                              <br><br><br><br>
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                             <input type="text" name="fname" value="<?php echo $row['FirstName']; ?>"class="form-control form-control-lg" 
                             placeholder="FirstName">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mname" value="<?php echo $row['MiddleName']; ?>"  class="form-control form-control-lg" 
                                placeholder="MiddleName">
                            </div>

                            <div class="form-group">
                                <input type="text" name="lname" value="<?php echo $row['LastName']; ?>" class="form-control form-control-lg" 
                                placeholder="LastName">
                            </div>

                         
                           
                            <div class="form-group">
                                <input type="text" name="email" value="<?php echo $row['email']; ?>"  class="form-control form-control-lg" 
                                placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="number"  value="<?php echo $row['Number']; ?>" class="form-control form-control-lg" 
                                placeholder="Number">
                            </div>

                            <div class="form-group">
                                <input type="text" name="gender"  value="<?php echo $row['Gender']; ?>" class="form-control form-control-lg" 
                                placeholder="Gender">
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" value="<?php echo $row['UserName']; ?>"  class="form-control form-control-lg" 
                                placeholder="UserName">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" value="<?php echo $row['Password']; ?>"  class="form-control form-control-lg" 
                                placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
        
                        </form>
                    </div>
            </div>
            </div>
            </div>
            </div>
            <?php



}


?>

         
    </div>

  </body>
</html>
                           