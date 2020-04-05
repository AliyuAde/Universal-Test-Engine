
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
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
               Create Class
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

                <input type="submit" name="submit" value="Create Class" class="btn btn-info form-control toastrDefaultSuccess" >

                </div>
                </form>
 
            </div>
          </div>
        </div>
       
        <!-- /.col-->

      </div>
      <div class="col-md-5">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Class Management Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-responsive table-striped table-info text-center">
                                <thead>
                                    <tr>
                                    <th>S/N</th>
                                    <th>Class Name</th>                 
                                    <th>Manage Class</th>
                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                            $sn = 1;
                                            $class = $getFromScript->get_classes();
                                            foreach($class as $columns):
                                           
                                            
                                        ?>
                                        <tr>
                                        <td><?=$sn;?></td>
                                        <td><?=$columns->name;?></td>
                                        </td>
                                
                                        <td><div class="btn-group btn-group-xl">
                                                <a href="index.php?delete_class=<?=$columns->id;?>" class="btn btn-danger"><i class="fas fa-trash-alt"> Delete Class</i></a>
                                            
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
                                    <th>Class Name</th>                 
                                    <th>Manage Class</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                   
                </div>
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

      if(isset($_POST['submit'])){
        $name = $_POST['name'];
             
        $createclass = $getFromScript->addClass($name);
          
          if($createclass){        

           
        echo "<script>alert('Class Created Successfully')</script>";
        echo "<script>window.open('index.php?class','_self')</script>";

              
          }else{

            echo "<script>alert('Failed to create Class')</script>";                             
              }
      }
	
            
?>

