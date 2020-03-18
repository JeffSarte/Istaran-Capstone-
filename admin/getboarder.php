<?php
    include '../include/conn.php';


    $get_query = "SELECT * FROM boarder ";
    $result = mysqli_query($conn,$get_query);
    
     while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']; ?></td> 
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['School']; ?></td> 
                    <td><?php echo $row['Status']; ?></td>
                    <td><?php echo $row['UserName']; ?></td> 
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Gender']; ?></td> 
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    
                    <td class="text-right">
                    <a href="delboarder.php?id=<?php echo $row['id']; ?>" ><i class="fas fa-trash"> </i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""><i class="fas fa-edit"></i></a>
                    
            </tbody>
            
        <?php     
}



 
        


