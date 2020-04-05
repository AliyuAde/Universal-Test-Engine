<?php 
  
    include('includes/header.php');?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-10">
          
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->



     <!-- Main content -->
    <?php include('includes/sidebar.php'); ?>
          <div class="col-md-9">
          <div class="row">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Test Management Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-responsive table-striped table-info text-center">
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
                        $staff_id = $_SESSION['staff_id'];
                        $test = $getFromScript->get_test_with_staff($staff_id);
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
          <!-- /.card -->
        
        
        
        <!-- /.row -->
        </div>
        </div>
        <div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<?php include("includes/footer.php");?>