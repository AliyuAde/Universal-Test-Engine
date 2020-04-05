
<?php
if(isset($_GET['delete_session'])){
    $delete_session  = $_GET['delete_session'];
}
 $delete = $getFromScript->delete_session($delete_session);

 if($delete){
    echo "<script>alert('Session Deleted Successfully')</script>";
    echo "<script>window.open('index.php?session','_self')</script>";

 }


?>