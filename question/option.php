
<?php 

 include('includes/header.php');

if(isset($_GET['id'])){
    $question_id = $_GET['id'];
    $test_id = $_SESSION['test_id1'];

 $question = $getFromScript->get_questions_option($question_id);
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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Question</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card card-outline card-info">
            <div class="card-header " >
           
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
                  
              </div>
              <p style="font-size: 25px;">QUESTION: <?=$question->question;?>.</p>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                
            <form  method="post" enctype="multipart/form-data">


            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-10 offset-md-1 control-label" > Option 1 </label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="option1" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->
            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-10 offset-md-1 control-label" > Option 2 </label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="option2" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->

            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-10 offset-md-1 control-label" > Option 3 </label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="option3" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->


            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-10 offset-md-1 control-label" > Option 4 </label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="option4" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->

            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-10 offset-md-1 control-label" > Option 5 </label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="option5" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->
            
               
                <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-10 offset-md-1 control-label" > Correct Option </label>

                <div class="col-md-3 offset-md-1" >

                <input type="number" name="correct" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->
            <div class="col-md-3 offset-md-4" >

              <input type="submit" name="submit" value="Insert Option" class="btn btn-primary form-control" >

            </div>
                </form>
 
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
      $correct = $_POST['correct'];
      $option = array();
      $option[1] =  $_POST['option1'];
      $option[2] =  $_POST['option2'];
      $option[3] =  $_POST['option3'];
      $option[4] =  $_POST['option4'];
      $option[5] =  $_POST['option5'];
       
      //var_dump($option);
      $createOptions = $getFromScript->createOption($test_id, $question_id, $correct, $option);
        
        if($createOptions){        
    
         
      echo "<script>alert('Options Added Successfully')</script>";
      echo "<script>window.open('add_question.php?id=$test_id','_self')</script>";

            
        }else{
    
          echo "<script>alert('Failed to Add Options')</script>";                             
            }
    }
  
  ?>







<?php include('../teacher/includes/footer.php');?>
