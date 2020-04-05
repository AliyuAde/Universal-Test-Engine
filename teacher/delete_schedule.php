
<?php

include_once('../php/init.php');
if(isset($_GET['delete_schedule'])){
    $delete_schedule  = $_GET['delete_schedule'];
}
 $delete = $getFromScript->delete_schedule($delete_schedule);

 if($delete){
    echo "<script>alert('Schedule Deleted Successfully')</script>";
    echo "<script>window.open('manage_schedule.php','_self')</script>";

 }


?>