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

              
      
      

    </div>

  </body>
</html>
                           