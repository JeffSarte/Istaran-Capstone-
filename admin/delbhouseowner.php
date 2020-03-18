<?php

    include '../include/conn.php';

   
        $id = $_POST['id'];
        $query = "DELETE  FROM boardinghouseowner where id = '$id'";

        
       
        $query_run = mysqli_query($conn,$query);


        
       
    header('location:bhouseowner.php');
    
    

?>  