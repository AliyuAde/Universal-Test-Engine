<?php
      if(isset($_POST['submit1'])){
       $classroom_id = $_POST['classroom_id'];
        $session_id = $_POST['session_id'];

        if($session_id == 0 && $classroom_id == 0){
          echo "<script>window.open('index.php?dashboard','_self')</script>";
  
        }else{

        $_SESSION['classroom_id'] = $classroom_id;
        $_SESSION['session_id'] = $session_id;
      }
      }

      
          if(!isset( $_SESSION['session_id']) OR  !isset($_SESSION['classroom_id'] )){
            echo "<script>window.open('index.php?dashboard','_self')</script>";
  

          }else{
          $session_name_or = $getFromScript->get_session($_SESSION['session_id']);
          $class_room_Deteails = $getFromScript->get_classroom_details($_SESSION['classroom_id']);
          $session_name = $getFromScript->get_session($class_room_Deteails->session_id);
          $class_name = $getFromScript->get_class($class_room_Deteails->class_id);
          $total_std = $getFromScript->get_classroom_std($_SESSION['classroom_id']);

         
        }
     
      
      
      
      ?>
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
<section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                              <h3 class="profile-username text-center">Class Information</h3>

                
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Class</b> <a class="float-right"><?=$class_name->name;?></a>
                    </li>

                    <li class="list-group-item">
                    <b>Classroom</b> <a class="float-right"><?=$class_room_Deteails->name;?></a>
                    </li>

                    <li class="list-group-item">
                    <b>Number of Students</b> <a class="float-right"><?=$total_std;?></a>
                    </li>


                    <li class="list-group-item">
                    <b>Session</b> <a class="float-right"><?=$session_name->name;?></a>
                    </li>
                 
                </ul>

                 <a href="index.php?dashboard" class="btn btn-primary  btn-block"><b>Go Home</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

       
          </div>








<div class="col-md-9">
          <div class="row">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Student Management Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-responsive table-striped table-success text-center">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Surname</th>                 
                  <th>Firstname</th>
                  <th>Othernames</th>
                  <th>Registration no</th>
                  <th>Session Admitted</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                <?php
                        $sn = 1;
                        $staff_id = $_SESSION['staff_id'];
                        $std_class = $getFromScript->get_std_details_for_class();
                        foreach($std_class as $columns):
                          $session = $getFromScript->get_session($columns->session_id);
                        
                        
                      ?>




                <tr>
                <td><?=$sn;?></td>
                <td><?=$columns->surname;?></td>
                <td><?=$columns->firstname;?>  </td>
                <td><?=$columns->othername;?></td>
                <td><?=$columns->reg_number;?>  </td>
          
               <td><?=$session->name;?></td>
                <td>

                <form id="submit_form" method="POST" action="index.php?update">
                    <input type="hidden" name="id" id="id" value="<?=$columns->id;?>">
                    <input type="hidden" name="classroom_id" id="classroom_id" value="<?=$classroom_id;?>">
                    <input type="hidden" name="session_id" id="session_id" value="<?=$session_id;?>">
                    <button name="submit" id="submit" class="btn btn-success">Add</a>
                </form>
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
                  <th>Surname</th>                 
                  <th>Firstname</th>
                  <th>Othernames</th>
                  <th>Registration no</th>
                  <th>Session Admitted</th>
                  <th>Action</th>
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

   