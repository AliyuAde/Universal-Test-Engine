
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Question</h1>
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

<label class="col-md-10 offset-md-1 control-label" > Test </label>

<div class="col-md-10 offset-md-1 " >


  <select name="category" class="form-control" >

    <option value='1'>Select Test</option>
    <option value='2'>English</option>

  </select>

</div>

</div>

            <div class="form-group">
            <label class="col-md-5 control-label" >Question :</label>

                <textarea name="desc" class="textarea" placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;
                  padding: 10px;">
                </textarea>
             </div>

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
          
        </div><!-- form-group Ends -->             
      
             <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1 control-label" ></label>

                <div class="col-md-10 offset-md-1" >

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
      $name = $_POST['name'];
       
      $createTerm = $getFromScript->addTerm($name);
        
        if($createTerm){        
    
         
      echo "<script>alert('Term Created Successfully')</script>";
            
        }else{
    
          echo "<script>alert('Failed to create Term')</script>";                             
            }
    }
  
  ?>
