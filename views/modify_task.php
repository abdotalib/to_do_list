<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['modify_task'])) {
        include_once('../Controllers/Controllers.php');

        $id = $_GET['modify_task'];
        $ctr = new Controllers();
        $row = $ctr->show_one_task('task', $id);  
        $row = mysqli_fetch_assoc($row);
    }
    ?>
    <h2>Modify Task # <?php echo $row['id'] ?></h2>
<form action="" method="post" class="form-example">
    <div class="form-example">
        <label for="description">Enter Your New Task: </label>
        <input type="text" name="description" id="description" value= <?php echo $row['description'] ?> >
    </div>
    <div class="form-example">
        <label for="date">Enter Your New Date: </label>
        <input type="date" name="date" id="date" value= <?php echo $row['date'] ?>>
    </div>
    <div class="form-example">
        <label for="priority">Select Your new Praiority: </label>
        <select name="priority" id="priority" >
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
        </select>
    </div>
    <div class="form-example">
        <label for="status">This task is Done: </label>
        <select name="status" id="status" >
            <option value="1">yes</option>
            <option value="0">No</option>
        </select>
    </div>

    <div class="form-example">
        <input type="submit" value="Save !">
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        
        $ctr->modify_task('task', $id, $_POST['description'], $_POST['date'], $_POST['priority'], $_POST['status']);
      }
    ?>

</form>
    <a class="modif" href="home.php">Return to Home </a>

</body>
</html>