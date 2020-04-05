<?php
include_once('../php/init.php');

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $classroom_id = $_POST['classroom_id'];
        $session_id = $_POST['session_id'];

        if($getFromScript->insert_into_std_class( $id, $classroom_id, $session_id)){
            echo "<script>alert('Added Successfully')</script>";
            header("Location: std_class.php");
  
        }
    }



?>