<?php   

 include 'db_con.php';  
 if (isset($_GET['stuid'])) {  
      $id = $_GET['stuid']; 
      $name = $_GET['edu_name'];
      $course = $_GET['course'];
      $date = $_GET['date'];
      $time = $_GET['time']; 
      $query = "insert into StuSession(stuid,eduName,course,date,time) values('$id','$name','$course','$date','$time')"; 
      $run = mysqli_query($conn,$query);  
      if ($run) { 
         $to = "3910191@stu.rcyci.edu.sa";
         $subject = 'Subject to Here';
         $content = "New Appoitnment is added!.\n\nAppointment Details: \n\nEducator Name: ".$name."\nCourse: ".$course."\nDate: ".$date. "\nTime: ".$time;
         $headers = "From: Your-Email\r\n";
         //*** Show the result... ***
         if (mail($to, $subject, $content, $headers))
         {
            echo "
            <script> 
            alert('New Appoitnment is added');
            window.location.href='find_an_educator.php'; </script>";
         } 
         else 
         {
            echo "
            <script> 
            alert('ERROR');
            window.location.href='find_an_educator.php'; </script>";
         }  

        }
      else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 } 

?>
