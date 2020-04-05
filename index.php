<?php include('includes/header.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Welcome to Universal Test Engine  <small>Home Page</small></h1>
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
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/student.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?=$fullname?></h3>

                <p class="text-muted text-center">Student Exam Portal</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <a  href="test.php?id">Check Result</a>
                  </li>
                 
              

                <li class="list-group-item">
               <a href="test.php?id">Score History</a>
                </li>

                <li class="list-group-item">
               <a href="test.php?id">Score History</a>
                </li>

                <li class="list-group-item">
               <a href="test.php?id">Score History</a>
                </li>

                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

       
          </div>
          <!-- /.col -->
          <div class="col-md-9">
           <div class="row">
              <div class="col-md-4 offset-md-1 col-sm-6">

              <?php 

                  $stdTest = $getFromScript->get_scheduled_test($regnum); 
                  //var_dump($stdTest);
                  foreach($stdTest as $test):
                    $test_id = $test->test_id;
                    $test_details = $getFromScript->get_test_deatails($test_id); 


                    
                //Timer  Codes
                $end_time = '00:00';
                  $_SESSION["duration"] =  $test->duration;
                  $_SESSION["start_time"] = date("Y-m-d H:i:s");
                  $end_time = date('Y-m-d H:i:s ', strtotime('+'.$_SESSION["duration"].'minute', strtotime($_SESSION["start_time"])));
                  $_SESSION["end_time"] = $end_time;


              ?>
                          <!-- Widget: user widget style 2 -->
                  <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-info">
                        <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="img/subject-png.png" alt="User Avatar">
                        </div>
                          <h3 class="widget-user-username">English Language</h3>
                            <h5 class="widget-user-desc">Mid Term Test </h5>
                      </div>
                    <div class="card-footer p-0">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Session <span class="float-right badge bg-primary">2020/21</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Term <span class="float-right badge bg-info"><?=$test->term?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Number of Questions <span class="float-right badge bg-success"><?=$getFromScript->get_questions_count($test_details->question_set_id);?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            Time <span class="float-right badge bg-danger"><?=$test->duration;?> mins</span>
                          </a>
                        </li>
                      
                                <a href="test.php?id=<?php
                              $questions = $getFromScript->get_questions($test_id);
                              shuffle($questions);
                              //print_r($questions);
                              
                              $_SESSION['questions'] = $questions;
                              $_SESSION['counts'] = 5;
                              $_SESSION['next'] = 0;
                              //$_SESSION['next']++;



                            foreach ($_SESSION['questions'] as $question) {                       
                              echo "$question->id";
                            break;
                            
                            }
                        
                        
                        ?>
                        " class="btn btn-info"><b>Start Test</b></a>
                        
                      </ul>
                      
                    </div>
                  </div>
                  <!-- /.widget-user -->


                          <?php endforeach; ?>

              </div>

           

           
                     
           </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php include('includes/footer.php');?>










