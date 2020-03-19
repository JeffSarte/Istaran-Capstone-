<?php

        include '../include/conn.php';
    
    
    $accreditor = $_POST['accreditorid'];
    $accreditation = $_POST['getid'];
    $status = $_POST['accredited'];
    $owner  = $_POST['owner'];
    $date = $_POST['date'];

    

    

    $query = "UPDATE `accreditation` SET  bhouse_id = '$owner' , accreditor_id = '$accreditor' , date = '$date' , status = '$status' WHERE id = $accreditation";


    $result =     mysqli_query($conn, $query);

    if ($result)
    {
        echo 'data updated';
    } else {
        echo 'Not updated';
    }
    
   header('location:accredited.php');



?>