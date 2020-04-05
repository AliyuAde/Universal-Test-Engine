
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
        <div class="col-md-10 offset-md-1">
          <div class="card card-outline card-info">
            <div class="card-header ">
              <h3 class="card-title">
             Student Registration
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

          <div class="row">

            <div class="col-md-5 ">
              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" > Firstname: </label>

                <div class="col-md-8 offset-md-1" >
                    <input type="text" name="fname" class="form-control" required >

                </div>

              </div>  
              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" > Surname: </label>

                <div class="col-md-8 offset-md-1" >
                <input type="text" name="sname" class="form-control" required >

                </div>

               </div>  
               <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-10 offset-md-1  control-label" > Othername: </label>

                    <div class="col-md-8 offset-md-1" >
                    <input type="text" name="oname" class="form-control" required >

                    </div>

                </div>  


             



              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-10 offset-md-1  control-label" >Session</label>

                <div class="col-md-8 offset-md-1" >


                <select name="session_id" class="form-control" >

                  <option >Select Session</option>
                  <?php 
                            $terms = $getFromScript->get_sessions();
                            foreach($terms as $term):

                            
                          ?>
                          <option value='<?=$term->id;?>'><?=$term->name;?></option>
                            <?php endforeach;?>

                </select>

                </div>

              </div>
            </div>
            <div class="col-md-4">
            <div class="form-group" ><!-- form-group Starts -->

              <label class="col-md-12   control-label" >Registration Number</label>

              <div class="col-md-10 " >
              <input type="text" name="reg_num" class="form-control" required >          

              </div>

              </div>

              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-12  control-label" >Parent Phone Number </label>

                <div class="col-md-10 " >

                <input type="tel" name="tel" class="form-control" required >          

                </div>

              </div>

              <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-12  control-label" > Parent Email Address </label>

                <div class="col-md-10 " >

                <input type="email" name="email" class="form-control" required >          

                </div>

              </div>    
                       <div class="form-group" ><!-- form-group Starts -->

                        <div class="col-md-10" >

                          <input type="submit" name="submit" value="Register Student" class="btn btn-info form-control" >

                        </div>
                        </form>

                        </div>
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
  $fname = $_POST['fname'];  
  $sname = $_POST['sname'];
  $oname = $_POST['oname'];
  $session_id = $_POST['session_id'];
  $reg_num = $_POST['reg_num'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  //$staff_id = 1;
  //$staff_id = $_SESSION['staff_id'];
 
  $registerstudent = $getFromScript->addStudent($fname, $sname, $oname, $reg_num, $session_id, $tel,$email);
    
    if($registerstudent){        

     
  echo "<script>alert('Registration Successful')</script>";
        
    }else{

      echo "<script>alert('Failed to Register Student')</script>";                             
        }

}

      
?>

