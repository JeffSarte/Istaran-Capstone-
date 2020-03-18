<?php

        include '../include/conn.php';
    
    
    $id = $_POST['id'];
    
    $email = $_POST['email'];
 
    $number = $_POST['number'];
 
    $school = $_POST['school'];
 
    $username = $_POST['username'];
 
    $password = $_POST['password'];
 
    

    $query = "UPDATE accreditor set email = '$email' , number = '$number' , School = '$school' , UserName = '$username' , Password = '$password' where id = '$id' ";
    

    


    $result =     mysqli_query($conn, $query);

    if ($result)
    {
        echo 'data updated';
    } else {
        echo 'Not updated';
    }
    
  header('location:accreditor.php');



?>