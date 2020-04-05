<?php
	include_once('php/init.php');

?>

<doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title>UTEn Login Page</title>
      <link rel="stylesheet" href="dist/css/style.css">
    </head>

    <body>
      <div class="loginBox">
        <img src="img/student.jpg" class="user">
        <h2>UTEn Login Menu</h2>

        <form  method="post" enctype="multipart/form-data">
          <p>Registration Number</p>
          <input type="text" name="regnum" placeholder="Registration Number">
          <p>Password</p>
          <input type="password" name="pass" placeholder="*****">
          <input type="submit" name="submit" value="Sign In">
          <a href="#">Forget  Password</a>
        </form>
      </div>

<?php

if(isset($_POST['submit'])){
  $regnum = $_POST['regnum'];

  $pass = $_POST['pass'];
  
 
 $count = $getFromScript->count_student_num($regnum);

  if($count > 0){

    $stdDetails = $getFromScript->get_student_details($regnum); 

    session_start();
       // var_dump($stdDetails);
        $_SESSION['firstname'] =  $stdDetails->firstname;
        $_SESSION['surname'] =    $stdDetails->surname;
        $_SESSION['othername'] =  $stdDetails->othername;
        $_SESSION['regnum'] =     $stdDetails->id;
     
       echo "<script>alert('Welcome to Universal Test engine')</script>";

       echo "<script>window.open('index.php','_self')</script>";


    }else {

        echo "<script>alert('Invalid Registration Number Try Again')</script>";
        
  }

}


?>
