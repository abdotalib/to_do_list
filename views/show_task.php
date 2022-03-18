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

    include_once('C:/xampp/htdocs/to_do_list/Controllers/Controllers.php');
    $control = new Controllers();
    $res = $control->show_task('task');
    ?>
    <table class="taches">
        <tr>
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
    </tr>
   <?php 
    while($row = mysqli_fetch_assoc($res)) {?>
        <!--echo "id: " . $row["id"]. " - description: " . $row["description"]. " date : " . $row["date"]." priority : " . $row["priority"]. "<br>";-->
        <tr>
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
            <?php echo $row["status"]; ?>
            </td>
        </tr>
        
        <?php }?>
        </table>
</body>
</html>