

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Teachers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Teachers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-10 offset-md-1">
         
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Student Management Page</h3>
            </div>
            <!-- /.card-header -->
           
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive table-info">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Firstname</th>
                  <th>Surname</th>
                  <th>Othername</th>
                  <th>Registration Number</th>
                  <th>Session</th>
                  <th>Manage</th>
                  
                </tr>
                </thead>
                <tbod>
                    <?php
                    
                    $sn = 1;
                    //$staff_id = $_SESSION['staff_id'];
                    $students = $getFromScript->get_students();
                    foreach($students as $columns):
                      $session_name = $getFromScript->get_session($columns->session_id);                
                    ?>
                    
                <tr>
                <td><?=$sn;?></td>
                <td><?=$columns->firstname;?></td>
                <td><?=$columns->surname;?>  </td>          
               <td><?=$columns->othername;?></td>
               <td><?=$columns->reg_number;?>  </td>          
               <td><?=$session_name->name;?></td>
                <td><div class="btn-group btn-group-xl">
                        <a href="index.php?delete_student=<?=$columns->id;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="index.php?edit_student=<?=$columns->id;?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                       
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
                  <th>Registration Number</th>
                  <th>Session</th> 
                  <th>Manage</th>

                </tr>
                </tfoot>
              </table>
            </div>
                   
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
