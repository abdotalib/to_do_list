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
            //echo $q;
            if (mysqli_query(self::$db_cnx, $q)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $q . "<br>" . mysqli_error(self::$db_cnx);
              }
              
             // mysqli_close(self::$db_cnx);
        }

        public function find_all_task($table){
            $q = "select * from ".$table." ORDER BY priority DESC";
            $result = mysqli_query(self::$db_cnx, $q);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                /*
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. " - description: " . $row["description"]. " date : " . $row["date"]." priority : " . $row["priority"]. "<br>";}
                */
                return $result;
            } else {
                echo "0 results";
                }
                //mysqli_close($conn);


            //return $this->db_cnx->query('select * from'. $table.';');

        }
        public function find_one_task($table, $id){
            $q = "select * from ".$table." where "."id =".$id.";";
            $result = mysqli_query(self::$db_cnx, $q);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                /*
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. " - description: " . $row["description"]. " date : " . $row["date"]." priority : " . $row["priority"]. "<br>";}
                */
                return $result;
            } else {
                echo "0 results";
                }
                //mysqli_close($conn);


            //return $this->db_cnx->query('select * from'. $table.';');

        }


        public function del_task($table, $id){
            $q = "delete from ".$table." where "."id =".$id.";";
            if (mysqli_query(self::$db_cnx, $q)) {
                echo "Record deleted successfully";
              } else {
                echo "Error deleting record: " . mysqli_error(self::$db_cnx);
              }
        }
        public function modify_task($table, $id, $obj){
            $q = "update ".$table." SET description ='".$obj->get_description()."',date='".$obj->get_date()."',priority='".$obj->get_priority()."', status='".$obj->get_status()."' WHERE id=".$id;

            if (mysqli_query(self::$db_cnx, $q)) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . mysqli_error(self::$db_cnx);
              }
              
        }

    }
?>