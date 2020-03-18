<?php
    include '../include/conn.php';

    $email = $_POST['email'];
    $number = $_POST['number'];
    $school = $_POST['school'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    

    $query ="INSERT INTO `accreditor`( `email`, `number`, `School`, `UserName`, `Password`) 
    values ('$email', '$number', '$school' , 
    '$username', '$password');";

      mysqli_query($conn,$query);

      header ('location:accreditor.php');  



?>