
<?php 
include('includes/header.php');
include_once('../php/init.php');
?>
 
<?php 

if(isset($_GET['id'])){
  $test_id = $_GET['id'];
}

$_SESSION['test_id1'] = $test_id;
 $testDetails = $getFromScript->get_test_deatails($test_id); 
 $subject_id = $testDetails->subject_id;
 $question_set_id = $testDetails->question_set_id;
 $count_questions = $getFromScript->get_questions_count($question_set_id);

 $test_type_ids = $testDetails->test_type_id;
$test_type_id = $getFromScript->get_test_type($test_type_ids);
//var_dump($test_type_id);


 $subjectDetails = $getFromScript->get_subject_deatails($subject_id);
 
//include('../admin/set_question.php');?>
  <!-- Main content -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-md-3">
            <h1 class="m-0 text-dark">Test Advanced Settings Home</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <section class="content">
      <div class="container">
        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-warning card-outline">
                    <div class="card-body box-profile">
                        
                        <h3 class="profile-username text-center"><?= $testDetails->test_name?></h3>

                        <p class="text-muted text-center"><?=$subjectDetails->name?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <a  href="#">Test Type <span class="float-right badge bg-info"><?=$test_type_id->name;?></span></a>
                        </li>
                        
                    

                        <li class="list-group-item">
                    <a href="#">Number of Questions <span class="float-right badge bg-success"><?=$count_questions;?></span></a>
                        </li>

                        <li class="list-group-item">
                    <a href="#">Mark Obtainable  <span class="float-right badge bg-danger"><?= $testDetails->total_mark; ?></span></a>
                        </li>

                        <li class="list-group-item">
                    <a href="#">Time <span class="float-right badge bg-info">looking Mins</span></a>
                        </li>

                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

        
            </div>

            <div class="col-md-8">
                <div class="row" style="margin-bottom: 10px;  color: white;">

                  <a href="question.php?id=<?=$question_set_id;?>" class="btn btn-warning" style="color: white;"><i class="fas fa-plus"> Questions</i></a>
                  <a href="passage.php?id=<?=$question_set_id;?>" class="btn btn-info" style="color: white; margin-left: 10px;"><i class="fas fa-plus"> Add Passage</i></a>
                </div>
                
           
             <div class="row">
                <div class="card col-md-12">
                <div class="card-header">
                    <h3 class="card-title">Questions Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-responsive table-striped text-center table-warning">
                    <thead>
                    <tr>
                    <th>S/N</th>
                    <th>Question</th> 
                    <th>Options</th> 
                    <th>Passage</th>               
                    <th>Options</th>                 
                    
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sn = 1;
                        $questions = $getFromScript->get_questions_table($question_set_id);
                        foreach($questions as $columns):
                          $count = $getFromScript->count_options($columns->id);
                          $pass = $columns->passage_id;
                          if($pass == 1){
                            $passage = 'Yes';
                          }else{
                            $passage = 'No';
                          }
                      ?>
                    <tr>
                    <td><?= $sn;?></td>
                    <td><?=$columns->question;?></td>
                    <td><?=$count;?></td>
                    <td><?=$passage;?></td>
            
                
                    <td>
                    <a href="option.php?id=<?=$columns->id;?>" class="btn btn-warning">Options</a>
                
                    </td>
                    </tr>
                    <?php
                      $sn++;
                    ?>
                        <?php endforeach;?>
                
                
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>S/N</th>
                    <th>Question</th>
                    <th>Passage</th>
                    <th>Options</th>
                    </tr>
                    </tfoot>
                </table>
                </div>
                
            
            
            
            </div>

            
            
          </div>
          <!-- /.col -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<?php include('../teacher/includes/footer.php');?>