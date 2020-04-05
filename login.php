<?php
	include_once('php/init.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UTEn | Student Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">

  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class=" lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="login.php"><b>UTEn International School </b>LTE</a>
  </div>
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="img/student.jpg" alt="UTEn Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <input type="text" class="form-control" name="regnum" placeholder="registration number" required>

        <div class="input-group-append">
          <button type="submit" name="submit" class="btn"><i class="fas fa-arrow-right "></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your registraion number to sign in
  </div>
  <div class="text-center">
    <a href="login.html">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2020 <b><a href="http://chroniclesoft.com" class="text-black">UTEn V2</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

if(isset($_POST['submit'])){
  $regnum = $_POST['regnum'];

 
 
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
