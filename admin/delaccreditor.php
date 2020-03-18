<?php

    include '../include/conn.php';

   
        $id = $_GET['id'];
        $query = "DELETE  FROM accreditor where id = '$id'";

        echo $id;
       
        $query_run = mysqli_query($conn,$query);


        
       
    header('location:accreditor.php');
    
    

?>  