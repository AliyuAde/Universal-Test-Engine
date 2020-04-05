
<?php include('includes/header.php');?>



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


<?php include('includes/sidebar.php');?>

     
<div class="col-md-9">
          <div class="row">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Test Shedule Management Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-responsive table-striped table-success text-center">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Test Name</th>                 
                  <th>Starting Date</th>
                  <th>Ending Date</th>
                  <th>Manage Test</th>
                 
                </tr>
                </thead>
                <tbody>
                <?php
                        $sn = 1;
                        $staff_id = $_SESSION['staff_id'];
                        $schedule = $getFromScript->get_schedule_with_staff($staff_id);
                        foreach($schedule as $columns):
                          $test_name = $getFromScript->get_test_name($columns->test_id);
                        
                        
                      ?>




                <tr>
                <td><?=$sn;?></td>
                <td><?=$test_name->test_name;?></td>
                <td><?=$columns->starting_date;?>  </td>
          
               <td><?=$columns->ending_date;?></td>
                <td><div class="btn-group btn-group-xl">
                        <a href="delete_schedule.php?delete_schedule=<?=$columns->id;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="edit_schedule.php?edit_schedule=<?=$columns->id;?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                       
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
                 
                  <th>Starting Date</th>
                  <th>Ending Date</th>
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