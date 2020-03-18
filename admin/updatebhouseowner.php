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

      <h1>Boarding House Owner </h1>
      <br>
      <div class="button_position">

        <button type="button" class="btn btn-primary" @Click="modal = true ">Add BoardingHouse Owner</button>

      </div> 
      <br>
        <div class="table_position">
            
            <table class="table">  
                 
            <thead class="thead-dark">
        
            <tr>     
            
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Number</th>   
                <th scope="col">UserName</th>   
                <th scope="col">Password</th>     
                <th scope="col">Action</th>    

            </tr>

             <?php  include 'getbhouseowner.php'; ?>

            </thead>

            </table>  

        </div>


        <?php


            include '../include/conn.php';

            $id  = $_GET['id'];
            $query = "SELECT * from boardinghouseowner where id  = $id";

            $result = mysqli_query($conn , $query);


            while ($row  =  mysqli_fetch_array($result))
            {
            ?>

            <div class="modal_position ">
                
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Update BoardingHouse Owner</h5>
                        <a href="bhouseowner.php"> <button class="close" type="button" @Click="modal = false">
                        <span aria-hidden="true"> &times</span>
                        </button>
                            </a>
                        </div>
                            <div class="modal-body p-4">
                                <form action="updatebhouseowners.php" method="POST">

                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="form-group">
                                    <input type="text" name="fname" value="<?php echo $row['FirstName']?>" class="form-control form-control-lg" 
                                    placeholder="FirstName">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mname" value="<?php echo $row['MiddleName']?>"  class="form-control form-control-lg" 
                                        placeholder="MiddleName">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="lname" value="<?php echo $row['LastName']?>" class="form-control form-control-lg" 
                                        placeholder="LastName">
                                    </div>

                                
                                
                                    <div class="form-group">
                                        <input type="text" name="email" value="<?php echo $row['email']?>"  class="form-control form-control-lg" 
                                        placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="number" value="<?php echo $row['Number']?>" class="form-control form-control-lg" 
                                        placeholder="Number">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="gender" value="<?php echo $row['Gender']?>" class="form-control form-control-lg" 
                                        placeholder="Gender">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="username" value="<?php echo $row['UserName']?>"  class="form-control form-control-lg" 
                                        placeholder="UserName">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="password" value="<?php echo $row['Password']?>" class="form-control form-control-lg" 
                                        placeholder="Password">
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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script type="text/javascript" src="../js/accreditor.js"></script>
</body>
</html>