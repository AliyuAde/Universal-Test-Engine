
<?php
if(isset($_GET['delete_admin'])){
    $delete_teacher  = $_GET['delete_admin'];
}
 $delete = $getFromScript->delete_admin($delete_admin);

 if($delete){
    echo "<script>alert('Admin Deleted Successfully')</script>";
    echo "<script>window.open('index.php?admin','_self')</script>";

 }


?>