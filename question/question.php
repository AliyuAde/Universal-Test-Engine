<?php

 include('includes/header.php');
 $test_id = $_SESSION['test_id1'];
 if(isset($_GET['id'])){
  $question_set_id = $_GET['id'];
  //echo $question_set_id;
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
            <div class="card-header">
            Create Question
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
            <div class="card-body pad">
                
            <form  method="post" enctype="multipart/form-data">



            <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-6 control-label" > Require Passage </label>

              <div class="col-md-2 " >


                <select name="passage" class="form-control" >

                  <option value='0'>No</option>
                  <option value='1'>Yes</option>

                </select>

              </div>

              </div>    



            <div class="form-group">
            <label class="col-md-5 control-label" >Question :</label>

                <textarea name="desc" class="textarea" style="width: 100%;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd;
                  padding: 10px;">
                </textarea>
             </div>

        </div><!-- form-group Ends -->             
      
             <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1 control-label" ></label>

                <div class="col-md-3 offset-md-4" >

                <input type="submit" name="submit" value="Insert Question" class="btn btn-primary form-control" >

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
      $name = $_POST['desc'];
      $passage = $getFromScript->get_passage($question_set_id);
      if(isset($_POST['passage']) == 1){
        $pass = $passage->id;
      }else{
        $pass = 0;
      }
      

       //echo $pass;
      $createQuestion = $getFromScript->addQuestion($name,$pass);
        
        if($createQuestion){        
    
         
      echo "<script>alert('Question Created Successfully')</script>";
      echo "<script>window.open('add_question.php?id=$test_id','_self')</script>";

            
        }else{
    
          echo "<script>alert('Failed to create Question')</script>";                             
            }
    }
  
  ?>







<?php include('../teacher/includes/footer.php');?>
