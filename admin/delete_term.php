
<?php
if(isset($_GET['delete_term'])){
    $delete_term  = $_GET['delete_term'];
}
 $delete = $getFromScript->delete_term($delete_term);

 if($delete){
    echo "<script>alert('Term Deleted Successfully')</script>";
    echo "<script>window.open('index.php?term','_self')</script>";

 }


?>