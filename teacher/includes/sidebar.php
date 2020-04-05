
     
<?php 
  $fullname = $_SESSION['sname'] ."  ". $_SESSION['fname'];
?>
<!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?=$fullname;?></h3>

                <p class="text-muted text-center">Staff Test Management Portal</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322 mins</a>
                  </li>
                 
                </ul>
                
                <a href="schedule_test.php" class="btn btn-primary  btn-block"><b>Schedule Test</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

       
          </div>


