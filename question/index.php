<?php include('includes/header.php');?>


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
        <div class="col-md-4 offset-md-1">
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
                            <div class="form-group" ><!-- form-group Starts -->

                                <div class="col-md-6 offset-md-2" >

                                <input type="submit" name="submit" value="Create Test" class="btn btn-warning form-control" >

                                </div>

                            </div>
                        

                    </form>
 
                </div>
         </div>
         <!-- /.col-->
        </div>

                <div class="col-md-7">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Test Management Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-responsive table-striped table-warning text-center">
                                <thead>
                                    <tr>
                                    <th>S/N</th>
                                    <th>Test Name</th>                 
                                    <th>Session</th>
                                    <th>Questions </th>
                                    <th>Manage Test</th>
                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                            $sn = 1;
                                        if(isset($_SESSION['super_admin'])){
                                            $test = $getFromScript->get_tests();
                                           
                                        }else{
                                            $test = $getFromScript->get_test_staff($staff_id);
                                        }
                                           
                                            foreach($test as $columns):
                                            $count_questions = $getFromScript->get_questions_count($columns->question_set_id);
                                            $session_id = $columns->session_id;
                                            $session_name = $getFromScript->get_session($session_id);
                                            
                                            
                                        ?>
                                        <tr>
                                        <td><?=$sn;?></td>
                                        <td><?=$columns->test_name;?></td>
                                        <td><?=$session_name->name;?>
                                        </td>
                                
                                    <td><?=$count_questions;?></td>
                                        <td><div class="btn-group btn-group-xl">
                                                <a href="../question/add_question.php?id=<?=$columns->id;?>" class="btn btn-info"><i class="fas fa-check"> Manage Test</i></a>
                                                <a href="index.php" class="btn btn-success"><i class="fas fa-check"> Edit Test</i></a>
                                            
                                            </div>
                                        </td>
                                        </tr>
                                            <?php 
                                                $sn++;
                                            endforeach;
                                            ?>
                                    
                                    
                                </tbody>
                            
                                <tfoot>
                                    <tr>
                                    <th>S/N</th>
                                    <th>Test Name</th>                 
                                    <th>Session</th>
                                    <th>Questions </th>
                                    <th>Manage Test</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                   
                </div>
      </div>  
                  
    </section>
</div>
     
  

<?php include('includes/footer.php');?>


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
  
    echo "<script>window.open('index.php','_self')</script>";
        
    }else{

      echo "<script>alert('Failed to create Test')</script>";                             
        }
}

      
?>

