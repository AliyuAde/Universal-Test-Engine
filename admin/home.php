
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
              if($position==1 OR $position==4):
              ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$getFromP->count_all_posts()?></h3>

                <p>Posts Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$getFromP->count_all_views()?></h3>

                <p>Total Views</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$getFromP->count_all_comments();?></h3>

                <p>Total Comments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

             
  
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Post Analysis Form</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive text-center">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Post Title</th>
                  <th>Post Views</th>
                  <th>Post Comments</th>
                  <th>Make Headers</th>
                
                 
                </tr>
                </thead>
                <tbody>
                <?php 
                 $xid =1;
                    $posts = $getFromP->get_allad_post();
                    foreach($posts as $post):
                       
                ?>
                <tr>
                  <td><?=$xid?></td>
                  <td><?=$post->title;?></td>

                  <td><?=$getFromP->views_count($post->id);?></td>
                  <td><?=$getFromP->comments_count($post->id);?></td>
                  <td><div class="btn-group btn-group-xl">
                        <a href="index.php?header1=<?=$post->id;?>" class="btn btn-danger"><i class="fas fa-check"> H1</i></a>
                        <a href="index.php?header2=<?=$post->id;?>" class="btn btn-warning"><i class="fas fa-check"> H2</i></a>
                        <a href="index.php?header3=<?=$post->id;?>" class="btn btn-primary"><i class="fas fa-check"> H3</i></a>
                        <a href="index.php?header4=<?=$post->id;?>" class="btn btn-secondary"><i class="fas fa-check"> H4</i></a>
                      
                      </div></td>
                  
                
                  <?php $xid+=1;?>
                </tr>
               
                    <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Post Title</th>
                  <th>Post Views</th>
                  <th>Post Comments</th>
                 
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
                    <?php endif;?>


    <?php
              if($position==2):
              ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$getFromP->count_all_admin_posts($id)?></h3>

                <p>Posts Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$getFromP->count_all_admin_views($id)?></h3>

                <p>Total Views</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$getFromP->count_all_admin_comments($id);?></h3>

                <p>Total Comments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-10 offset-1">
         
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Post Analysis Form</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive table-primary text-center">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Post Title</th>
                  <th>Post Views</th>
                  <th>Post Comments</th>
                 
                </tr>
                </thead>
                <tbody>
                <?php 
                 $xid =1;
                    $posts = $getFromP->get_staff_post($id);
                    foreach($posts as $post):
                       
                ?>
                <tr>
                  <td><?=$xid?></td>
                  <td><?=$post->title;?></td>

                  <td><?=$getFromP->count_admin_views($post->id,  $id);?></td>
                  <td><?=$getFromP->count_admin_comments($post->id,  $id);?></td>
                  
                
                  <?php $xid+=1;?>
                </tr>
               
                    <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Post Title</th>
                  <th>Post Views</th>
                  <th>Post Comments</th>
                 
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
                    <?php endif;?>
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
