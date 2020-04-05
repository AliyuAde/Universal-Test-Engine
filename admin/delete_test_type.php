
<?php
if(isset($_GET['delete_test_type'])){
    $delete_test_type  = $_GET['delete_test_type'];
}
 $delete = $getFromScript->delete_test_type($delete_test_type);

 if($delete){
    echo "<script>alert('Test Type Deleted Successfully')</script>";
    echo "<script>window.open('index.php?test_type','_self')</script>";

 }


?>