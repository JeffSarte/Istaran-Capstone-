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

    <div class="content">
        <br>
        <br>
        <br>

      <h1>  Boarder </h1>
      <br>
        <br>
        <br>
        <div class="table_position">
            
            <table class="table">  
                 
            <thead class="thead-dark">
        
            <tr>     
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">School</th>   
                <th scope="col">Status</th>   
                <th scope="col">UserName</th>     
                <th scope="col">Password</th>      
                <th scope="col">Gender</th>   
                <th scope="col">Number</th>   
                <th scope="col">Email</th>   
                <th scope="col">Action</th>  
            </tr>

             <?php  include 'getboarder.php';?>
    
            </thead>

            </table>  

        </div>

    </div>

    


</body>
</html>