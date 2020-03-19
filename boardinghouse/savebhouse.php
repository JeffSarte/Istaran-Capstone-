<?php

    include '../include/conn.php';


           session_start(); 

    $msg = "";
    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $rent = $_POST['rent'];
    $bhouse_id = $_SESSION['id'];
    $target = "bhouseimage/".basename($_FILES['image']['name']);
    $image  = $_FILES['image']['name'];


 

    $query ="INSERT into boardinghouse (Name , Address,Number, Rent , bhouse_id ,image) values ('$name', '$address','$number','$rent','$bhouse_id','$image');";

    mysqli_query($conn,$query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
        $msg = "image upload";
        echo $msg;  
    
    }
    else
    {

        $msg = "not";
        echo $msg;
    }
    header('location:bhouse.php');  
    
?>