<?php
    //include('C:/xampp/htdocs/to_do_list/models/ToDoList.php');
    //include('C:/xampp/htdocs/to_do_list/models/model.php');
    include('../Controllers.php');
    //echo 'ana jit hna aw3di ana';
    $cntl = new Controllers();
    if(isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
        $cntl->del_task('task', $id);
        //header('Location: ../views/home.php');
    }
     


?>