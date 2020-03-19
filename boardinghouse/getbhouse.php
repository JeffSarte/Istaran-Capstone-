<?php


include '../include/conn.php';

    $query = "SELECT * FROM `boardinghouse` ";

    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                <td><?php echo strtoupper($row['Name']); ?></td> 
                    <td><?php echo $row['Address']; ?></td>
                    
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['Rent']; ?></td>
                    
                    <td>

                         <a href="delbhouse.php?id=<?php echo $row['id']; ?>" ><i class="fas fa-trash"> </i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="updatebhouse.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a>
                                    
                     </td>
            </tbody>
            
        <?php     
}


?>