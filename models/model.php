<?php
    class to_do_list{
        //vars
        protected $description;
        protected $date;
        protected $priority;
        

        //methods
        
        //setter
        function set_task($description, $date, $priority){
            $this->description = $description;
            $this->date = $date;
            $this->priotity = $priority; 
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


    }

?>