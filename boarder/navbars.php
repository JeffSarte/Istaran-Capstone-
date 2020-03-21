
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">

  
    
<div class="title_position">
  
  <a class="navbar-brand" href="../index.php">ISTRAN</a>
  
  
  </div>

  <div class="position"> 

  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">

    
    <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li> &nbsp; &nbsp;  &nbsp;  &nbsp;  


      <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>&nbsp; &nbsp;  &nbsp;  &nbsp; 


      <li class="nav-item">
        <a class="nav-link" href="boardinghouse.php">Boarding Houses</a>
      </li>&nbsp; &nbsp;  &nbsp;  &nbsp;  

      <?php 
      
      include '../include/conn.php';
      $id = $_SESSION["id"]; 
      $query = "SELECT * from boarder where id = $id ";
      $result = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result))
      {
         $name = $row['FirstName'];
      }
      

      
      if ($id > 0 )
      {
        ?>

        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle "></i> &nbsp; <?php echo $name; ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
          <a class="dropdown-item" href="setting.php"><i class="fas fa-user-cog"></i> &nbsp;Setting</a>
          <a class="dropdown-item" href="logout.php"> <i class="fas fa-sign-out-alt"></i> &nbsp;Logout</a>
        </div>
        
      </li>


        <?php
      } else{

        ?>
       
      <li class="nav-item ">
        <a class="nav-link" href="">Log In</a>
        </a>
        
      </li>
      <?php

    }
  
      ?>  

    </ul>

    </div>
    </div>
     


</nav>
