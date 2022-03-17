<?php
    class ToDoList{
        //vars
        protected $description;
        protected $date;
        protected $priority;
        protected $status;
        

        //methods
        
        //setter
        function set_task($description, $date, $priority, $status){
            $this->description = $description;
            $this->date = $date;
            $this->priority = $priority;
            $this->status = $status;  
        }

        //getter
        function get_description(){
            return $this->description;
        }

        function get_date(){
            return $this->date;
        }
        
        function get_priority(){
            return $this->priority;
        }
        function get_status(){
            return $this->status;
        }


    }

?>