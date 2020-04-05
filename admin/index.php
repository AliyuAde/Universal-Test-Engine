
<?php include('includes/header.php');?>

<?php include('includes/sidebar.php');?>

<?php if(!isset($_SESSION['super_admin'])){
    echo "<script>window.open('login.php','_self')</script>";

} 
?>

 
<?php
if(isset($_GET['admin'])){
    include('admin.php');
}
?>


 
<?php
if(isset($_GET['std_class'])){
    include('std_class.php');
}
?>
 
  
<?php
if(isset($_GET['update'])){
    include('update.php');
}
?>
<?php
if(isset($_GET['add_student'])){
    include('add_student.php');
}
?>

 
<?php
if(isset($_GET['delete_teacher'])){
    include('delete_teacher.php');
}
?>

 
<?php
if(isset($_GET['manage_student'])){
    include('manage_student.php');
}
?>
 
 <?php
if(isset($_GET['edit_student'])){
    include('edit_student.php');
}
?>

 
<?php
if(isset($_GET['delete_student'])){
    include('delete_student.php');
}
?>
    
<?php
if(isset($_GET['class'])){
    include('class.php');
}
?>
   
<?php
if(isset($_GET['delete_class'])){
    include('delete_class.php');
}
?>

<?php
if(isset($_GET['delete_classroom'])){
    include('delete_classroom.php');
}
?>
<?php
if(isset($_GET['delete_session'])){
    include('delete_session.php');
}
?>
<?php
if(isset($_GET['delete_subject'])){
    include('delete_subject.php');
}
?>
<?php
if(isset($_GET['delete_term'])){
    include('delete_term.php');
}
?>
<?php
if(isset($_GET['delete_test_type'])){
    include('delete_test_type.php');
}
?>

<?php
if(isset($_GET['dashboard'])){
    include('dashboard.php');
}
?>

<?php
if(isset($_GET['edit_schedule'])){
    include('edit_schedule.php');
}
?>

<?php
if(isset($_GET['delete_schedule'])){
    include('delete_schedule.php');
}
?>
 
<?php
if(isset($_GET['test_type'])){
    include('test_type.php');
}
?>

    
 
 <?php
if(isset($_GET['test'])){
    include('test.php');
}
?>


<?php
if(isset($_GET['schedule_test'])){
    include('schedule_test.php');
}
?>

    
<?php
if(isset($_GET['manage_test'])){
    include('manage_test.php');
}
?>

<?php
if(isset($_GET['manage_schedule'])){
    include('manage_schedule.php');
}
?>

<?php
if(isset($_GET['term'])){
    include('term.php');
}
?>
<?php
if(isset($_GET['teacher'])){
    include('teacher.php');
}
?>
<?php
if(isset($_GET['subject'])){
    include('subject.php');
}
?>
<?php
if(isset($_GET['std_classroom'])){
    include('std_classroom.php');
}
?>

<?php
if(isset($_GET['set_question'])){
    include('set_question.php');
}
?>
<?php
if(isset($_GET['session'])){
    include('session.php');
}
?>


<?php
if(isset($_GET['register'])){
    include('register.php');
}
?>
<?php
if(isset($_GET['question'])){
    include('question.php');
}
?>

<?php
if(isset($_GET['manage_teachers'])){
    include('manage_teachers.php');
}
?>


<?php
if(isset($_GET['classroom'])){
    include('classroom.php');
}
?>


<?php
if(isset($_GET['logout'])){
    include('logout.php');
}
?>


<?php include("includes/footer.php");?>