
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
               Create Test
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
                  <label class="col-md-10 offset-md-1 control-label" >Test Name</label>

                  <div class="col-md-8 offset-md-1" >

                    <input type="text" name="name" class="form-control" required >

                  </div>
                </div>

                  <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-10 offset-md-1  control-label" > Subjects </label>

                      <div class="col-md-8 offset-md-1" >


                          <select name="subject_id" class="form-control" >

                            <option value='1'>Select Subject</option>
                            <?php 
                              $subject = $getFromScript->get_subject();
                              foreach($subject as $sub):

                              
                            ?>
                            <option value='<?=$sub->id;?>'><?=$sub->name;?></option>
                              <?php endforeach;?>
                          </select>

                      </div>

                  </div>

                <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-10 offset-md-1  control-label" > Question Set </label>

                      <div class="col-md-8 offset-md-1" >


                          <select name="question_set_id" class="form-control" >

                            <option >Select Question Set</option>
                            <?php 
                              $question_set = $getFromScript->get_question_set();
                              foreach($question_set as $ques):

                              
                            ?>
                            <option value='<?=$ques->id;?>'><?=$ques->name;?></option>
                              <?php endforeach;?>

                          </select>

                      </div>

                </div>            
              </div>

              <div class="col-md-6">
                <div class="form-group" ><!-- form-group Starts -->

                  <label class="col-md-10 offset-md-1  control-label" > Session </label>

                  <div class="col-md-8 offset-md-1" >


                    <select name="session_id" class="form-control" >

                      <option value='1'>Select Session</option>
                      <?php 
                          $session = $getFromScript->get_sessions();
                          foreach($session as $ses):

                          
                        ?>
                        <option value='<?=$ses->id;?>'><?=$ses->name;?></option>
                          <?php endforeach;?>

                    </select>

                  </div>

                </div><!-- form-group Ends -->

                  <div class="form-group" ><!-- form-group Starts -->
                      <label class="col-md-10 offset-md-1 control-label" >Mark Obtainable</label>

                      <div class="col-md-8 offset-md-1" >

                      <input type="number" name="mark" class="form-control" required >

                      </div>

                  </div><!-- form-group Ends -->

                  <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-10 offset-md-1  control-label" > Test Type </label>

                    <div class="col-md-8 offset-md-1" >


                      <select name="test_type_id" class="form-control" >

                        <option>Select Test Type</option>
                        <?php 
                                $test_type = $getFromScript->get_test_types();
                                foreach($test_type as $test):

                                
                              ?>
                              <option value='<?=$test->id;?>'><?=$test->name;?></option>
                                <?php endforeach;?>

                      </select>

                    </div>

                  </div>
              </div>
            </div>

            <div class="row">
              
              <div class="col-md-6 offset-md-3">
              <div class="form-group" ><!-- form-group Starts -->

                <div class="col-md-6 offset-md-2" >

                  <input type="submit" name="submit" value="Create Test" class="btn btn-primary form-control" >

                </div>

                </div>
              </div>
            </div>
           
           
          

            </form>
 
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
  $name = $_POST['name'];
  $session_id = $_POST['session_id'];
  $subject_id = $_POST['subject_id'];
  $question_set_id = $_POST['question_set_id'];
  $mark = $_POST['mark'];
  $test_type_id = $_POST['test_type_id'];
  $staff_id = $_SESSION['staff_id'];
       
  $createtest = $getFromScript->addTest($name,$session_id, $subject_id,$question_set_id,$mark, $test_type_id, $staff_id);
    
    if($createtest){        

     
  echo "<script>alert('Test Created Successfully')</script>";
        
    }else{

      echo "<script>alert('Failed to create Test')</script>";                             
        }
}

      
?>

