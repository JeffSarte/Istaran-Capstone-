

<div class="sidebar">

<div class="name">


<?php  
  
     include '../include/conn.php';

     $id   = $_SESSION['id'];

     $query ="SELECT * from accreditor where id = $id";

    $result  = mysqli_query($conn, $query );

    while ($row  = mysqli_fetch_array($result) )

    {

        ?>
                <i class="fas fa-user-shield fa-3x" ></i>  <?php echo $row["School"]; ?>
                <?php
    }

    ?>


 </div>
 <br>
 <br>
 <a href="home.php"><i class="fas fa-desktop fa-2x"></i><span> &nbsp;Dashboard</span></a>
 <a href="accredited.php"><i class="fas fa-school fa-2x"></i><span> &nbsp;Accredited </span></a>
 <a href="bhouse.php"><i class="fas fa-home fa-2x"></i><span> &nbsp;Boarding House</span></a>
 <a href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i><span> &nbsp;Logout</span></a>
 
</div>



