<?php
    include('dbCnx.php');
    

    class model{
        public static $db_cnx;

        public function __construct(){
            self::$db_cnx = dbCnx::getConnstring();
            //echo " =====>".self::$db_cnx;
        }

        public function insert_task($table, $obj){
            /*if(self::$db_cnx->query( 'select max(id) from '.$table)==NUll){
                echo 'NULL';
            }
            , `date`, `priority`, `status`
            , ".$obj->get_date().", ".$obj->get_priority().", ".$obj->get_status().
            */
            //$get_id = intval(self::$db_cnx->query( 'select max(id) from '.$table))+1;
            $q="insert into ".$table."(`description`,`date`, `priority`,`status`) 
            values('".$obj->get_description()."', '".$obj->get_date()."', '".$obj->get_priority()."', '".$obj->get_status()."');";
            echo $q;
            if (mysqli_query(self::$db_cnx, $q)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $q . "<br>" . mysqli_error(self::$db_cnx);
              }
              
              mysqli_close(self::$db_cnx);
        }

        public function find_all_task($table){
            return $this->db_cnx->query('select * from'. $table.';');

        }
    }
?>