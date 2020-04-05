
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
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
               Create Class Room
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

                <label class="col-md-6 offset-md-2 control-label" > Class </label>

                <div class="col-md-10 offset-md-1 " >


                  <select name="class_id" class="form-control" >

                    <option>Select Class</option>
                    <?php 
                          $classes = $getFromScript->get_classes();
                          foreach($classes as $class):

                          
                        ?>
                        <option value='<?=$class->id;?>'><?=$class->name;?></option>
                          <?php endforeach;?>


                  </select>

                </div>

            </div>
            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-6 offset-md-2 control-label" >Class Room Name</label>

                <div class="col-md-10 offset-md-1" >

                <input type="text" name="name" class="form-control" required >

                </div>

            </div><!-- form-group Ends -->

                      
             <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" ></label>

                <div class="col-md-10 offset-md-1" >

                <input type="submit" name="submit" value="Create Class Room" class="btn btn-primary form-control" >

                </div>
                </form>
 
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      <div class="col-md-5">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Classroom Management Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-responsive table-striped table-info text-center">
                                <thead>
                                    <tr>
                                    <th>S/N</th>
                                    <th>Class</th>   
                                    <th>Classroom Name</th>                 
                                    <th>Manage Classroom</th>
                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                            $sn = 1;
                                            $class = $getFromScript->get_classrooms();
                                            foreach($class as $columns):
                                              $class_name = $getFromScript->get_class($columns->class_id);
                                           
                                            
                                        ?>
                                        <tr>
                                        <td><?=$sn;?></td>
                                       
                                        <td><?=$class_name->name;?></td>
                                        <td><?=$columns->name;?></td>
                                        </td>
                                
                                        <td><div class="btn-group btn-group-xl">
                                                <a href="index.php?delete_classroom=<?=$columns->id;?>" class="btn btn-danger"><i class="fas fa-trash-alt"> Delete Class</i></a>
                                            
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
                                    <th>Class</th>   
                                    <th>Classroom Name</th>  
                                                  
                                    <th>Manage Classroom</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                   
                </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $class_id = $_POST['class_id'];
       
  $createclass = $getFromScript->addClassroom($name, $class_id);
    
    if($createclass){        

     
  echo "<script>alert('Classroom Created Successfully')</script>";
  echo "<script>window.open('index.php?classroom','_self')</script>";

        
    }else{

      echo "<script>alert('Failed to create Classroom')</script>";

       }
}

      
?>

