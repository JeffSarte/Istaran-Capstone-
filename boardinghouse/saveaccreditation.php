<?php 


        include '../include/conn.php';

        session_start();

                
       $ownerid =   $_SESSION['owner_id'];
       $query = "SELECT * FROM boardinghouse WHERE bhouse_id = '$ownerid' ";

        $result = mysqli_query($conn,$query);
      
        
        while($row = mysqli_fetch_array($result))
        {
               $id = $row['id'] ;
        }
 
    $ids = $_POST['accreditor_id'];
    $date = $_POST['date'];
            
    
 echo $id ;
 echo $ids ;
 echo $date;

//     $query = "INSERT INTO accreditation (bhouse_id , accreditor_id ,date,status) values ('$id','$ids','$date',0)";

//     mysqli_query($conn,$query);


//    header('location:accreditation.php');
?>