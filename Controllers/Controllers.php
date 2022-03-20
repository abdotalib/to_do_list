<?php
    include('../models/ToDoList.php');
    include('../models/model.php');
    
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
        
        function show_one_task($table, $id){
            $model = new model();
            return $model->find_one_task($table, $id);
        }

        function del_task($table, $id){
            $model = new model();
            return $model->del_task($table, $id);
        }

        function  modify_task($table, $id, $description, $date, $priority, $status){
            $task = new ToDoList();
            $model = new model();
            $task->set_task( $description, $date, $priority, $status);
            $model->modify_task($table, $id, $task);

        }


    }

?>