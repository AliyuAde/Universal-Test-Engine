
<?php
if(isset($_GET['delete_classroom'])){
    $delete_classroom  = $_GET['delete_classroom'];
}
 $delete = $getFromScript->delete_classroom($delete_classroom);

 if($delete){
    echo "<script>alert('Class Room Deleted Successfully')</script>";
    echo "<script>window.open('index.php?classroom','_self')</script>";

 }


?>