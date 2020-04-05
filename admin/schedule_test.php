
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
         
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card card-outline card-info">
            <div class="card-header ">
              <h3 class="card-title">
               Schedule Test
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form  method="post" enctype="multipart/form-data">

          <div class="row">

            <div class="col-md-6">
             <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-10 offset-md-1  control-label" > Test </label>

              <div class="col-md-8 offset-md-1" >


                <select name="test_id" class="form-control" required>

                  <option>Select Test</option>
                  <?php 
                          $tests = $getFromScript->get_tests();
                          foreach($tests as $test):

                          
                        ?>
                        <option value='<?=$test->id;?>'><?=$test->test_name;?></option>
                          <?php endforeach;?>


                </select>

              </div>

              </div>  

              <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-10 offset-md-1  control-label" >Student Classroom </label>

              <div class="col-md-8 offset-md-1" >


                <select name="classroom_id" class="form-control" required>

                  <option>Select Class</option>
                  <?php 
                          $classes = $getFromScript->get_classrooms();
                          foreach($classes as $class):

                          
                        ?>
                        <option value='<?=$class->id;?>'><?=$class->name;?></option>
                          <?php endforeach;?>

                </select>

              </div>

              </div>

              <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-10 offset-md-1  control-label" >Term</label>

              <div class="col-md-8 offset-md-1" >


              <select name="term_id" class="form-control" >

                <option >Select Term</option>
                <?php 
                          $terms = $getFromScript->get_terms();
                          foreach($terms as $term):

                          
                        ?>
                        <option value='<?=$term->id;?>'><?=$term->name;?></option>
                          <?php endforeach;?>

              </select>

              </div>

              </div>



              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" >Session</label>

                <div class="col-md-8 offset-md-1" >


                <select name="session_id" class="form-control" >

                  <option >Select Session</option>
                  <?php 
                            $terms = $getFromScript->get_sessions();
                            foreach($terms as $term):

                            
                          ?>
                          <option value='<?=$term->id;?>'><?=$term->name;?></option>
                            <?php endforeach;?>

                </select>

                </div>

              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-10 offset-md-1  control-label" >Duration</label>

              <div class="col-md-8 offset-md-1" >


                <select name="duration" class="form-control" >

                  <option value='1'>Select Time</option>
                  <option value='10'>10 Min</option>
                  <option value='15'>15 Min</option>
                  <option value='20'>20 Min</option>
                  <option value='30'>30 Min</option>


                </select>

              </div>

              </div>

              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" >Test Starting Date </label>

                <div class="col-md-8 offset-md-1" >

                  <input class="form-control" type="date" name="starting" value="" id="example-date-input" required>

                </div>

              </div>

              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" > Test End Date </label>

                <div class="col-md-8 offset-md-1" >

                <input class="form-control" type="date" name="ending" value="" id="example-date-input" required>

                </div>

              </div>    
            </div>

          </div>



          <div class="row">

                       <div class="col-md-6 offset-md-3">
                       <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-10 offset-md-1 control-label" ></label>

                        <div class="col-md-6 offset-md-2" >

                          <input type="submit" name="submit" value="Schedule Test" class="btn btn-info form-control" >

                        </div>
                        </form>

                        </div>
                       </div>

          </div>
            
           

                  

             
            </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

if(isset($_POST['submit'])){
  $test_id = $_POST['test_id'];  
  $classroom_id = $_POST['classroom_id'];
  $term_id = $_POST['term_id'];
  $session_id = $_POST['session_id'];
  $duration = $_POST['duration'];
  $starting = $_POST['starting'];
  $ending = $_POST['ending'];
  //$staff_id = 1;
  $staff_id = $_SESSION['staff_id'];
  
  
  $createScheduleTest = $getFromScript->addScheduleTest($test_id, $classroom_id, $term_id,$session_id, $duration, $starting,$ending, $staff_id);
    
    if($createScheduleTest){        

     
  echo "<script>alert('Test Scheduled Successfully')</script>";
        
    }else{

      echo "<script>alert('Failed to Schedule Test')</script>";                             
        }

      
}

      
?>

