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

    <div v-if="modal">
    <div class="modal_position ">
        
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add Accreditor</h5>
                  <button class="close" type="button" @Click="modal = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </div>
                    <div class="modal-body p-4">
                        <form action="saveaccreditor.php" method="POST">

                            <div class="form-group">
                             <input type="text" name="email" class="form-control form-control-lg" 
                             placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" class="form-control form-control-lg" 
                                placeholder="Number">
                            </div>

                            <div class="form-group">
                                <input type="text" name="school" class="form-control form-control-lg" 
                                placeholder="School">
                            </div>

                         
                           
                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-lg" 
                                placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input type="text" name="password" class="form-control form-control-lg" 
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

    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script type="text/javascript" src="../js/accreditor.js"></script>
</body>
</html>