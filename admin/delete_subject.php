
<?php
if(isset($_GET['delete_subject'])){
    $delete_subject  = $_GET['delete_subject'];
}
 $delete = $getFromScript->delete_subject($delete_subject);

 if($delete){
    echo "<script>alert('Subject Deleted Successfully')</script>";
    echo "<script>window.open('index.php?subject','_self')</script>";

 }


?>