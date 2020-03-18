<?php

    include '../include/conn.php';


    $query = "SELECT * FROM accreditor";

     $result =  mysqli_query($conn, $query);


    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                    
                    <td><?php echo strtoupper($row['School']); ?></td>
                    <td><?php echo $row['email'] ; ?></td> 
                    <td><?php echo $row['number'] ; ?></td> 
                    
                    <td><?php echo $row['UserName']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    
                    <td>

                  
                        <a href="delaccreditor.php?id=<?php echo $row['id']; ?>" ><i class="fas fa-trash"> </i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="updateaccreditor.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                                    
                                    
                  
                     </td>
                </tr>
            </tbody>
            
        <?php     
}


?>