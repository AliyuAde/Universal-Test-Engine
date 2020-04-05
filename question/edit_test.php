<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include('includes/header.php');

    $test = $getFromScript->get_test_with_id($id);

    $session_name = $getFromScript->get_session($test->session_id);
    $question_set_name = $getFromScript->get_question_set_with_id($test->question_set_id);
    $subject_name = $getFromScript->get_subject_deatails($test->subject_id);
    $test_type_name = $getFromScript->get_test_type_with_id($test->test_type_id);
    


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
          <div class="card card-outline card-warning">
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

                    <input type="text" name="name" value="<?=$test->test_name;?>" class="form-control" required >

                  </div>
                </div>

                  <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-10 offset-md-1  control-label" > Subjects </label>

                      <div class="col-md-8 offset-md-1" >


                          <select name="subject_id" class="form-control" >

                            <option value='<?=$subject_name->id;?>'><?=$subject_name->name;?></option>
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

                            <option value="<?=$question_set_name->id?>"><?=$question_set_name->name;?></option>
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

                      <option value='<?=$session_name->id;?>'><?=$session_name->name;?></option>
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

                      <input type="number" name="mark" value="<?=$test->total_mark;?>" class="form-control" required >

                      </div>

                  </div><!-- form-group Ends -->

                  <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-10 offset-md-1  control-label" > Test Type </label>

                    <div class="col-md-8 offset-md-1" >


                      <select name="test_type_id" class="form-control" >

                        <option value="<?=$test_type_name->id;?>"><?=$test_type_name->name;?></option>
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

                  <input type="submit" name="submit" value="Update Test" class="btn btn-warning form-control" >

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
  $test_name = $_POST['name'];
  $session_id = $_POST['session_id'];
  $subject_id = $_POST['subject_id'];
  $question_set_id = $_POST['question_set_id'];
  $total_mark = $_POST['mark'];
  $test_type_id = $_POST['test_type_id'];
  $staff_id = 1;
   //$_SESSION['staff_id'];
  //$test_id = $id;
       
  //$updatetest = $getFromScript->update_test_with_id($test_id, $test_name, $subject_id, $question_set_id, $session_id, $total_mark, $test_type_id,$staff_id);
  $updatetest = $getFromScript->update('test',$id, array('test_name' => $test_name, 'subject_id' => $subject_id, 'question_set_id' => $question_set_id, 'session_id' => $session_id, 'staff_id' => $staff_id, 'total_mark' => $total_mark, 'test_type_id' => $test_type_id ));
                   
    if($updatetest){        

     
  echo "<script>alert('Test Updated Successfully')</script>";
        
    }else{

      echo "<script>alert('Failed to Update Test')</script>";                             
        }
}

      
?>


<?php include('includes/footer.php');?>
