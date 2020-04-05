<?php
if(isset($_GET['delete_schedule'])){
    $delete_schedule = $_GET['delete_schedule'];
}
 $delete = $getFromScript->delete_schedule($delete_schedule);

 if($delete){
    echo "<script>alert('Schedule Canceled Successfully')</script>";
    echo "<script>window.open('index.php?manage_schedule','_self')</script>";

 }


?>