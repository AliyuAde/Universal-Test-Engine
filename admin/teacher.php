
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
              <li class="breadcrumb-item active">Create Teacher</li>
            </ol>
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
               Create Teacher
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
            <div class="card-body pad">
            <form  method="post">
         <div class="input-group mb-3 col-md-10 offset-md-1">
          <input type="text" name="fname" class="form-control" placeholder="First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 col-md-10 offset-md-1">
          <input type="text" name="sname" class="form-control" placeholder="Surname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 col-md-10 offset-md-1">
          <input type="text" name="staff_id" class="form-control" placeholder="Staff ID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 col-md-10 offset-md-1">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 col-md-10 offset-md-1">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 col-md-10 offset-md-1">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
           <div class="col-md-6 offset-3">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
 
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-md-7">
                    <!-- Content Wrapper. Contains page content -->
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Teachers Management Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-responsive table-striped table-info text-center">
                                <thead>
                                    <tr>
                                    <th>S/N</th>
                                    <th>Firstname</th>                 
                                    <th>Surname</th>
                                    <th>Staff ID</th>
                                    <th>Email</th>
                                    <th>Manage</th>
                                    
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                            $sn = 1;
                                            $teacher = $getFromScript->get_teachers();
                                            foreach($teacher as $columns):
                                           
                                            
                                        ?>
                                        <tr>
                                        <td><?=$sn;?></td>
                                        <td><?=$columns->fname;?></td>
                                        <td><?=$columns->sname;?></td>
                                        <td><?=$columns->staff_id;?></td>
                                        <td><?=$columns->email;?></td>
                                        </td>
                                
                                        <td><div class="btn-group btn-group-xl">
                                                <a href="index.php?delete_teacher=<?=$columns->id;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            
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
                                    <th>Firstname</th>                 
                                    <th>Surname</th>
                                    <th>Othername</th>
                                    <th>Email</th>
                                    <th>Manage</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                   
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
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $email = $_POST['email'];
  $staff_id = $_POST['staff_id'];
  $password = $_POST['password'];
 
       
  $createteacher = $getFromScript->addTeacher($fname, $sname, $email, $staff_id, $password);
    
    if($createteacher){        

     
  echo "<script>alert('Teacher Created Successfully')</script>";
  echo "<script>window.open('index.php?teacher','_self')</script>";

        
    }else{

      echo "<script>alert('Failed to create Teacher')</script>";                             
        }
}

      
?>

