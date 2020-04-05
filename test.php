<?php 
session_start();
include_once('php/init.php');




$previous = $_SESSION['questions'];
// var_dump($previous);
//$current = current($_SESSION['questions']);
$next = next($_SESSION['questions']);
//$previous= $current - 1;

//$next= $current + 1;


?> 


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> Uten Testing Home</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-primary navbar-primary">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light text-light">UTEn Version 2.0</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link  text-light">Home</a>
          </li>
         
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-10 col-sm-12 offset-md-1">
            <div class="card card-info">
            
              <div class="card-header  text-center">
              <img src="img/icons.png" class="float-right btn btn-info">
              <i class="fas fa-clock float-left btn btn-info " style="font-size: 25px;"> <label id="response"></label></i>
              
                <h4 style=" color: white; margin-top:8px;">English</h4>
             
            </div><!-- /.card-header -->
              
            <div class="card-body">
                   <div class="row  post">
                      <div class="col-md-8  text-justify">
                        <p style="font-size:18px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black;">
                       
                       
                       
                         <?php 
                          $counts = $_SESSION['counts'];
                         $question_id = $_SESSION['questions'];

                         $keys = array_keys($question_id);
                         var_dump($question_id[$keys[1]]);

                        ?>
                        
                        
                        
                        
                        
                         <b>Question (1):</b> Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          
                        </p>  
                      </div>                                 

                      <div class="col-md-4  text-center"> 
                          <img src="img/session_default.png" class="img-fluid rounded" >
                      </div>                                  
                    </div>
                    <div class="row" >
                      
                      <div class="col-md-12">
                          <div class="form-group clearfix text-left choice" style="font-size:20px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black;">
                                <div class="icheck-info d-block"  >
                                    <input type="radio" id="radioPrimary1" name="r1">
                                    <label for="radioPrimary1">Option number 1</label>
                                </div>

                                <div class="icheck-info d-block" >
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">Option number 2</label>
                                </div>

                                <div class="icheck-info  d-block">
                                    <input type="radio" id="radioPrimary3" name="r1">
                                    <label for="radioPrimary3">Option number 3</label>
                                </div>
                          </div>
                      </div>
                    </div>
                            
            </div><!-- /.card-body -->
            
            
            <div class="card-footer">
            <?php 
                          $counts = $_SESSION['counts'];
                         $question_id = $_SESSION['questions'];
                         //$nex = $_SESSION['next'];
                         echo $_SESSION['next'];
                         $keys = array_keys($question_id);
                         if($_SESSION['next'] < $counts){
                          $nex = ++$_SESSION['next'];                           
                          //$pre = --$_SESSION['next'];
                        
                          //$nex = $_SESSION['next'];
                          //$pre = $nex;
                         }
                         @$next = $question_id[$keys[$nex]];
                        
                        //$previous = $question_id[$keys[$pre]];
                        
                         

              ?>


              <a href="test.php?id=<?=$previous->id;?>"  class="float-left btn btn-info">Previous</a>
              <a href="test.php?id=<?=$next->id;?>" class="float-right btn btn-info">Next</a>
                            
            </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <div class="row">
         
         <!-- /.col -->
         <div class="col-md-10 col-sm-12 offset-md-1">
           <div class="card">
           
             <div class="card-header p-2">                   
             <?php 
                 $count = 1;
                 foreach ($_SESSION['questions'] as $question) {                       
                  echo"  <a class='btn btn-info' href='test.php?id=" .$question->id ."'>".$count."</a>";
                  $count ++;
                 }
                
                 ?> </div><!-- /.card-header -->
            
           
         
           </div>
           <!-- /.nav-tabs-custom -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
                 <?php //endif; ?>














  <!-- Main Footer -->
  <footer class="main-footer ">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020  <a href="https://chroniclesoft.com">Chroniclesoftware Development Company</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script type="text/Javascript">

  setInterval(function(){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "timer.php", false);
    xmlhttp.send(null);
    document.getElementById("response").innerHTML = xmlhttp.responseText;

  }, 1000);

</script>


</body>
</html>
