

<div class="sidebar">

<div class="name">

     <?php  
     include '../include/conn.php';

        $id   = $_SESSION['id'];

     $query ="SELECT * from boardinghouseowner where id = $id";

    $result  = mysqli_query($conn, $query );

    while ($row  = mysqli_fetch_array($result) )

    {

        ?>
                

        <?php echo $row["FirstName"]; ?>
                <?php
    }

    ?>


 </div>
 <br>
 <br>
 <a href="home.php"><i class="fas fa-desktop fa-2x"></i><span> &nbsp;Dashboard</span></a>
 <a href="profile.php"><i class="far fa-address-card fa-2x"></i><span> &nbsp;Profile</span></a>
 <a href="boarder.php"><i class="fas fa-users fa-2x"></i><span> &nbsp;Boarder</span></a>
 <a href="accreditation.php"><i class="far fa-address-book fa-2x"></i><span> &nbsp;Apply Accreditation</span></a>
 <a href="bhouse.php"><i class="fas fa-home fa-2x"></i><span> &nbsp;Boarding House</span></a>
 <a href="report.php"><i class="fas fa-file-signature fa-2x"></i><span> &nbsp;Report</span></a>
 <a href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i><span> &nbsp;Logout</span></a>
 
</div>



