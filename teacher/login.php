<?php
	include_once('../php/init.php');

?>

<doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title>UTEn Login Page</title>
      <link rel="stylesheet" href="../dist/css/style.css">
    </head>

    <body>
      <div class="loginBox">
        <img src="../img/student.jpg" class="user">
        <h2>UTEn Teachers Login Menu</h2>

        <form  method="post" enctype="multipart/form-data">
          <p>Email Address</p>
          <input type="text" name="email" placeholder="Email Address">
          <p>Password</p>
          <input type="password" name="password" placeholder="*****">
          <input type="submit" name="submit" value="Sign In">
          <a href="#">Forget  Password</a>
        </form>
      </div>

<?php

if(isset($_POST['submit'])){

    $email      =   $getFromScript->checkInput($_POST['email']);
    $passwords	=   $getFromScript->checkInput($_POST['password']);

    $password =  MD5($passwords);
    //echo $password;

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid Email ')</script>";
    }else{ 
 
        if($getFromScript->teacher_login($email,$password) === false){
            echo "<script>alert('Incorrrect Email or Password')</script>";

            }

        }

}


?>
