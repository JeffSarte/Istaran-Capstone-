<?php

    include '../include/conn.php';

   
        $id = $_GET['id'];
        $query = "DELETE  FROM boardinghouse where id = '$id'";

        
       
        $query_run = mysqli_query($conn,$query);


        
       
    header('location:bhouse.php');
    
    

?>  