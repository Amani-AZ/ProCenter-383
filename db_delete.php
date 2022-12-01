<?php
 include 'db_con.php';  
 if (isset($_GET['app_no'])) {  
      $appNum = $_GET['app_no'];
      $name = $_GET['eduName'];
      $Coures = $_GET['course'];
      $Date = $_GET['date'];
      $Time = $_GET['time'];  
      $query = "DELETE FROM `stusession` WHERE app_no = '$appNum'";  
      $run = mysqli_query($conn,$query);
      if ($run) {  
         header('location:student_appointment.php'); 
          $to = "3910863@stu.rcyci.edu.sa";
          $subject = 'Subject';
          $content = "Your appointment is canceled!!\n\nAppointment Details:\n\nEducator Name: ".$name." \n\nCourse: ".$Coures."\n\nDate: ".$Date. "\nTime: ".$Time;
          $headers = "From: Your-Email\r\n";
          //*** Show the result... ***
          if (mail($to, $subject, $content, $headers))
          {
               echo "<script> 
			          window.alert('Your appointment is canceled!');
			          window.location.href='student_appointment.php'; 
		          </script>";
          } 
          else 
          {
               echo "<script> 
                          window.alert('ERROR');
                          window.location.href='student_appointment.php'; 
                    </script>";
          } 
      }
      else{ 
           echo "Error: ".mysqli_error($conn);  
      }  
 } 
?>