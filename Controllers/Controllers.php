<?php
    include('C:/xampp/htdocs/to_do_list/models/ToDoList.php');
    include('C:/xampp/htdocs/to_do_list/models/model.php');
    
    class Controllers{
        function insert_task($table, $desc, $date, $priority){
            $task = new ToDoList();
            $model = new model();
            $task->set_task($desc, $date, $priority,intval(0));
            $model->insert_task($table, $task);
            
        }

        function show_task($table){
            $model = new model();
            return $model->find_all_task($table);
        }



    }

?>