<?php 


class Scripts {
    //protected $pdo;

    function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function checkInput($var){
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripcslashes($var);
        return $var;
    }


    public function addClass($name){
        $sql = "INSERT INTO `class` (`name`) VALUES(:names)";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name)) ){
           return true;
       }
       

    } 
    
    
    public function addTerm($name){
        $sql = "INSERT INTO `term` (`name`) VALUES(:names)";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name)) ){
           return true;
       }
       

    } 

     
    public function addQuestion($name, $pass){
        $sql = "INSERT INTO `question` (`question`, `passage_id`) VALUES(:names, :passage_id)";
        $stmt = $this->pdo->prepare($sql);
       if( $stmt ->execute(array(':names' => $name, ':passage_id' => $pass)) ){
           return true;
       }
       

    } 

    public function addClassroom($name, $class_id){
        $sql = "INSERT INTO `classroom` (`name`,`class_id`) VALUES(:names, :class_id )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name, ':class_id' => $class_id )) ){
           return true;
       }
       

    } 
    
    
    public function addTest($name,$session_id, $subject_id,$question_set_id,$mark, $test_type_id, $staff_id){
        $sql = "INSERT INTO `test` (`test_name`,`session_id`,`subject_id`,`question_set_id`,`total_mark`,`test_type_id`,`staff_id`) VALUES(:names, :sessionid, :subject_id, :question_set_id,:total_mark, :test_type_id, :staff_id )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name, ':sessionid'=> $session_id,  ':subject_id'=> $subject_id, ':question_set_id'=> $question_set_id, ':total_mark'=> $mark,  ':test_type_id'=> $test_type_id,  ':staff_id'=> $staff_id)) ){
           return true;
       }
       

    } 

    public function addTest_type($name){
        $sql = "INSERT INTO `test_type` (`name`) VALUES(:names)";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name)) ){
           return true;
       }
       

    } 

    
    public function addSubject($name){
        $sql = "INSERT INTO `subject` (`name`) VALUES(:names)";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name)) ){
           return true;
       }
       

    } 

    
    public function addSession($name){
        $sql = "INSERT INTO `session` (`name`) VALUES(:names)";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':names' => $name)) ){
           return true;
       }
       

    }

    public function get_subject(){
        $stmt = $this->pdo->prepare("SELECT * FROM `subject` ORDER BY ID DESC");
        $stmt->execute();
        $subject = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $subject; 
    }

    public function get_question_set(){
        $stmt = $this->pdo->prepare("SELECT * FROM `question_set`");
        $stmt->execute();
        $question_set = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $question_set; 
    }

    

    public function get_sessions(){
        $stmt = $this->pdo->prepare("SELECT * FROM `session` ORDER BY ID DESC");
        $stmt->execute();
        $session = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $session; 
    }

    public function get_test_types(){
        $stmt = $this->pdo->prepare("SELECT * FROM `test_type` ORDER BY ID DESC");
        $stmt->execute();
        $test_type = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $test_type; 
    }

    public function get_teachers(){
        $stmt = $this->pdo->prepare("SELECT * FROM `teacher` ORDER BY ID DESC");
        $stmt->execute();
        $teacher = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $teacher; 
    }

    
    public function get_admins(){
        $stmt = $this->pdo->prepare("SELECT * FROM `admin` ORDER BY ID DESC");
        $stmt->execute();
        $admin = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $admin; 
    }

    public function get_test_type_with_id($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test_type` WHERE `id`= :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $test_type = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $test_type; 
    }

    

    public function get_tests(){
        $stmt = $this->pdo->prepare("SELECT * FROM `test`");
        $stmt->execute();
        $test = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $test; 
    }

    public function get_test_with_id($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test` WHERE `id`= :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $test = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $test; 
    }

    public function get_question_set_with_id($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `question_set` WHERE `id`= :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $question_set = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $question_set; 
    }

    public function get_student_with_id($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `students` WHERE `id`= :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $student = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $student; 
    }


    public function get_test_staff($staff_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test` WHERE `staff_id`= :staff_id");
        $stmt->bindParam(":staff_id", $staff_id, PDO::PARAM_INT);
        $stmt->execute();
        $test = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $test; 
    }

    public function get_terms(){
        $stmt = $this->pdo->prepare("SELECT * FROM `term` ORDER BY ID DESC");
        $stmt->execute();
        $term = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $term; 
    }

    public function get_std_details_for_class(){
        $stmt = $this->pdo->prepare("SELECT * FROM `students`");
        $stmt->execute();
        $stds = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $stds; 
    }

    public function get_classes(){
        $stmt = $this->pdo->prepare("SELECT * FROM `class` ORDER BY `id` DESC");
        $stmt->execute();
        $class = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $class; 
    }
    public function get_students(){
        $stmt = $this->pdo->prepare("SELECT * FROM `students` ORDER BY `id` DESC");
        $stmt->execute();
        $students = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $students; 
    }

    public function get_classrooms(){
        $stmt = $this->pdo->prepare("SELECT * FROM `classroom` ORDER BY ID DESC");
        $stmt->execute();
        $class = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $class; 
    }

    
    public function addScheduleTest($test_id, $classroom_id, $term_id, $session_id, $duration, $starting,$ending, $staff_id){
        $sql = "INSERT INTO `schedule_test` (`test_id`,`classroom_id`, `term_id`, `session_id`, `staff_id`,`starting_date`,`ending_date`,`duration`) VALUES(:test_id, :classroom_id, :term_id, :session_id, :staff_id, :starting_date, :ending_date, :duration )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':test_id' => $test_id, ':classroom_id'=> $classroom_id, ':term_id'=> $term_id,':session_id'=>$session_id, ':staff_id'=> $staff_id, ':starting_date'=> $starting, ':ending_date'=> $ending, ':duration'=> $duration )) ){
           return true;
       }
       

    }

    public function addStudent($fname, $sname, $oname, $reg_num, $session_id, $tel, $email){
        $sql = "INSERT INTO `students` (`firstname`,`surname`, `othername`, `reg_number`,`session_id`, `tel`,`email`) VALUES(:fname, :sname, :oname, :reg_num, :session_id, :tel, :email )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':fname' => $fname, ':sname'=> $sname, ':oname'=> $oname,':reg_num'=>$reg_num, ':session_id'=>$session_id, ':tel'=> $tel, ':email'=> $email)) ){
           return true;
       }
       

    }

    
    public function addTeacher($fname, $sname, $email, $staff_id, $password){
        $sql = "INSERT INTO `teacher` (`fname`,`sname`,`email`,`staff_id`,`password`) VALUES(:fnames, :snames, :email, :staff_id, :passwords )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':fnames' => $fname, ':snames' => $sname, ':email'=> $email,  ':staff_id'=> $staff_id, ':passwords'=> MD5($password))) ){
           return true;
       } 

    }

    public function addAdmin($fname, $sname, $email, $staff_id, $password){
        $sql = "INSERT INTO `admin` (`fname`,`sname`,`email`,`staff_id`,`password`) VALUES(:fnames, :snames, :email, :staff_id, :passwords )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':fnames' => $fname, ':snames' => $sname, ':email'=> $email,  ':staff_id'=> $staff_id, ':passwords'=> MD5($password))) ){
           return true;
       } 

    }

    public function insert_into_std_class( $id, $classroom_id, $session_id){
        $sql = "INSERT INTO `std_class` (`student_id`,`classroom_id`,`session_id`) VALUES(:student_id, :classroom_id, :session_id )";
        $stmt = $this->pdo->prepare($sql);

       if( $stmt ->execute(array(':student_id' => $id, ':classroom_id' => $classroom_id, ':session_id'=> $session_id))){
           return true;
       } 

    }

    public function get_questions($test_id){
        $stmt = $this->pdo->prepare("SELECT `question`.`id` AS id FROM `question` INNER JOIN `test` ON `question`.`question_set_id` = `test`.`question_set_id`  WHERE `test`.`id` = :id  GROUP BY `question`.`id`  ");
        $stmt->execute(array(':id'=> $test_id));
        $questions = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $questions;  
    }

    
    public function count_student_num($regnum){
        $stmt = $this->pdo->prepare("SELECT count(*) AS regnum FROM `students` WHERE `reg_number`= $regnum");
        $stmt->execute();
        $views_count = $stmt->fetchColumn(); 
        return $views_count;
      

    }

    public function get_student_details($regnum){
        $stmt = $this->pdo->prepare("SELECT * FROM `students` WHERE `reg_number`= $regnum ");
        $stmt->execute();
        $stdDetails = $stmt->fetch(PDO::FETCH_OBJ);
        return $stdDetails;
 
    }

    public function get_scheduled_test($regnum){
        $stmt = $this->pdo->prepare("SELECT `schedule_test`.`test_id` AS test_id, `schedule_test`.`duration` AS duration, `schedule_test`.`term_id` AS term FROM `schedule_test` INNER JOIN `std_class` ON `schedule_test`.`std_class_id` = `std_class`.`id` WHERE `std_class`. `student_id` = :regnum ORDER BY schedule_test.id DESC  ");
        $stmt->execute(array(':regnum'=> $regnum));
        $schedule_test = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $schedule_test;  
    }

    public function get_test_session($classroom_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `classroom` WHERE `classroom`= $classroom_id ");
        $stmt->execute();
        $session = $stmt->fetch(PDO::FETCH_OBJ);
        return $session; 
    }

    public function createOption($test_id, $question_id, $correct, $option){
          foreach ($option as $key => $data){
                if($data != ''){
                    if($correct == $key){
                        $is_correct = 1;

                    }else{
                        $is_correct = 0;
                    }
                }
                $stmt = $this->pdo->prepare("INSERT INTO `options` (`test_id`, `question_id`, `is_correct`, `options`) VALUES (:test_id, :question_id, :is_correct, :options)");
                $stmt ->bindParam(":test_id", $test_id, PDO::PARAM_INT);
                $stmt ->bindParam(":question_id", $question_id, PDO::PARAM_INT);
                $stmt ->bindParam(":is_correct", $is_correct, PDO::PARAM_INT);
                $stmt ->bindParam(":options", $data, PDO::PARAM_STR);
                $stmt ->execute();
            }
            
            return true;
        
       
          
    }



    public function get_test_deatails($test_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test` WHERE `id`= $test_id ");
        $stmt->execute();
        $test_detail = $stmt->fetch(PDO::FETCH_OBJ);
        return $test_detail; 
    }

    public function get_test_with_staff($staff_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test` WHERE `staff_id`= $staff_id ");
        $stmt->execute();
        $test = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $test; 
    }

    



    
    public function get_subject_deatails($subject_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `subject` WHERE `id`= $subject_id ");
        $stmt->execute();
        $subject_detail = $stmt->fetch(PDO::FETCH_OBJ);
        return $subject_detail; 
    }

    
    public function get_questions_table($question_set_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `question` WHERE `question_set_id`= $question_set_id ORDER by id DESC  ");
        $stmt->execute();
        $questions = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $questions; 
    }

    public function get_questions_option($question_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `question` WHERE `id`= $question_id ORDER by id DESC  ");
        $stmt->execute();
        $questions = $stmt->fetch(PDO::FETCH_OBJ);
        return $questions; 
    }

    public function count_options($question_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `options` WHERE `question_id`= :question_id");
        $stmt->bindParam(":question_id", $question_id, PDO::PARAM_INT);
        $stmt->execute();
        $count= $stmt->rowCount();
      
        return $count; 
    }
    public function count_tests($staff_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test` WHERE `staff_id`= :staff_id");
        $stmt->bindParam(":staff_id", $staff_id, PDO::PARAM_INT);
        $stmt->execute();
        $count= $stmt->rowCount();
      
        return $count; 
    }
    public function count_schedules($staff_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `schedule_test` WHERE `staff_id`= :staff_id");
        $stmt->bindParam(":staff_id", $staff_id, PDO::PARAM_INT);
        $stmt->execute();
        $count= $stmt->rowCount();
      
        return $count; 
    }

    public function get_passage($question_set_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `passage` WHERE `question_set_id`= :question_set_id");
        $stmt->bindParam(":question_set_id", $question_set_id, PDO::PARAM_INT);
        $stmt->execute();
        $passage = $stmt->fetch(PDO::FETCH_OBJ);
        return $passage; 
    }

    public function get_questions_count($question_set_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `question` WHERE `question_set_id`= :question_set_id");
        $stmt->bindParam(":question_set_id", $question_set_id, PDO::PARAM_INT);
        $stmt->execute();
        $count= $stmt->rowCount();
      
        return $count; 
    }

    public function get_test_type($test_type_ids){
        $stmt = $this->pdo->prepare("SELECT * FROM `test_type` WHERE `id`= :test_type_ids");
        $stmt->bindParam(":test_type_ids", $test_type_ids, PDO::PARAM_INT);
        $stmt->execute();
        $test_type = $stmt->fetch(PDO::FETCH_OBJ);
        return $test_type; 
    }

    public function get_session($session_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `session` WHERE `id`= :session_id");
        $stmt->bindParam(":session_id", $session_id, PDO::PARAM_INT);
        $stmt->execute();
        $session = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $session; 
    }

    public function get_schedule_with_id($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `schedule_test` WHERE `id`= :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $schedule = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $schedule; 
    }

    public function get_std_class_with_id($class_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `std_class` WHERE `id`= :class_id");
        $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
        $stmt->execute();
        $session = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $session; 
    }

    public function get_term_with_id($term_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `term` WHERE `id`= :term_id");
        $stmt->bindParam(":term_id", $term_id, PDO::PARAM_INT);
        $stmt->execute();
        $term_id = $stmt->fetch(PDO::FETCH_OBJ);
      
        return $term_id; 
    }

    public function teacher_login($email,$password){
        $stmt = $this->pdo->prepare("SELECT * FROM `teacher` WHERE `email`=:email AND `password`= :passwords");-
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":passwords", $password, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_OBJ);
        $count = $stmt->rowCount();


        if($count>0){
            session_start();
            $_SESSION['staff_id'] = $user->id;
            $_SESSION['sname'] = $user->sname;
            $_SESSION['fname'] = $user->fname;
            $_SESSION['passport'] = $user->passport;
            $_SESSION['email'] = $user->email;
            header('Location: index.php');
        }else{
            return false;
        }
        
    }


    public function admin_login($email,$password){
        $stmt = $this->pdo->prepare("SELECT * FROM `teacher` WHERE `email`=:email AND `password`= :passwords");-
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":passwords", $password, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_OBJ);
        $count = $stmt->rowCount();


        if($count>0){
            session_start();
            $_SESSION['super_admin'] = 1;
            $_SESSION['staff_id'] = $user->id;
            $_SESSION['sname'] = $user->sname;
            $_SESSION['fname'] = $user->fname;
           // $_SESSION['passport'] = $user->passport;
            $_SESSION['email'] = $user->email;
            header('Location: index.php?dashboard');
        }else{
            return false;
        }
        
    }

    public function get_schedule_with_staff($staff_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `schedule_test` WHERE `staff_id`= $staff_id ORDER by id DESC  ");
        $stmt->execute();
        $schedule = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $schedule; 
    }
    public function get_schedule(){
        $stmt = $this->pdo->prepare("SELECT * FROM `schedule_test` ORDER by id DESC  ");
        $stmt->execute();
        $schedule = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $schedule; 
    }

    public function get_test_name($test_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `test` WHERE `id`= $test_id ORDER by id DESC  ");
        $stmt->execute();
        $testd = $stmt->fetch(PDO::FETCH_OBJ);
        return $testd; 
    }

    public function  get_class($class_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `class` WHERE `id`= $class_id ");
        $stmt->execute();
        $class_id = $stmt->fetch(PDO::FETCH_OBJ);
        return $class_id; 
    }


    public function  get_classroom_details($classroom_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `classroom` WHERE `id`= $classroom_id ");
        $stmt->execute();
        $classroom = $stmt->fetch(PDO::FETCH_OBJ);
        return $classroom; 
    }

    public function get_classroom_std($classroom_id){
        $stmt = $this->pdo->prepare("SELECT * FROM `std_class` WHERE `classroom_id`= :classroom_id");
        $stmt->bindParam(":classroom_id", $classroom_id, PDO::PARAM_INT);
        $stmt->execute();
        $count= $stmt->rowCount();
      
        return $count; 
    }

  
    public function delete_class($class_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM class WHERE id=$class_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }

    
    public function delete_subject($subject_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM subject WHERE id=$subject_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }

    public function delete_session($session_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM session WHERE id=$session_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }


    public function delete_term($term_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM term WHERE id=$term_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }

    public function delete_test_type($test_type_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM test_type WHERE id=$test_type_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }
    public function delete_schedule($schedule_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM schedule_test WHERE id=$schedule_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }
    public function delete_classroom($classroom_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM classroom WHERE id=$classroom_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }

    public function delete_student($student_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM students WHERE id=$student_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }

    public function delete_teacher($teacher_id){
        try {
           $stmt = $this->pdo->prepare("DELETE FROM teacher WHERE id=$teacher_id");
           $stmt->execute();
           return true;

            
        }
        catch(PDOException $e)
            {
           return $stmt . "<br>" . $e->getMessage();
            }
    }

    public function update_test_with_id($test_id, $test_name, $subject_id, $question_set_id, $session_id, $total_mark, $test_type_id,$staff_id){
        $stmt = $this->pdo->prepare("UPDATE `test` SET `test_name` = :test_name, `subject_id` = :subject_id, `question_set_id` = :question_set_id, `session_id` = :session_id, `total_mark` = :total_mark, `test_type_id` = :test_type_id `staff_id` = :staff_id WHERE `id` = :test_id");
                
         $query = $stmt ->execute(array(':test_id'  => $test_id,':test_name'  => $test_name,':subject_id'  => $subject_id, ':question_set_id'  => $question_set_id, ':staff_id' => $staff_id , ':test_type_id'  => $test_type_id, ':total_mark' => $total_mark,  ':session_id' => $session_id));
                if($query){
                    return true;
                }else{
                    return false;
                }
                
      
    }

    public function update($table, $id, $fields = array()){
        $columns = '';
        $i       = 1;

        foreach($fields as $name => $value){
            $columns .= "`{$name}` = :{$name}";
            if($i < count($fields)){
                $columns .= ',';
            }
            $i++;
        }
         $sql = "UPDATE {$table} SET {$columns} WHERE `id` = {$id}";
        if($stmt = $this->pdo->prepare($sql)){
            foreach($fields as $key => $value){
                $stmt->bindValue(':'.$key, $value);
            }
           
            $stmt->execute();
           //  var_dump($stmt);
        }
    }





       



    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location: ../login.php');
    } 

    
    public function logoutAdmin(){
        session_start();
        $_SESSION = array();
        session_destroy();
        echo "<script>window.open('login.php','_self')</script>";
  
    } 
}
?>