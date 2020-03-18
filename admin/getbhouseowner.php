<?php

    include '../include/conn.php' ;
    $get_query = "SELECT * FROM boardinghouseowner ";
    $result = mysqli_query($conn,$get_query);
    
     while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo strtoupper($row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']); ?></td> 
                    <td><?php echo $row['email']; ?></td> 
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['UserName']; ?></td> 
                    <td><?php echo $row['Password']; ?></td>
                    
                    
                    <td >

                    <a href="delowner.php?id=<?php echo $row['id']; ?>" ><i class="fas fa-trash"> </i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="updatebhouseowner.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                            
                        

                    </td>
            </tbody>
            
        <?php     
}


$output = $result->fetch_all(MYSQLI_ASSOC);

?>
        


