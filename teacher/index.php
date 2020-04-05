<?php include('includes/header.php');?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0 text-dark">Welcome to Universal Test Engine  <small>Teachers Portal</small></h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <?php include ('includes/sidebar.php');?>


          <div class="col-md-9">
          <div class="row">
          <div class="col-lg-4 col-sm-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$getFromScript->count_tests($staff_id);?></h3>

                <p>Number of Test Crated</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../question" class="small-box-footer">Manage Test <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- ./col -->
           <div class="col-lg-4 col-sm-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$getFromScript->count_schedules($staff_id);?><sup style="font-size: 20px"></sup></h3>

                <p>Test Scheduling</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="manage_schedule.php" class="small-box-footer">Manage Scheduled Test <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-sm-4">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>4</h3>

                <p>Result Home</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">View Students Result <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->               

        </div>
       




        
        </div>
        </div>
        <div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<?php include("includes/footer.php");?>



<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Set Class Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="index.php" enctype="multipart/form-data">
          
            <div class="modal-body">
            <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-6 control-label" > Session </label>

                <div class="col-md-10 " >


                  <select name="session_id" class="form-control" >

                    <option value="0">Select Session</option>
                    <?php 
                          $sessions = $getFromScript->get_sessions();
                          foreach($sessions as $session):

                          
                        ?>
                        <option value='<?=$session->id;?>'><?=$session->name;?></option>
                          <?php endforeach;?>


                  </select>

                </div>

            </div>
            
            <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-6 control-label" > Classrooms </label>

              <div class="col-md-10 " >


                <select name="classroom_id" class="form-control" >

                  <option value="0">Select Classroom</option>
                  <?php 
                        $classrooms = $getFromScript->get_classrooms();
                        foreach($classrooms as $classroom):                        
                  ?>
                      <option value='<?=$classroom->id;?>'><?=$classroom->name;?></option>
                  <?php endforeach;?>


                </select>

              </div>

              </div>
            </div>
           
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" class="btn btn-primary" value="Submit Details">
           
              </div>

           </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->





<?php
      if(isset($_POST['submit'])){
       $classroom_id = $_POST['classroom_id'];
        $session_id = $_POST['session_id'];

        if(empty($classroom_id) AND empty($session_id)){
        
          echo "<script>alert('Please Select Class Details')</script>";

        }else{
          session_start();
          $_SESSION['classroom_id'] = $classroom_id;
          $_SESSION['session_id'] = $session_id;
          echo "<script>window.open('std_class.php','_self')</script>";

         
        }
      }
      
      
      
      ?>
