<?php
if(isset($_GET['delete_student'])){
    $delete_student = $_GET['delete_student'];
}
 $delete = $getFromScript->delete_student($delete_student);

 if($delete){
    echo "<script>alert('Student Deleted Successfully')</script>";
    echo "<script>window.open('index.php?manage_student','_self')</script>";

 }


?>