<?php

        include '../include/conn.php';
    
    
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $number = $_POST['number'];



echo $id ; 
echo $fname ;
echo $mname ;
echo $lname ;
echo $email;
echo $gender ;
echo $username;
echo $password;
echo $number;
   

        $query = "UPDATE boardinghouseowner set FirstName = '$fname' , MiddleName = '$mname' , LastName = '$lname' , email = '$email' , Gender = '$gender'  ,
        
         UserName = '$username', Password = '$password' ,Number = '$number' where id = '$id' ";
        

        $result =mysqli_query($conn, $query);


    
 header('location:profile.php');



?>