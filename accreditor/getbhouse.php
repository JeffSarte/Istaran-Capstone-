<?php



include '../include/conn.php';



    $query = "SELECT * FROM boardinghouse order by Name asc";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
        ?>
                   
                <div class="col-lg-3  portfolio-item ">
                <div class="card h-500" style="width: 24rem";>
                <?php echo "<img   src='../boardinghouse/bhouseimage/".$row['image']."'>"; ?>
                <div class="card-body">
                    <h4 class="card-title">
                    <a href="#"> <?php echo $row['Name']; ?> </a> 
                    </h4>
                    <p class="card-text">Address : <?php echo $row['Address']; ?></p>
                   
                    <a href="viewdetails.php?id=<?php echo $row['Number']; ?> " >View Details</a>
                </div>


  
</div>
</div>
        
            
        <?php     
}


?>



