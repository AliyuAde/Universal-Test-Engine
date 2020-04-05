<?php
if(isset($_GET['delete_class'])){
    $delete_class  = $_GET['delete_class'];
}
 $delete = $getFromScript->delete_class($delete_class);

 if($delete){
    echo "<script>alert('Class Deleted Successfully')</script>";
    echo "<script>window.open('index.php?class','_self')</script>";

 }


?>