<?php 
if(isset($_GET['edit_schedule'])){
    $id = $_GET['edit_schedule'];
    $test = $getFromScript->get_schedule_with_id($id);

    $test_name = $getFromScript->get_test_deatails($test->test_id);
    $clasroom_name = $getFromScript->get_classroom_details($test->classroom_id);
    $term_name = $getFromScript->get_term_with_id($test->term_id);
    $session_name = $getFromScript->get_session($test->session_id);
   
  

}
?>
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
            <div class="card-header">
              <h3 class="card-title">
               Edit Test Schedule 
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

                  <option value="<?=$test_name->id;?>"><?=$test_name->test_name;?></option>
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

                  <option value="<?=$clasroom_name->id;?>"><?=$clasroom_name->name;?></option>
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

                <option value='<?=$term_name->id;?>'><?=$term_name->name;?></option>
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

                  <option value="<?=$session_name->id;?>"><?=$session_name->name;?></option>
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

                  <option>Select Time</option>
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

                  <input class="form-control" type="date" name="starting" value="<?=$test->starting_date;?>" id="example-date-input" required>

                </div>

              </div>

              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" > Test End Date </label>

                <div class="col-md-8 offset-md-1" >

                <input class="form-control" type="date" name="ending" value="<?=$test->ending_date;?>" id="example-date-input" required>

                </div>

              </div>    
            </div>

          </div>



          <div class="row">

                       <div class="col-md-6 offset-md-3">
                       <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-10 offset-md-1 control-label" ></label>

                        <div class="col-md-6 offset-md-2" >

                          <input type="submit" name="submit" value="Edit Schedule Test" class="btn btn-primary form-control" >

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
  $duration = $_POST['duration'];
  $starting_date = $_POST['starting'];
  $ending_date = $_POST['ending'];
  //$staff_id = 1;
  $staff_id = $_SESSION['staff_id'];
  
  $updateschedule = $getFromScript->update('schedule_test',$id, array('test_id' => $test_id,
   'classroom_id' => $classroom_id, 'term_id' => $term_id,
    'duration' => $duration, 'staff_id' => $staff_id, 'starting_date' => $starting_date,
     'ending_date' => $ending_date ));
   
    if($updateschedule){        

     
  echo "<script>alert('Test Schedule Updated Successfully')</script>";
        
    }else{

      echo "<script>alert('Failed to Update Schedule Test')</script>";                             
        }

      }
     
?>

