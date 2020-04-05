 
 <?php  
  $id = $_GET['id'];
  $edit = $getFromP->get_edit_post($id);
  $cids = $getFromP->get_post_cat_admin($id);
           

  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
               Edit Post
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
            <form  method="post" enctype="multipart/form-data">
            <div class="form-group" ><!-- form-group Starts -->
                <label class="col-md-3 control-label" > Post Title </label>

                <div class="col-md-6" >

                <input type="text" name="title" class="form-control" value="<?=$edit->title?>" required >

                </div>

            </div><!-- form-group Ends -->
            <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" > Category </label>

                <div class="col-md-6" >


                <select name="category" class="form-control">

                     <?php
                     
                    
                  
                      $get_cat = "select * from category  where id = $cids";

                      $run_cat = mysqli_query($con,$get_cat);

                      while ($row_cat=mysqli_fetch_array($run_cat)) {

                      $cat_id = $row_cat['id'];

                      $cat_title = $row_cat['name'];

                      echo "<option value='$cat_id'>$cat_title</option>";

                      }

                      ?>


                </select>

                </div>

                <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-3 control-label" > Sub Category </label>

                    <div class="col-md-6" >


                    <select name="sub_cat" class="form-control" >

                        <option> Select a Sub Category </option>

                        <?php
                       
                      $get_cat = "select * from sub_cat where cat_id=$cids";

                      $run_cat = mysqli_query($con,$get_cat);

                      while ($row_cat=mysqli_fetch_array($run_cat)) {

                      $cat_id = $row_cat['id'];

                      $cat_title = $row_cat['name'];

                      echo "<option value='$cat_id'>$cat_title</option>";

                      }

                      ?>


                    </select>

                    </div>

                </div><!-- form-group Ends -->

                <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" > Post Image  </label>

                <div class="col-md-6" >

                <input type="file" name="image" class="form-control"  required >

                </div>

                </div><!-- form-group Ends -->


                <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" >Author</label>

                <div class="col-md-6" >

                <input type="text" name="author" class="form-control" value="<?=$edit->author?>" required >

                </div>

        </div><!-- form-group Ends -->



              
            <div class="form-group">
            <label class="col-md-3 control-label" >Body</label>

                <textarea name="body" class="textarea" ><?=$edit->body?>
                </textarea>
             </div>
             <div class="form-group">
            <label class="col-md-5 control-label" >Full Content Description</label>

                <textarea name="desc" class="textarea" placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;
                  padding: 10px;"><?=$edit->descs?>
                </textarea>
             </div>
             <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" ></label>

                <div class="col-md-6 offset-md-2" >

                <input type="submit" name="update" value="Update Post" class="btn btn-primary form-control" >

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

if(isset($_POST['update'])){

$post_title = $_POST['title'];
$cat = $_POST['category'];
$sub_cat = $_POST['sub_cat'];
$post_author = $_POST['author'];
$post_body = addslashes($_POST['body']);
$post_desc = addslashes($_POST['desc']);

$post_img = $_FILES['image']['name'];

$temp_name1 = $_FILES['image']['tmp_name'];

move_uploaded_file($temp_name1,"../images/$post_img");
$update_post = "update  aware set title = '$post_title', img_url= '$post_img', author = '$post_author', body = '$post_body', descs = '$post_desc' where id ='$id'";

$run_post = mysqli_query($con, $update_post);
if($run_post){
  
$update_cat = "update  post_cat set cat_id = '$cat' where post_id ='$id'";
$run_cat_id = mysqli_query($con, $update_cat);
  if($run_cat_id){

    
$update_sub_cat = "update  post_sub_cat set cat_id = '$cat', sub_cat_id = '$sub_cat' where post_id = '$id'";
$run_cat_sub_id = mysqli_query($con, $update_sub_cat);


if($run_cat_sub_id){

echo "<script>alert('Post  has been Updated successfully')</script>";

echo "<script>window.open('index.php?manage_posts','_self')</script>";

}else{
	echo "<script>alert('Error Updatig the Post please try again')</script>";

}
  
}

}

}

?>