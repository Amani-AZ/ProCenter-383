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
         $subject = 'Booked Appointment';
         // $content = "New Appoitnment is added!\n\nAppointment Details: \n\nEducator Name: ".$name."\nCourse: ".$course."\nDate: ".$date. "\nTime: ".$time;
         $headers = array(
            "MIME-Version" => "1.0", 
            "Content-Type" =>"text/html;charset=UTF-8",
            "From" =>"arwa.tammar@gmail.com",
            "Reply-To" =>"arwa.tammar@gmail.com"
       );

         //*** Show the result... ***//
         
         ob_start();
         include("mail_stubook_template.php");
         $message = ob_get_contents();
         ob_get_clean();

         if (mail($to, $subject, $message, $headers))
         {
            echo "
            <script> 
               alert('New Appoitnment is added');
               window.location.href='find_an_educator.php'; 
            </script>";
         } 
         else 
         {
            echo "
            <script> 
               alert('ERROR');
               window.location.href='find_an_educator.php'; 
            </script>";
         }  

        }
        else{  
           echo "Error: ".mysqli_error($conn);  
        }  
 } 

?>