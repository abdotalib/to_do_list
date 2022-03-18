<?php
include('C:/xampp/htdocs/to_do_list/models/ToDoList.php');
include('C:/xampp/htdocs/to_do_list/models/model.php');


$c = new ToDoList();
$date = '2022-10-07';
//$date = date("Y-m-d", strtotime($date));
//$newDate = DateTime::createFromFormat("j-M-Y", '02-01-2022');
//printf( 'aa'.$newDate);
//$newDate = $newDate->format('d/m/Y'); 
$c->set_task('description1000', $date, intval(3),intval(1));
echo 'hadi class '.$c->get_priority();
$m = new model();
$m->insert_task('task',$c);
$m->find_all_task('task');
/*$res = $m->find_all_task('client');

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
      echo "Type: " . $row["Type"]. " - Name: " . $row["Name"]. "<br>";
      
    }
  } else {
    echo "0 results";
  }*/
?>