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
      <h1>Accredited Boarding House </h1>
      <br>
      <br>
        <div class="table_position">
            
            <table class="table">   
            <thead class="thead-dark">
        
            <tr>     
            
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th> 
            <th scope="col">View</th>  

            </tr>
            
             <?php include 'getaccredited.php'?>

            </thead>
            </table> 
            
            
            <?php


                $ids = $_GET['id'];
                include '../include/conn.php';




                $query = " SELECT  accreditation.id , accreditation.date ,  accreditation.status ,accreditation.bhouse_id ,boardinghouse.Name , boardinghouse.Address  ,accreditor.School
                from accreditation
                JOIN boardinghouse on accreditation.bhouse_id = boardinghouse.id
                JOIN accreditor ON accreditation.accreditor_id = accreditor.id
                where accreditation.id = '$ids' " ;

                $result = mysqli_query($conn,$query);



                while($row = mysqli_fetch_array($result))
                {
                    
                ?>   

            <div class="modal-dialog">  
            <div class="modal-content">
                <div class="modal-header">

                
                   <h5 class="modal-title">Boarding House Information</h5>
                   <a href="accredited.php"> <button class="close" type="button" @Click="modal = false">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </a>
                </div>
                    <div class="modal-body p-4">

                        <form action="updateaccreditation.php" method="POST">
                       
                        <input type="hidden" name="getid" value="<?php echo $row['id'];?>" >

                    <input type="hidden" name="accreditorid" value="<?php echo $id = $_SESSION['id'];?>" >
                    <input type="hidden" name="owner" value="<?php echo $row['bhouse_id'];?>" >
                      
                        <div class="form-group">
                                <input type="text" name="name" value="<?php echo $row['Name'];?>" class="form-control form-control-lg" 
                                readonly>
                            </div>

                        <div class="form-group">
                             <input type="protected" name="address"value="<?php echo $row['Address'];?>"  class="form-control form-control-lg" 
                            readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" name="date"value="<?php echo $row['date'];?>"  class="form-control form-control-lg" 
                                readonly>
                            </div>
                            <br>
                        <?php echo $row['status'];?>

                           
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name ="accredited" id="exampleFormControlSelect1">

                                if (<?php echo $row['status']?> = 0)
                            {

                          
                                    <option value="0"> Not Accredited</option>    }
                             
                            else{

                            
                                    <option value="1"> Accredited</option>}
                                
                                
                                
                                </select>
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
    


           
</body>
</html>