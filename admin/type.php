
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
        <div class="col-md-4 offset-md-3">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
               Create Test Type
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
                <label class="col-md-10 offset-md-1 control-label" >Name</label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="name" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->
          

             <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" ></label>

                <div class="col-md-10 offset-md-1" >

                <input type="submit" name="submit" value="Create Class" class="btn btn-primary form-control toastrDefaultSuccess" >

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
             
        $createType = $getFromScript->addType($name);
          
          if($createType){        

           
        echo "<script>alert('Test Type Created Successfully')</script>";
              
          }else{

            echo "<script>alert('Failed to create Test Type')</script>";                             
              }
      }
	
            
?>

