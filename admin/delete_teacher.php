
<?php
if(isset($_GET['delete_teacher'])){
    $delete_teacher  = $_GET['delete_teacher'];
}
 $delete = $getFromScript->delete_teacher($delete_teacher);

 if($delete){
    echo "<script>alert('Teacher Deleted Successfully')</script>";
    echo "<script>window.open('index.php?teacher','_self')</script>";

 }


?>