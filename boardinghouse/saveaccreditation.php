<?php 


        include '../include/conn.php';

      session_start();   
       $ownerid =   $_SESSION['id'];
     
       $query = "SELECT * FROM boardinghouse WHERE bhouse_id = '$ownerid' ";

        $result = mysqli_query($conn,$query);
      
        
        while($row = mysqli_fetch_array($result))
        {     
             echo  $id = $row['id'] ;
        }

    $accreditor_id =  $_POST['getid'];
    $date = $_POST['date'];
            
  
    
    $query = "INSERT INTO accreditation (bhouse_id , accreditor_id ,date,status) values ('$id','$accreditor_id','$date',0)";

    mysqli_query($conn,$query);


   header('location:accreditation.php');
?>