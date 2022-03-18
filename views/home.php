<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h2>My To Do List</h2>

    <form action="" method="post" class="form-example">
        <div class="form-example">
            <label for="description">Enter Your Task: </label>
            <input type="text" name="description" id="description" required>
        </div>
        <div class="form-example">
            <label for="date">Enter Your Date: </label>
            <input type="date" name="date" id="date" required>
        </div>
        <div class="form-example">
            <label for="priority">Select Your Praiority: </label>
            <select name="priority" id="priority" required>
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">High</option>
            </select>
        </div>
        <div class="form-example">
            <input type="submit" value="Save !">
        </div>

    </form>
    <?php include('show_task.php'); ?>
</body>
</html>

<?php
    include_once('C:/xampp/htdocs/to_do_list/Controllers/Controllers.php');
    $control = new Controllers();    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $control->insert_task('task', $_POST['description'], $_POST['date'], $_POST['priority']);
        
      }
?>