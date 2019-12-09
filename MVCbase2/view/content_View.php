<?php foreach($data as $row){?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo  $row['gender'] ?></td>
                </tr>
                <?php } ?>