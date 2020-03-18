<?php

    include '../include/conn.php';


    $query = "SELECT * FROM accreditor";

     $result = mysqli_query($conn, $query);


    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                    
                    <td><?php echo $row['School']; ?></td>
                    <td><?php echo $row['email'] ; ?></td> 
                    <td><?php echo $row['number'] ; ?></td> 
                    
                    
                    
                    <td>

                    
                        <a href="apply.php?id=<?php echo $row['id']; ?>">Apply</a>
                                       
                                   
                    
                </tr>
            </tbody>
            
        <?php     
}


?>