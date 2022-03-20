<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include('../Controllers/Controllers.php');
    $control = new Controllers();
    $res = $control->show_task('task');
    
    ?>
    <table class="taches">
        <tr >
            <th>
                Description
            </th>

            <th>
                Date
            </th>
            
            <th>
                Priority
            </th>
            <th>
                Status
            </th>
            <th>
                Delete
            </th>
            <th>
                Modify
            </th>
            
    </tr>
   <?php 
   if(isset($res)){
    while($row = mysqli_fetch_assoc($res) ) {?>
        <!--echo "id: " . $row["id"]. " - description: " . $row["description"]. " date : " . $row["date"]." priority : " . $row["priority"]. "<br>";-->
        <?php 
            if($row["status"] == 0){
                $color = '#ff726f';
                $status = 'Undone';
            }
            else {
                $color = '#98FB98';
                $status = 'Done';
            }
        ?>
        <tr bgcolor = <?php   echo $color; ?>>
            <td>
                <?php   echo $row["description"]; ?>
            </td>
            
            <td>
               <?php echo $row["date"]; ?>
            </td>
            <td>
            <?php echo $row["priority"]; ?>
            </td>

            <td>
            <?php echo $status; ?>
            </td>
    
            <td>
                <a class="suppr" href="home.php?del_task=<?php echo $row['id'] ?>"> X</a>
            </td>
            <td>
                <a class="modif" href="modify_task.php?modify_task=<?php echo $row['id'] ?>"> M</a>
            </td>
        </tr>
        
        
        
        <?php }}?>
        </table>
 
</body>
</html>